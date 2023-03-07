<?php
/*
 *   Crafted On Tue Mar 07 2023
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
                $rentals_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM car_rentals cr 
                    INNER JOIN cars c ON c.car_id = cr.rental_car_id
                    INNER JOIN car_categories cc ON cc.category_id = c.car_category_id
                    INNER JOIN clients cl ON cl.client_id = cr.rental_client_id
                    WHERE cr.rental_id = '{$_GET['view']}'"
                );
                if (mysqli_num_rows($rentals_sql) > 0) {
                    while ($rentals = mysqli_fetch_array($rentals_sql)) {
                        /* Image Url */
                        if (!empty($rentals['client_dpic'])) {
                            $client_image_url = '../storage/users/' . $rentals['client_dpic'];
                        } else {
                            $client_image_url = '../storage/users/no-profile.png';
                        }
                ?>
                        <div class="card mb-3">
                            <div class="card-header position-relative min-vh-25 mb-7">
                                <div class="bg-holder rounded-soft rounded-bottom-0" style="background-image:url(../public/backoffice_assets/img/generic/4.jpg);"></div>
                                <!--/.bg-holder-->
                                <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="<?php echo $client_image_url; ?>" width="200" alt="" /></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="mb-1"> <?php echo $rentals['client_names']; ?> V
                                            <small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="right" title="Verified" data-fa-transform="shrink-4 down-2"></small>
                                        </h4>
                                        <h5 class="fs-0 font-weight-normal">Email: <?php echo $rentals['client_email']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">ID number: <?php echo $rentals['client_id_no']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="fs-0 font-weight-normal">ID number: <?php echo $rentals['client_id_no']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Contacts: <?php echo $rentals['client_phone_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Client Since: <?php echo $rentals['client_date_joined']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-lg-12 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Rental Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Rental details</a></li>
                                            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Vehicle details</a></li>
                                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false">Payment details</a></li>
                                        </ul>
                                        <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <h3 class="mb-0">Ref: <?php echo $rentals['rental_ref_code']; ?></h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Rental from date: <?php echo date('d M Y', strtotime($rentals['rental_from_date'])); ?></li>
                                                            <li class="list-group-item">Return Date: <?php echo date('d M Y', strtotime($rentals['rental_to_date'])); ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Number of days:
                                                                <?php
                                                                echo  $number_of_days = ceil(abs(strtotime($rentals['rental_to_date']) - strtotime($rentals['rental_from_date'])) / 86400);
                                                                ?> Days
                                                            </li>
                                                            <li class="list-group-item">Cost: Ksh <?php echo number_format($rentals['rental_cost']); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <h3 class="mb-0">Vehicle inspection details</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <?php
                                                    $rentals_sql = mysqli_query(
                                                        $mysqli,
                                                        "SELECT * FROM rental_returns rr INNER JOIN 
                                                        users u on u.user_id =  rr.return_user_id
                                                        WHERE rr.return_rental_id = '{$_GET['view']}'"
                                                    );
                                                    if (mysqli_num_rows($rentals_sql) > 0) {
                                                        while ($rentals = mysqli_fetch_array($rentals_sql)) {
                                                    ?>
                                                            <div class="col-lg-6">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Inspected by: <?php echo $rentals['user_number'] . ' ' . $rentals['user_name']; ?></li>
                                                                    <li class="list-group-item"></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Date inspected: <?php echo date('d M Y', strtotime($rentals['return_date_posted'])); ?></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Vehicle inspection comments : <br>
                                                                        <?php echo date('d M Y', strtotime($rentals['return_date_posted'])); ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php }
                                                    } else { ?>
                                                        <div class="col-lg-12 text-center">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item text-danger">
                                                                    No inspection records available for this vehicle rental
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-center">
                                                            <h3 class="mb-0"><?php echo $rentals['car_model']; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Registration number: <?php echo $rentals['car_reg_number']; ?></li>
                                                                <li class="list-group-item">Model: <?php echo $rentals['category_name']; ?></li>
                                                                <li class="list-group-item">Year of manufacture: <?php echo $rentals['car_yom']; ?></li>
                                                                <li class="list-group-item">Mileage: <?php echo $rentals['car_mileage']; ?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Transmission: <?php echo $rentals['car_transmission_type']; ?></li>
                                                                <li class="list-group-item">Fuel: <?php echo $rentals['car_fuel_type']; ?></li>
                                                                <li class="list-group-item">Seats: <?php echo $rentals['car_seats']; ?></li>
                                                                <li class="list-group-item">Renting rate per hour: Ksh <?php echo number_format($rentals['car_renting_rate']); ?></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-lg-12"><br>
                                                            <h5 class="text-center">Vehicle description</h5>
                                                            <p><?php echo $rentals['car_description']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <div class="row align-items-center text-center mb-3">
                                                            <div class="col-sm-6 text-sm-left">
                                                                <img src="../storage/system/logo_backoffice.png" alt="invoice" width="150">
                                                            </div>
                                                            <div class="col text-sm-right mt-3 mt-sm-0">
                                                                <h2 class="mb-3">Payment Receipt</h2>
                                                                <h5>CarRentals Inc</h5>
                                                                <p class="fs--1 mb-0">127001<br>Localhost</p>
                                                            </div>
                                                            <div class="col-12">
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-between align-items-center">
                                                            <div class="col">
                                                                <h6 class="text-500">Payment from</h6>
                                                                <h5><?php echo $rentals['client_names']; ?></h5>
                                                                <p class="fs--1"><?php echo $rentals['client_phone_number']; ?>
                                                                    <br><?php echo $rentals['client_email']; ?><br>
                                                                    <?php echo $rentals['client_address']; ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-auto ml-auto">
                                                                <div class="table-responsive">
                                                                    <table class="table table-sm table-borderless fs--1">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th class="text-sm-right">Payment Ref:</th>
                                                                                <td><?php echo $payments['payment_ref_code']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="text-sm-right">Rental Ref Number:</th>
                                                                                <td><?php echo $rentals['rental_ref_code']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="text-sm-right">Payment Date:</th>
                                                                                <td><?php echo date('d M Y g:ia', strtotime($payments['payment_date_posted'])); ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-4 fs--1">
                                                            <table class="table table-striped border-bottom">
                                                                <thead>
                                                                    <tr class="bg-primary text-white">
                                                                        <th class="border-0">Products</th>
                                                                        <th class="border-0 text-center">Quantity</th>
                                                                        <th class="border-0 text-right">Rate</th>
                                                                        <th class="border-0 text-right">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="align-middle">
                                                                            <h6 class="mb-0 text-nowrap">Platinum web hosting package</h6>
                                                                            <p class="mb-0">Down 35mb, Up 100mb</p>
                                                                        </td>
                                                                        <td class="align-middle text-center">2</td>
                                                                        <td class="align-middle text-right">$65.00</td>
                                                                        <td class="align-middle text-right">$130.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="align-middle">
                                                                            <h6 class="mb-0 text-nowrap">2 Page website design</h6>
                                                                            <p class="mb-0">Includes basic wireframes and responsive templates</p>
                                                                        </td>
                                                                        <td class="align-middle text-center">1</td>
                                                                        <td class="align-middle text-right">$2,100.00</td>
                                                                        <td class="align-middle text-right">$2,100.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="align-middle">
                                                                            <h6 class="mb-0 text-nowrap">Mobile App Development</h6>
                                                                            <p class="mb-0">Includes responsive navigation</p>
                                                                        </td>
                                                                        <td class="align-middle text-center">8</td>
                                                                        <td class="align-middle text-right">$5,00.00</td>
                                                                        <td class="align-middle text-right">$4,000.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="align-middle">
                                                                            <h6 class="mb-0 text-nowrap">Web App Development</h6>
                                                                            <p class="mb-0">Includes react spa</p>
                                                                        </td>
                                                                        <td class="align-middle text-center">6</td>
                                                                        <td class="align-middle text-right">$2,000.00</td>
                                                                        <td class="align-middle text-right">$12,000.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="row no-gutters justify-content-end">
                                                            <div class="col-auto">
                                                                <table class="table table-sm table-borderless fs--1 text-right">
                                                                    <tr>
                                                                        <th class="text-900">Subtotal:</th>
                                                                        <td class="font-weight-semi-bold">$18,230.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="text-900">Tax 8%:</th>
                                                                        <td class="font-weight-semi-bold">$1458.40</td>
                                                                    </tr>
                                                                    <tr class="border-top">
                                                                        <th class="text-900">Total:</th>
                                                                        <td class="font-weight-semi-bold">$19688.40</td>
                                                                    </tr>
                                                                    <tr class="border-top border-2x font-weight-bold text-900">
                                                                        <th>Amount Due:</th>
                                                                        <td>$19688.40</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-light">
                                                        <p class="fs--1 mb-0"><strong>Notes: </strong>We really appreciate your business and if there’s anything else we can do, please let us know!</p>
                                                    </div>
                                                </div>
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