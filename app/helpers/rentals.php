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
    $client_phone_number  = mysqli_real_escape_string($mysqli, $_POST['client_phone_number']);
    $client_email = mysqli_real_escape_string($mysqli, $_POST['client_email']);


    /* Check Payment Method */
    if ($payment_means == 'Cash') {
        /* Persist payment */
        $pay_rental_sql = "INSERT INTO payments (payment_rental_id, payment_means, payment_ref_code, payment_amount)
        VALUES ('{$payment_rental_id}', '{$payment_means}', '{$payment_ref_code}', '{$payment_amount}')";
        $update_rental_sql = "UPDATE car_rentals SET rental_payment_status = '1' WHERE rental_id = '{$payment_rental_id}'";

        if (mysqli_query($mysqli, $pay_rental_sql) && mysqli_query($mysqli, $update_rental_sql)) {
            $success = "Payment made successfully";
        } else {
            $err = "Something went wrong, try again";
        }
    } else if ($payment_means == 'Mpesa') {
        /* Handle mpesa payment */
        /* Load Mpesa STK PUSH */
        date_default_timezone_set('Africa/Nairobi');

        # access token - Automatically added to the database to avoid key bleeds
        $consumerKey = $consumer_key;
        $consumerSecret = $consumer_secret;

        # define the variales
        # provide the following details, this part is found on your test credentials on the developer account
        $Amount = $payment_amount;
        $BusinessShortCode = $business_shortCode; /* Find this variable under app/settings/mpesa_daraja_api_config.php */
        $Passkey = $passkey;

        /*
            This are your info, for
            $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
            $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
            TransactionDesc can be anything, probably a better description of or the transaction
            $Amount this is the total invoiced amount, Any amount here will be 
            actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
            for developer/test accounts, this money will be reversed automatically by midnight.
        */

        $PartyA =  $user_contacts;
        $AccountReference = 'eArtworks';
        $TransactionDesc = 'Mobile Payment for order number ' . $payment_order_code;

        # Get the timestamp, format YYYYmmddhms -> 20181004151020
        $Timestamp = date('YmdHis');

        # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
        $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);

        # header for access token
        $headers = ['Content-Type:application/json; charset=utf8'];

        # M-PESA endpoint urls
        $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        # callback url
        $CallBackURL = 'https://' . $_SERVER['HTTP_HOST'] . '/eArtworks/ui/callback_url.php?order=' . $payment_order_code . '&means=' . $payment_means_id;

        $curl = curl_init($access_token_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
        $result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($result);
        $access_token = $result->access_token;
        curl_close($curl);

        # header for stk push
        $stkheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];

        # initiating the transaction
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $initiate_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $Password,
            'Timestamp' => $Timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $BusinessShortCode,
            'PhoneNumber' => $PartyA,
            'CallBackURL' => $CallBackURL,
            'AccountReference' => $AccountReference,
            'TransactionDesc' => $TransactionDesc
        );

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);

    } else if ($payment_means == 'Card') {
        /* Handle card payments */
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