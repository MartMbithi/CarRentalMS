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
session_start();
require_once('../app/settings/config.php');
require_once('../app/settings/back_office_checklogin.php');
require_once('../app/helpers/staffs.php');
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
                <?php require_once('../app/partials/back_office_topbar.php');
                /* Load this partial with logged in user session */
                $staff_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM users WHERE user_id = '{$_GET['view']}'"
                );
                if (mysqli_num_rows($staff_sql) > 0) {
                    while ($staffs = mysqli_fetch_array($staff_sql)) {
                        /* Image Url */
                        if (!empty($staffs['user_dpic'])) {
                            $staff_image_url = '../storage/users/' . $staffs['user_dpic'];
                        } else {
                            $staff_image_url = '../storage/users/no-profile.png';
                        }
                ?>

                        <div class="card mb-3">
                            <div class="card-header position-relative min-vh-25 mb-7">
                                <div class="bg-holder rounded-soft rounded-bottom-0" style="background-image:url(../public/backoffice_assets/img/generic/4.jpg);"></div>
                                <!--/.bg-holder-->
                                <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="<?php echo $staff_image_url; ?>" width="200" alt="" /></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="mb-1"> <?php echo $staffs['user_name']; ?>
                                            <small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="right" title="Verified" data-fa-transform="shrink-4 down-2"></small>
                                        </h4>
                                        <h5 class="fs-0 font-weight-normal">Staff Number: <?php echo $staffs['user_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Email: <?php echo $staffs['user_email']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="fs-0 font-weight-normal">ID number: <?php echo $staffs['user_id_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Contacts: <?php echo $staffs['user_phone_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Address: <?php echo $staffs['user_address']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-lg-12 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Profile settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Update profile</a></li>
                                            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Update passwords</a></li>
                                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false">Update profile photo</a></li>
                                        </ul>
                                        <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                                                <form method="POST">
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">Full names</label>
                                                            <input name="user_name" type="text" class="form-control" value="<?php echo $staffs['user_name']; ?>" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip02">Email address</label>
                                                            <input name="user_email" type="email" class="form-control" value="<?php echo $staffs['user_email']; ?>" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip02">National ID Number</label>
                                                            <input name="user_id_number" type="text" class="form-control" value="<?php echo $staffs['user_id_number']; ?>" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip02">Mobile Phone Number</label>
                                                            <input name="user_phone_number" type="text" class="form-control" value="<?php echo $staffs['user_phone_number']; ?>" required>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip02">Address</label>
                                                            <textarea name="user_address" type="text" class="form-control" required><?php echo $staffs['user_address']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button class="btn btn-primary" type="submit" name="Update_Staff_Profile">Update profile</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <form method="POST">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip01">Old password</label>
                                                            <input name="user_id" type="hidden" class="form-control" value="<?php echo $staffs['user_id']; ?>" required>
                                                            <input name="old_password" type="password" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip02">New password</label>
                                                            <input name="new_password" type="password" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip02">Confirm password</label>
                                                            <input name="confirm_password" type="password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button class="btn btn-primary" type="submit" name="Update_Staff_Password">Update passwords</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip01">Profile photo</label>
                                                            <div class="custom-file">
                                                                <input name="user_id" type="hidden" class="form-control" value="<?php echo $staffs['user_id']; ?>" required>
                                                                <input type="file" name="user_dpic" required class="custom-file-input" id="inputGroupFile02">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button class="btn btn-primary" type="submit" name="Update_Staff_Profile_Photo">Update profile</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>

                <?php } ?>
                <?php require_once('../app/partials/back_office_footer.php'); ?>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>

</html>