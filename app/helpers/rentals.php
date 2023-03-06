<?php
/*
 *   Crafted On Mon Mar 06 2023
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


/* Add Rentals */
if (isset($_POST['Add_Rental'])) {
    $rental_ref_code = mysqli_real_escape_string($mysqli, $_POST['rental_ref_code']);
    $rental_car_id = mysqli_real_escape_string($mysqli, $_POST['rental_car_id']);
    $rental_client_id = mysqli_real_escape_string($mysqli, $_POST['rental_client_id']);
    $rental_from_date = mysqli_real_escape_string($mysqli, $_POST['rental_from_date']);
    $rental_to_date = mysqli_real_escape_string($mysqli, $_POST['rental_to_date']);
    /* Number of days rented */
    $number_of_days = ceil(abs(strtotime($rental_to_date) - strtotime($rental_from_date)) / 86400);
    $rental_cost = (mysqli_real_escape_string($mysqli, $_POST['rental_cost']) * $number_of_days);

    /* Persist */
    $add_rental_sql = "INSERT INTO car_rentals (rental_ref_code, rental_car_id, rental_client_id, rental_from_date, rental_to_date, rental_cost)
    VALUES ('{$rental_ref_code}', '{$rental_car_id}', '{$rental_client_id}', '{$rental_from_date}', '{$rental_to_date}', '{$rental_cost}')";
    $car_status_sql = "UPDATE cars SET car_availability_status = '1' WHERE car_id = '{$rental_car_id}'";

    if (mysqli_query($mysqli, $add_rental_sql) && mysqli_query($mysqli, $car_status_sql)) {
        $success = "Vehicle rented successfully";
    } else {
        $err = "Something went wrong, try again";
    }
}

/* Update Rentals */
if (isset($_POST['Update_Rental'])) {
    $rental_id = mysqli_real_escape_string($mysqli, $_POST['rental_id']);
    $rental_from_date = mysqli_real_escape_string($mysqli, $_POST['rental_from_date']);
    $rental_to_date = mysqli_real_escape_string($mysqli, $_POST['rental_to_date']);
    /* Number of days rented */
    $number_of_days = ceil(abs(strtotime($rental_to_date) - strtotime($rental_from_date)) / 86400);
    $rental_cost = (mysqli_real_escape_string($mysqli, $_POST['rental_cost']) * $number_of_days);

    /* Persist */
    $update_rental_sql = "UPDATE car_rentals SET rental_from_date = '{$rental_from_date}', rental_to_date = '{$rental_to_date}', rental_cost = '{$rental_cost}' WHERE rental_id = '{$rental_id}'";
    if (mysqli_query($mysqli, $update_rental_sql)) {
        $success = "Rental updated successfully";
    } else {
        $err = "Something went wrong, try again";
    }
}

/* Pay Rentals */
if (isset($_POST['Pay_Rentals'])) {
    $payment_rental_id = mysqli_real_escape_string($mysqli, $_POST['payment_rental_id']);
    $payment_means = mysqli_real_escape_string($mysqli, $_POST['payment_means']);
    $payment_ref_code = mysqli_real_escape_string($mysqli, $_POST['payment_ref_code']);
    $payment_amount = mysqli_real_escape_string($mysqli, $_POST['payment_amount']);


    /* Persist payment */
    $pay_rental_sql = "INSERT INTO payments (payment_rental_id, payment_means, payment_ref_code, payment_amount)
    VALUES ('{$payment_rental_id}', '{$payment_means}', '{$payment_ref_code}', '{$payment_amount}')";
    $update_rental_sql = "UPDATE car_rentals SET rental_payment_status = '1' WHERE rental_id = '{$payment_rental_id}'";

    if (mysqli_query($mysqli, $pay_rental_sql) && mysqli_query($mysqli, $update_rental_sql)) {
        $success = "Payment made successfully";
    } else {
        $err = "Something went wrong, try again";
    }
}

/* Delete Rentals */
if (isset($_POST['Delete_Rentals'])) {
    $rental_id = mysqli_real_escape_string($mysqli, $_POST['rental_id']);
    $rental_car_id = mysqli_real_escape_string($mysqli, $_POST['rental_car_id']);

    /* Persist */
    $delete_sql = "DELETE FROM car_rentals WHERE rental_id = '{$rental_id}'";
    $car_status_sql = "UPDATE cars SET car_availability_status = '0' WHERE car_id = '{$rental_car_id}'";

    if (mysqli_query($mysqli, $delete_sql) && mysqli_query($mysqli, $car_status_sql)) {
        $success = "Rental record deleted";
    } else {
        $err = "Failed, please try again";
    }
}

/* Return Cars */