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
session_start();
require_once('../app/settings/config.php');
require_once('../app/helpers/authentication.php');
require_once('../app/partials/back_office_head.php');
?>


<body style="background-image: url('../public/landing_assets/images/bg_1.jpg'); background-size:cover;">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center no-gutters">
                <div class="col-lg-8 col-xxl-5 py-3">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row no-gutters h-100">
                                <div class="col-md-5 text-white text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7">
                                        <div class="bg-holder bg-auth-card-shape" style="background-image:url(../public/backoffice_assets/img/illustrations/half-circle.png);"></div>
                                        <div class="z-index-1 position-relative">
                                            <img src="../storage/system/logo.png" alt="">
                                            <p class="text-white text-center opacity-75"><br><br>
                                                The quickest, most elegant,
                                                simplest, and most robust approach to rent an automobile.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                                        <p class="pt-3">Have an account?<br>
                                            <a class="btn btn-outline-light mt-2 px-4" href="login">Log In</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <h3>Register</h3>
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="card-name">Name</label>
                                                <input class="form-control" name="client_names" required type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label for="card-email">Email address</label>
                                                <input class="form-control" name="client_email" required type="email" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-6">
                                                    <label for="card-email">National ID Number</label>
                                                    <input class="form-control" name="client_id_no" required type="text" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="card-email">Phone number</label>
                                                    <input class="form-control" name="client_phone_number" required type="text" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="card-email">Address</label>
                                                <input class="form-control" name="client_address" required type="text" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-6">
                                                    <label for="card-password">Password</label>
                                                    <input class="form-control" name="new_password" type="password" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="card-confirm-password">Confirm password</label>
                                                    <input class="form-control" name="confirm_password" type="password" />
                                                </div>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" checked type="checkbox" id="card-register-checkbox" />
                                                <label class="custom-control-label" for="card-register-checkbox">I accept the
                                                    <a href="#!">terms </a>and <a href="#!">privacy policy</a>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block mt-3" type="submit" name="Register">
                                                    Register
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>

</html>