<?php
/*
 *   Crafted On Fri Feb 24 2023
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

/* Bulk Import */

/* Add Staff */
if (isset($_POST['Add_Staff'])) {
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_number = mysqli_real_escape_string($mysqli, $_POST['user_number']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_id_number = mysqli_real_escape_string($mysqli, $_POST['user_id_number']);
    $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    $user_address = mysqli_real_escape_string($mysqli, $_POST['user_address']);
    $user_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['user_password'])));
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    $user_dpic  = mysqli_real_escape_string($mysqli, $_FILES['user_dpic']['name']);

    /* Process DPIC */
    $temp_dpic = explode('.', $user_dpic);
    $new_user_dpic = 'Car_Rental_' . $user_access_level . '_DPIC_' . time() . '.' . end($temp_dpic);
    move_uploaded_file(
        $_FILES['user_dpic']['tmp_name'],
        '../storage/users/' . $new_user_dpic
    );

    /* Prevent duplicates */
    $check_sql = "SELECT * FROM users WHERE user_email = '{$user_email}' OR user_phone_number = '{$user_phone_number}' OR user_id_number = '{$user_id_number}'";
    $check_result = mysqli_query($mysqli, $check_sql);
    if (mysqli_num_rows($check_result) > 0) {
        $err = 'User already exists';
    } else {
        /* Perist */
        $add_sql = "INSERT INTO users (user_name, user_number, user_email, user_id_number, user_phone_number, user_address, user_password, user_access_level, user_dpic)
        VALUES ('{$user_name}', '{$user_number}', '{$user_email}', '{$user_id_number}', '{$user_phone_number}', '{$user_address}', '{$user_password}', '{$user_access_level}', '{$new_user_dpic}')";
        $add_result = mysqli_query($mysqli, $add_sql);
        if ($add_result) {
            $success = 'User added successfully';
        } else {
            $err =  'Something went wrong. Please try again';
        }
    }
}

/* Update Staff */
if (isset($_POST['Update_Staff'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    $user_id_number = mysqli_real_escape_string($mysqli, $_POST['user_id_number']);
    $user_address = mysqli_real_escape_string($mysqli, $_POST['user_address']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);

    /* Perist */
    $update_sql = "UPDATE users SET user_name = '{$user_name}', user_email  = '{$user_email}', user_phone_number = '{$user_phone_number}', user_id_number = '{$user_id_number}', 
    user_address = '{$user_address}', user_access_level = '{$user_access_level}' WHERE user_id = '{$user_id}'";
    if (mysqli_query($mysqli, $update_sql)) {
        $success  = "Details updated successfully";
    } else {
        $err = "Failed, please try again later";
    }
}

/* Delete Staff */
if (isset($_POST['Delete_Staff'])) {
    $user_id  = mysqli_real_escape_string($mysqli, $_POST['user_id']);

    /* Persist */
    $delete_sql = "DELETE FROM users WHERE user_id = '{$user_id}'";
    if (mysqli_query($mysqli, $delete_sql)) {
        $success  = "Details deleted successfully";
    } else {
        $err = "Failed, please try again later";
    }
}

/* Update Staff Profile */
if (isset($_POST['Update_Staff_Profile'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    $user_id_number = mysqli_real_escape_string($mysqli, $_POST['user_id_number']);
    $user_address = mysqli_real_escape_string($mysqli, $_POST['user_address']);

    /* Perist */
    $update_sql = "UPDATE users SET user_name = '{$user_name}', user_email  = '{$user_email}', user_phone_number = '{$user_phone_number}', user_id_number = '{$user_id_number}', 
    user_address = '{$user_address}' WHERE user_id = '{$user_id}'";
    if (mysqli_query($mysqli, $update_sql)) {
        $success  = "Profile updated successfully";
    } else {
        $err = "Failed, please try again later";
    }
}

/* Update Staff Passwords */
if (isset($_POST['Update_Staff_Password'])) {
    $old_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['old_password'])));
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);

    /* Check Passwords match */
    if ($confirm_password != $new_password) {
        $err =  "Passwords do not match";
    } else {
        /* Check If Old Passwords Do Match */
        $sql = "SELECT * FROM  users WHERE user_id = '{$user_id}'
        AND user_password = '{$old_password}'";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            /* Update Password */
            $update_sql = "UPDATE users SET user_password = '{$new_password}' WHERE user_id = '{$user_id}'";
            if (mysqli_query($mysqli, $update_sql)) {
                $success = "Password updated successfully";
            } else {
                $err = "Failed, please try again later";
            }
        } else {
            $err = "Old Password is incorrect";
        }
    }
}

/* Update Staff Images */
if (isset($_POST['Update_Staff_Profile_Photo'])) {
    $user_dpic  = mysqli_real_escape_string($mysqli, $_FILES['user_dpic']['name']);
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);

    /* Files  */
    $temp_dpic = explode('.', $user_dpic);
    $new_user_dpic = 'Car_Rental_Staff_DPIC_' . time() . '.' . end($temp_dpic);
    move_uploaded_file(
        $_FILES['user_dpic']['tmp_name'],
        '../storage/users/' . $new_user_dpic
    );

    /* Persist */
    $update_dpic_sql = "UPDATE users SET user_dpic = '{$new_user_dpic}' WHERE user_id = '{$user_id}'";
    if (mysqli_query($mysqli, $update_dpic_sql)) {
        $success = "Profile picture updated successfully";
    } else {
        $err = "Failed, please try again later";
    }
}
