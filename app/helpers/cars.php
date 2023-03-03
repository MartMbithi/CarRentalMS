<?php
/*
 *   Crafted On Fri Mar 03 2023
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



/* Bulk Import Car Categories */

if (isset($_POST['Bulk_Import_Car_Categories'])) {
    /* Proccess Bulk Import */
    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    /* Where Magic Happens */
    if (in_array($_FILES["car_categories"]["type"], $allowedFileType)) {
        $targetPath = '../storage/templates/' . 'Bulk Import Cars ' . time() . ' ' . $_FILES['car_categories']['name'];
        move_uploaded_file($_FILES['car_categories']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 1; $i <= $sheetCount; $i++) {

            $category_name = "";
            if (isset($spreadSheetAry[$i][0])) {
                $category_name = mysqli_real_escape_string($mysqli, $spreadSheetAry[$i][0]);
            }

            /* Static Values */
            $category_code = substr(str_shuffle("0987654321QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"), 1, 5);
            if ($category_name != "") {
                /* Prevent Duplicates */
                $check = mysqli_query($mysqli, "SELECT * FROM car_categories WHERE category_name = '{$category_name}'");
                if (mysqli_num_rows($check) > 0) {
                    $err = "Category already exists";
                } else {
                    $query = "INSERT INTO car_categories (category_name, category_code) VALUES ('{$category_name}', '{$category_code}')";
                    if (mysqli_query($mysqli, $query)) {
                        $success = "Categories Imported Successfully";
                    } else {
                        $err = "Something went wrong. Please try again";
                    }
                }
            }
        }
        /* Unlink Files */
        unlink($targetPath);
    } else {
        $info = "Invalid file type. please upload excel file";
    }
}


/* Add Vehicle Categories */
if (isset($_POST['Add_Categories'])) {
    $category_code = mysqli_real_escape_string($mysqli, $_POST['category_code']);
    $category_name = mysqli_real_escape_string($mysqli, $_POST['category_name']);

    /* Prevent Duplications */
    $check = mysqli_query($mysqli, "SELECT * FROM car_categories WHERE category_name = '{$category_name}'");
    if (mysqli_num_rows($check) > 0) {
        $err = "Category already exists";
    } else {
        $query = "INSERT INTO car_categories (category_name, category_code) VALUES ('{$category_name}', '{$category_code}')";
        if (mysqli_query($mysqli, $query)) {
            $success = "Category added successfully";
        } else {
            $err = "Something went wrong. Please try again";
        }
    }
}

/* Update Vehicle Categories */
if (isset($_POST['Update_Categories'])) {
    $category_code = mysqli_real_escape_string($mysqli, $_POST['category_code']);
    $category_name = mysqli_real_escape_string($mysqli, $_POST['category_name']);
    $category_id = mysqli_real_escape_string($mysqli, $_POST['category_id']);

    $query = "UPDATE car_categories SET category_name = '{$category_name}', category_code = '{$category_code}' 
    WHERE category_id = '{$category_id}'";
    if (mysqli_query($mysqli, $query)) {
        $success = "Category updated successfully";
    } else {
        $err = "Something went wrong. Please try again";
    }
}


/* Delete Vehicled Categories */
if (isset($_POST['Delete_Categories'])) {
    $category_id = $_POST['category_id'];
    $query = "DELETE FROM car_categories WHERE category_id = '{$category_id}'";
    if (mysqli_query($mysqli, $query)) {
        $success = "Category deleted successfully";
    } else {
        $err = "Something went wrong. Please try again";
    }
}


/* Add Vehicles */
if (isset($_POST['Add_Car_Details'])) {
    $car_category_id = mysqli_real_escape_string($mysqli, $_POST['car_category_id']);
    $car_model = mysqli_real_escape_string($mysqli, $_POST['car_model']);
    $car_yom = mysqli_real_escape_string($mysqli, $_POST['car_yom']);
    $car_reg_number = mysqli_real_escape_string($mysqli, $_POST['car_reg_number']);
    $car_mileage = mysqli_real_escape_string($mysqli, $_POST['car_mileage']);
    $car_transmission_type = mysqli_real_escape_string($mysqli, $_POST['car_transmission_type']);
    $car_seats = mysqli_real_escape_string($mysqli, $_POST['car_seats']);
    $car_fuel_type = mysqli_real_escape_string($mysqli, $_POST['car_fuel_type']);
    $car_description = mysqli_real_escape_string($mysqli, $_POST['car_description']);
    $car_renting_rate = mysqli_real_escape_string($mysqli, $_POST['car_renting_rate']);

    /* Prevent Duplications */
    $check = mysqli_query($mysqli, "SELECT * FROM cars WHERE car_reg_number = '{$car_reg_number}'");
    if (mysqli_num_rows($check) > 0) {
        $err = "Registration plate number already exists";
    } else {
        $add_vehicle_sql = "INSERT INTO cars (car_category_id, car_model, car_yom, car_reg_number, car_mileage, car_transmission_type, car_seats, car_fuel_type, car_description, car_renting_rate)
        VALUES ('{$car_category_id}', '{$car_model}', '{$car_yom}', '{$car_reg_number}', '{$car_mileage}', '{$car_transmission_type}', '{$car_seats}', '{$car_fuel_type}', '{$car_description}', '{$car_renting_rate}')";
        if (mysqli_query($mysqli, $add_vehicle_sql)) {
            $success = "Vehicle added successfully";
        } else {
            $err = "Something went wrong. Please try again";
        }
    }
}


/* Update Cars */
if (isset($_POST['Update_Car_Details'])) {
    $car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
    $car_category_id = mysqli_real_escape_string($mysqli, $_POST['car_category_id']);
    $car_model = mysqli_real_escape_string($mysqli, $_POST['car_model']);
    $car_yom = mysqli_real_escape_string($mysqli, $_POST['car_yom']);
    $car_reg_number = mysqli_real_escape_string($mysqli, $_POST['car_reg_number']);
    $car_mileage = mysqli_real_escape_string($mysqli, $_POST['car_mileage']);
    $car_transmission_type = mysqli_real_escape_string($mysqli, $_POST['car_transmission_type']);
    $car_seats = mysqli_real_escape_string($mysqli, $_POST['car_seats']);
    $car_fuel_type = mysqli_real_escape_string($mysqli, $_POST['car_fuel_type']);
    $car_description = mysqli_real_escape_string($mysqli, $_POST['car_description']);
    $car_renting_rate = mysqli_real_escape_string($mysqli, $_POST['car_renting_rate']);

    /* Update */
    $update_sql = "UPDATE cars SET car_category_id = '{$car_category_id}', car_model = '{$car_model}', car_yom = '{$car_yom}',
    car_reg_number = '{$car_reg_number}', car_mileage = '{$car_mileage}', car_transmission_type = '{$car_transmission_type}', 
    car_seats = '{$car_seats}', car_fuel_type = '{$car_fuel_type}', car_description = '{$car_description}', car_renting_rate = '{$car_renting_rate}' WHERE car_id = '{$car_id}'";
    if (mysqli_query($mysqli, $update_sql)) {
        $success = "Vehicle details updated successfully";
    } else {
        $err = "Something went wrong. Please try again";
    }
}

/* Upload Car Images */
if (isset($_POST['Update_Vehicle_Images'])) {
    $fileNames = array_filter($_FILES['files']['name']);
    $car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
    $allowTypes = array('jpg', 'png', 'jpeg', 'webp');
    $image_code = rand(999999, 111111);
    $targetDir = "../storage/cars/";
    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            $fileName = basename($image_code . $_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    $insert = mysqli_query($mysqli, "INSERT INTO car_images (image_car_id, image_file_name) VALUES ('{$car_id}', '" . $fileName . "')");
                }
            } else {
                $err = "Sorry, only JPG, JPEG, PNG files are allowed to upload.";
            }
        }
        if ($insert) {
            $success = "Images uploaded successfully";
        } else {
            $err = "Something went wrong. Please try again";
        }
    } else {
        $err = "Please select images to upload";
    }
}

/* Delete Cars */
if (isset($_POST['Delete_Cars'])) {
    $car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
    $query = "DELETE FROM cars WHERE car_id = '{$car_id}'";
    if (mysqli_query($mysqli, $query)) {
        $success = "Car deleted successfully";
    } else {
        $err = "Something went wrong. Please try again";
    }
}
