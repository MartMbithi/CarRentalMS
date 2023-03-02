<?php
/*
 *   Crafted On Thu Mar 02 2023
 *   Author Martin (martin@devlan.co.ke)
 * 
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD End User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. GRANT OF LICENSE 
 *   Devlan Solutions LTD hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on two separated computers solely for your personal and non-commercial use,
 *   unless you have purchased a commercial license from Devlan Solutions LTD. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from Devlan Solutions LTD.
 *
 *   2. COPYRIGHT 
 *   The Software is owned by Devlan Solutions LTD and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   DEVLAN SOLUTIONS LTD  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   DEVLAN SOLUTIONS LTD SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN SOLUTIONS LTD OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF DEVLAN SOLUTIONS LTD HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL DEVLAN SOLUTIONS LTD  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */
require_once('../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

/* Bulk Import Clients */

if (isset($_POST['Bulk_Import_Clients'])) {
    /* Proccess Bulk Import */
    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    /* Where Magic Happens */
    if (in_array($_FILES["client_details"]["type"], $allowedFileType)) {
        $targetPath = '../storage/templates/' . 'Bulk Import Clients ' . time() . ' ' . $_FILES['client_details']['name'];
        move_uploaded_file($_FILES['client_details']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 1; $i <= $sheetCount; $i++) {

            $client_names = "";
            if (isset($spreadSheetAry[$i][0])) {
                $client_names = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][0]);
            }

            $client_id_no = "";
            if (isset($spreadSheetAry[$i][1])) {
                $client_id_no = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][1]);
            }

            $client_email = "";
            if (isset($spreadSheetAry[$i][2])) {
                $client_email = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][2]);
            }

            $client_phone_number = "";
            if (isset($spreadSheetAry[$i][3])) {
                $client_phone_number = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][3]);
            }

            $client_address = "";
            if (isset($spreadSheetAry[$i][4])) {
                $client_address = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][4]);
            }


            /* Static Values */
            $client_password = sha1(md5('Client@CarRentals')); /* Default Staff Password */
            $client_date_joined = date('d M Y g:ia'); /* Default Staff Password */

            /* Prevent Duplicates */
            $sql = "SELECT * FROM clients WHERE client_id_no = '{$client_id_no}' 
            OR client_email = '{$client_email}' OR client_phone_number = '{$client_phone_number}' ";
            $res = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($check_user) > 0) {
                $info = "Duplicate entry, please check your data file";
            } else {
                $sql = "INSERT INTO clients (client_names, client_id_no, client_email, client_phone_number, client_address, client_password, client_date_joined) 
                VALUES ('{$client_names}', '{$client_id_no}', '{$client_email}', '{$client_phone_number}', '{$client_address}', '{$client_password}', '{$client_date_joined}')";
                $res = mysqli_query($mysqli, $sql);
                if ($res) {
                    $info = "Data imported successfully";
                } else {
                    $info = "Failed to import data, please check your data file and try again";
                }
            }
        }
        /* Unlink Files */
        unlink($targetPath);
    } else {
        $info = "Invalid file type. please upload excel file";
    }
}

/* Add Client */
if (isset($_POST['Add_Clients'])) {
    $client_names = mysqli_real_escape_string($mysqli, trim($_POST['client_names']));
    $client_id_no = mysqli_real_escape_string($mysqli, trim($_POST['client_id_no']));
    $client_email = mysqli_real_escape_string($mysqli, trim($_POST['client_email']));
    $client_phone_number = mysqli_real_escape_string($mysqli, trim($_POST['client_phone_number']));
    $client_address = mysqli_real_escape_string($mysqli, trim($_POST['client_address']));
    $client_password = sha1(md5($mysqli, trim($_POST['client_password'])));  /* Default Client Password = Client@CarRentals */
    $client_date_joined = date('d M Y g:ia');

    /* Prevent Duplicates */
    $sql = "SELECT * FROM clients WHERE client_id_no = '{$client_id_no}' || client_email = '{$client_email}' || client_phone_number = '{$client_phone_number}' ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $info = "A Client with the same details already exists";
    } else {
        $sql = "INSERT INTO clients (client_names, client_id_no, client_email, client_phone_number, client_address, client_password, client_date_joined) 
        VALUES ('{$client_names}', '{$client_id_no}', '{$client_email}', '{$client_phone_number}', '{$client_address}', '{$client_password}', '{$client_date_joined}')";
        $res = mysqli_query($mysqli, $sql);
        if ($res) {
            $info = "Client added successfully";
        } else {
            $info = "Failed to Add Client, please try again";
        }
    }
}

/* Update Client */
if (isset($_POST['Update_Client'])) {
    $client_id = mysqli_real_escape_string($mysqli, trim($_POST['client_id']));
    $client_names = mysqli_real_escape_string($mysqli, trim($_POST['client_names']));
    $client_id_no = mysqli_real_escape_string($mysqli, trim($_POST['client_id_no']));
    $client_email = mysqli_real_escape_string($mysqli, trim($_POST['client_email']));
    $client_phone_number = mysqli_real_escape_string($mysqli, trim($_POST['client_phone_number']));
    $client_address = mysqli_real_escape_string($mysqli, trim($_POST['client_address']));

    $sql = "UPDATE clients SET client_names = '{$client_names}', client_id_no = '{$client_id_no}', client_email = '{$client_email}', client_phone_number = '{$client_phone_number}', client_address = '{$client_address}'
    WHERE client_id = '{$client_id}' ";
    if ($res = mysqli_query($mysqli, $sql)) {
        $success = "Details updated successfully";
    } else {
        $err = "Failed to update details, please try again";
    }
}

/* Update Client Passwords */
if (isset($_POST['Update_Client_Passwords'])) {
    $client_id = mysqli_real_escape_string($mysqli, trim($_POST['client_id']));
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, trim($_POST['new_password']))));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, trim($_POST['confirm_password']))));

    /* Check if passwords match */
    if ($new_password != $confirm_password) {
        $err = "Passwords do not match, please try again";
    } else {
        $sql = "UPDATE clients SET client_password = '{$new_password}' WHERE client_id = '{$client_id}' ";
        if ($res = mysqli_query($mysqli, $sql)) {
            $success = "Password updated successfully";
        } else {
            $err = "Failed to update password, please try again";
        }
    }
}

/* Delete Client */
if (isset($_POST['Delete_Client'])) {
    $client_id = mysqli_real_escape_string($mysqli, trim($_POST['client_id']));

    $sql = "DELETE FROM clients WHERE client_id = '{$client_id}' ";
    if ($res = mysqli_query($mysqli, $sql)) {
        $success = "Details successfully";
    } else {
        $err = "Failed to delete Client, please try again";
    }
}
