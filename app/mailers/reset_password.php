<?php
/*
 *   Crafted On Tue Feb 21 2023
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


/* Mailer Configurations */
require_once('../vendor/phpmailer/phpmailer/src/SMTP.php');
require_once('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once('../vendor/phpmailer/phpmailer/src/Exception.php');

$ret = "SELECT * FROM mailer_settings";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($mailer = $res->fetch_object()) {

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->setFrom($mailer->mail_from_email);
    $mail->addAddress($client_email);
    $mail->FromName = $mailer->mail_from_name;
    $mail->isHTML(true);
    $mail->IsSMTP();
    $mail->SMTPSecure = $mailer->mail_protocol;
    $mail->Host = $mailer->mail_host;
    $mail->SMTPAuth = true;
    $mail->Port = $mailer->mail_port;
    $mail->Username = $mailer->mail_username;
    $mail->Password = $mailer->mail_password;
    $mail->Subject = 'Password Reset Instructions';
    /* Custom Mail Body */
    $mail->Body = '
    <!DOCTYPE html>
            <html
            lang="en"
            xmlns="http://www.w3.org/1999/xhtml"
            xmlns:v="urn:schemas-microsoft-com:vml"
            xmlns:o="urn:schemas-microsoft-com:office:office"
            >
            <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="x-apple-disable-message-reformatting" />
            <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,700"
            rel="stylesheet"
            />
            <!-- CSS Reset : BEGIN -->
            <style>
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }

            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            /* What it does: Centers email on Android 4.4 */
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }

            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }

            /* What it does: Fixes webkit padding issue. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }

            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode: bicubic;
            }

            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
            a {
                text-decoration: none;
            }

            /* What it does: A work-around for email clients meddling in triggered links. */
            *[x-apple-data-detectors],  /* iOS */
                .unstyle-auto-detected-links *,
                .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }

            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
            .im {
                color: inherit !important;
            }

            img.g-img + div {
                display: none !important;
            }

            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u ~ div .email-container {
                min-width: 320px !important;
                }
            }
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u ~ div .email-container {
                min-width: 375px !important;
                }
            }
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u ~ div .email-container {
                min-width: 414px !important;
                }
            }
            </style>

            <!-- CSS Reset : END -->

            <!-- Progressive Enhancements : BEGIN -->
            <style>
            .primary {
                background: #30e3ca;
            }
            .bg_white {
                background: #ffffff;
            }
            .bg_light {
                background: #fafafa;
            }
            .bg_black {
                background: #000000;
            }
            .bg_dark {
                background: rgba(0, 0, 0, 0.8);
            }
            .email-section {
                padding: 2.5em;
            }

            /*BUTTON*/
            .btn {
                padding: 10px 15px;
                display: inline-block;
            }
            .btn.btn-primary {
                border-radius: 5px;
                background: #30e3ca;
                color: #ffffff;
            }
            .btn.btn-white {
                border-radius: 5px;
                background: #ffffff;
                color: #000000;
            }
            .btn.btn-white-outline {
                border-radius: 5px;
                background: transparent;
                border: 1px solid #fff;
                color: #fff;
            }
            .btn.btn-black-outline {
                border-radius: 0px;
                background: transparent;
                border: 2px solid #000;
                color: #000;
                font-weight: 700;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Lato", sans-serif;
                color: #000000;
                margin-top: 0;
                font-weight: 400;
            }

            body {
                font-family: "Lato", sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0, 0, 0, 0.4);
            }

            a {
                color: #30e3ca;
            }

            .logo h1 {
                margin: 0;
            }
            .logo h1 a {
                color: #30e3ca;
                font-size: 24px;
                font-weight: 700;
                font-family: "Lato", sans-serif;
            }

            /*HERO*/
            .hero {
                position: relative;
                z-index: 0;
            }

            .hero .text {
                color: rgba(0, 0, 0, 0.3);
            }
            .hero .text h2 {
                color: #000;
                font-size: 40px;
                margin-bottom: 0;
                font-weight: 400;
                line-height: 1.4;
            }
            .hero .text h3 {
                font-size: 24px;
                font-weight: 300;
            }
            .hero .text h2 span {
                font-weight: 600;
                color: #30e3ca;
            }

            .heading-section h2 {
                color: #000000;
                font-size: 28px;
                margin-top: 0;
                line-height: 1.4;
                font-weight: 400;
            }
            .heading-section .subheading {
                margin-bottom: 20px !important;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(0, 0, 0, 0.4);
                position: relative;
            }
            .heading-section .subheading::after {
                position: absolute;
                left: 0;
                right: 0;
                bottom: -10px;
                content: "";
                width: 100%;
                height: 2px;
                background: #30e3ca;
                margin: 0 auto;
            }

            .heading-section-white {
                color: rgba(255, 255, 255, 0.8);
            }
            .heading-section-white h2 {
                line-height: 1;
                padding-bottom: 0;
            }
            .heading-section-white h2 {
                color: #ffffff;
            }
            .heading-section-white .subheading {
                margin-bottom: 0;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(255, 255, 255, 0.4);
            }

            ul.social {
                padding: 0;
            }
            ul.social li {
                display: inline-block;
                margin-right: 10px;
            }

            /*FOOTER*/

            .footer {
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                color: rgba(0, 0, 0, 0.5);
            }
            .footer .heading {
                color: #000;
                font-size: 20px;
            }
            .footer ul {
                margin: 0;
                padding: 0;
            }
            .footer ul li {
                list-style: none;
                margin-bottom: 10px;
            }
            .footer ul li a {
                color: rgba(0, 0, 0, 1);
            }

            @media screen and (max-width: 500px) {
            }
            </style>
        </head>

        <body
            width="100%"
            style="
            margin: 0;
            padding: 0 !important;
            mso-line-height-rule: exactly;
            background-color: #f1f1f1;
            "
        >
            <center style="width: 100%; background-color: #f1f1f1">
            <div
                style="
                display: none;
                font-size: 1px;
                max-height: 0px;
                max-width: 0px;
                opacity: 0;
                overflow: hidden;
                mso-hide: all;
                font-family: sans-serif;
                "
            >
                &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
            </div>
            <div style="max-width: 600px; margin: 0 auto" class="email-container">
                <!-- BEGIN BODY -->
                <table
                align="center"
                role="presentation"
                cellspacing="0"
                cellpadding="0"
                border="0"
                width="100%"
                style="margin: auto"
                >
                <tr>
                    <td
                    valign="top"
                    class="bg_white"
                    style="padding: 1em 2.5em 0 2.5em"
                    >
                    <table
                        role="presentation"
                        border="0"
                        cellpadding="0"
                        cellspacing="0"
                        width="100%"
                    >
                        <tr>
                        <td class="logo" style="text-align: center">
                        <h1><a href="#">Car Rentals</a></h1>
                        </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <!-- end tr -->

                <!-- end tr -->
                <tr>
                    <td
                    valign="middle"
                    class="hero bg_white"
                    style="padding: 2em 0 4em 0"
                    >
                        <table>
                            <tr>
                                <td>
                                    <div
                                    class="text"
                                    style="padding: 0 2.5em; text-align: center"
                                    >
                                        <h2>Password Reset Instructions</h2>
                                        <h3>
                                            Greetings <br>
                                            Trouble signing in? <br>
                                            Resetting your password is easy. Just click the link below and follow the instructions, will have you up and running in no time. 
                                            If you did not make this request then please ignore this email.
                                        </h3>
                                        <h4>
                                            <a href="' . $reset_url . '">Click Here To Reset Password</a>
                                        </h4>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- end tr -->
                <!-- 1 Column Text + Button : END -->
                </table>
                <table
                align="center"
                role="presentation"
                cellspacing="0"
                cellpadding="0"
                border="0"
                width="100%"
                style="margin: auto"
                >
                <tr>
                    <td class="bg_light" style="text-align: center">
                        <p>
                            Kind Regards, Car Rentals. A
                            <a href="https://devlan.co.ke" style="color: rgba(0, 0, 0, 0.8)"></a>
                            Devlan Solutions LTD</a> Production
                        </p>
                    </td>
                </tr>
                </table>
            </div>
            </center>
        </body>
    </html>
    ';
}
