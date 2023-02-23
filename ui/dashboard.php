<?php
/*
 *   Crafted On Wed Feb 22 2023
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
require_once('../app/functions/back_office_functions.php');
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
                <?php require_once('../app/partials/back_office_topbar.php');
                ?>
                <!-- End Navigations -->
                <div class="row no-gutters">

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-2.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Staffs</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?php echo $staffs; ?></div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_users">All staffs
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-2.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Clients</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?php echo $clients; ?></div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_clients">All clients
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-3.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Rented Vehicles</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?php echo $rented_cars; ?></div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_vehicles">
                                    All rentals
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-1.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Available Vehicles</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?php echo $available_cars; ?></div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_vehicles">Available vehicles
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-2.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Car rentals</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">
                                    <?php echo $car_rentals; ?>
                                </div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_rentals">All rentals
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xxl-3 mb-3 pr-md-2">
                        <div class="card h-md-100 verflow-hidden">
                            <div class="bg-holder bg-card" style="background-image:url(../public/backoffice_assets/img/illustrations/corner-3.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Revenue</h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?php echo $payment_amount; ?></div>
                                <a class="font-weight-semi-bold fs--1 text-nowrap" href="backoffice_payments">All payments
                                    <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 pr-lg-2 mb-3">
                        <div class="card h-lg-100 overflow-hidden">
                            <div class="card-header bg-light">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="mb-0">Recently joined clients</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <?php
                                /* Fetch Recently Hired Clients */
                                $clients_sql = mysqli_query(
                                    $mysqli,
                                    "SELECT * FROM clients ORDER BY  client_date_joined  ASC
                                    "
                                );
                                if (mysqli_num_rows($clients_sql) > 0) {
                                    while ($clients = mysqli_fetch_array($clients_sql)) {
                                        /* Image Url */
                                        if (!empty($clients['client_dpic'])) {
                                            $client_image_url = '../storage/clients/' . $clients['client_dpic'];
                                        } else {
                                            $client_image_url = '../storage/clients/no-profile.png';
                                        }
                                ?>
                                        <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                                            <div class="col pl-card py-1 position-static">
                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-xl mr-3">
                                                        <div class="avatar-name rounded-circle bg-soft-primary text-dark">
                                                            <img src="<?php echo $client_image_url; ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 d-flex align-items-center">
                                                            <a class="text-800 stretched-link" href="backoffice_client?client=<?php echo $clients['client_id']; ?>">
                                                                <?php echo $clients['client_names']; ?>
                                                            </a>
                                                        </h6>
                                                        <small class="mb-0 d-flex align-items-center">
                                                            <?php echo $clients['client_email']; ?>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col py-1">
                                                <div class="row flex-end-center no-gutters">
                                                    <div class="col-auto pr-2">
                                                        <div class="fs--1 font-weight-semi-bold">Date joined <?php echo date('d M Y', strtotime($clients['client_date_joined'])); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                                        <div class="col pl-card py-1 position-static">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h6 class="mb-0 d-flex align-items-center">
                                                        Woops!😦, we cannot find any client details
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="card-footer bg-light p-0">
                                <a class="btn btn-sm btn-link btn-block py-2" href="backoffice_clients">Show all clients
                                    <span class="fas fa-chevron-right ml-1 fs--2">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pl-lg-2 mb-3">
                        <div class="card h-lg-100">
                            <div class="card-header">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h6 class="mb-0">Vehicles per category</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body h-100 pr-0">
                                <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-12 col-xl-12 pr-lg-2 mb-3">
                        <div class="card h-lg-100 overflow-hidden">
                            <div class="card-body p-0">
                                <table class="table table-dashboard mb-0 table-borderless fs--1">
                                    <thead class="bg-light">
                                        <tr class="text-900">
                                            <th>Recently Hired Vehicles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        /* Fetch Recently Hired Cars */
                                        $recent_hires = mysqli_query(
                                            $mysqli,
                                            "SELECT * FROM car_rentals cr
                                            INNER JOIN cars c ON c.car_id = cr.rental_car_id
                                            "
                                        );
                                        if (mysqli_num_rows($recent_hires) > 0) {
                                            while ($rentals = mysqli_fetch_array($recent_hires)) {
                                        ?>
                                                <tr class="border-bottom border-200">
                                                    <td>
                                                        <div class="media align-items-center position-relative">
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-1 font-weight-semi-bold">
                                                                    <a class="text-dark stretched-link" href="backoffice_rental?rental=<?php echo $rentals['car_id']; ?>">
                                                                        <?php echo $rentals['car_reg_number']; ?>
                                                                    </a>
                                                                </h6>
                                                                <p class="font-weight-semi-bold mb-0 text-500"><?php echo $rentals['car_model']; ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-right font-weight-semi-bold"></td>
                                                    <td class="align-middle pr-card">
                                                        <div class="d-flex flex-between-center">
                                                            <div class="font-weight-semi-bold">
                                                                Rented From <?php echo date('d M Y', strtotime($rentals['rental_from_date'])); ?>
                                                                To <?php echo date('d M Y', strtotime($rentals['rental_to_date'])); ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } else {
                                            ?><tr class="border-bottom border-200">
                                                <td colspan="3">
                                                    <div class="media align-items-center position-relative">
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-1 font-weight-semi-bold text-danger text-center">
                                                                We cannot find recently rented vehicles
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require_once('../app/partials/back_office_footer.php'); ?>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>



</html>