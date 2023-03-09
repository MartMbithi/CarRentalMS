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

session_start();
require_once('../app/settings/config.php');
require_once('../app/settings/back_office_checklogin.php');
include('../app/settings/codeGen.php');
require_once('../app/helpers/system_settings.php');
require_once('../app/partials/back_office_head.php');

?>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container" data-layout="container">
            <?php require_once('../app/partials/back_office_sidebar.php'); ?>
            <div class="content">
                <!-- Navigations -->
                <?php require_once('../app/partials/back_office_topbar.php'); ?>
                <!-- End Navigations -->
                <div class="media mb-4 mt-3"><span class="fa-stack mr-2 ml-n1">
                        <i class="fas fa-circle fa-stack-2x text-300"></i>
                        <i class="fa-inverse fa-stack-1x text-primary fas fa-cogs"></i>
                    </span>
                    <div class="media-body">
                        <h5 class="mb-0 text-primary position-relative">
                            <span class="bg-200 pr-3">System Settings</span>
                            <span class="border position-absolute absolute-vertical-center w-100 z-index--1 l-0"></span>
                        </h5>
                        <p class="mb-0 text-justify">
                            This module allows you to manage your system settings.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 pr-lg-2 mb-3 mb-lg-0">
                        <a data-toggle="modal" href="#mailer_settings">
                            <div class=" card h-100">
                                <div class="card-body p-4 p-sm-5">
                                    <div class="text-center">
                                        <img class="d-block mx-auto mb-4" src="../storage/system/envelope.png" alt="shield" width="70" />
                                        <h4>Mailer settings</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pr-lg-2 mb-3 mb-lg-0">
                        <a data-toggle="modal" href="#lite_cms">
                            <div class="card h-100">
                                <div class="card-body p-4 p-sm-5">
                                    <div class="text-center">
                                        <img class="d-block mx-auto mb-4" src="../storage/system/cms.png" alt="shield" width="70" />
                                        <h4>Lite CMS</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pr-lg-2 mb-3 mb-lg-0">
                        <div class="card h-100">
                            <a href="backoffice_payment_apis">
                                <div class="card-body p-4 p-sm-5">
                                    <div class="text-center">
                                        <img class="d-block mx-auto mb-4" src="../storage/system/credit-card.png" alt="shield" width="70" />
                                        <h4>Payment APIs</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Mailer Modal -->
                <div class="modal fade fixed-right" id="mailer_settings" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-center">
                                <div class="text-center">
                                    <h6 class="mb-0 text-bold">Edit STMP Mailer Configurations</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Category code</label>
                                            <input type="text" value="<?php echo $category_code; ?>" required name="category_code" class="form-control">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="">Category name</label>
                                            <input type="" required name="category_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="Update_Mailers" class="btn btn-outline-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Mailer Modal -->

                <!-- Lite Cms Modal -->
                <!-- End CMS modal -->
                <?php require_once('../app/partials/back_office_footer.php'); ?>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>



</html>