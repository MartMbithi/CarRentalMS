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
                                <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                                    <div class="col pl-card py-1 position-static">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-xl mr-3">
                                                <div class="avatar-name rounded-circle bg-soft-primary text-dark">
                                                    <span class="fs-0 text-primary">F</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 d-flex align-items-center">
                                                    <a class="text-800 stretched-link" href="#!">
                                                        Client name
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center no-gutters">
                                            <div class="col-auto pr-2">
                                                <div class="fs--1 font-weight-semi-bold">Date joined 12:50:00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer bg-light p-0">
                                <a class="btn btn-sm btn-link btn-block py-2" href="backoffice_rentals">Show all clients
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
                    <div class="col-lg-7 col-xl-8 pr-lg-2 mb-3">
                        <div class="card h-lg-100 overflow-hidden">
                            <div class="card-body p-0">
                                <table class="table table-dashboard mb-0 table-borderless fs--1">
                                    <thead class="bg-light">
                                        <tr class="text-900">
                                            <th>Best Selling Products</th>
                                            <th class="text-right">Revenue ($3189)</th>
                                            <th class="pr-card text-right" style="width: 8rem">Revenue (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/12.png" width="60" alt="" />
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Raven Pro</a></h6>
                                                        <p class="font-weight-semi-bold mb-0 text-500">Landing</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-right font-weight-semi-bold">$1311</td>
                                            <td class="align-middle pr-card">
                                                <div class="d-flex flex-between-center">
                                                    <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                                                        <div class="progress-bar rounded-capsule" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-weight-semi-bold">41%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/10.png" width="60" alt="" />
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Boots4</a></h6>
                                                        <p class="font-weight-semi-bold mb-0 text-500">Portfolio</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-right font-weight-semi-bold">$860</td>
                                            <td class="align-middle pr-card">
                                                <div class="d-flex flex-between-center">
                                                    <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                                                        <div class="progress-bar rounded-capsule" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-weight-semi-bold">27%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/11.png" width="60" alt="" />
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Falcon</a></h6>
                                                        <p class="font-weight-semi-bold mb-0 text-500">Admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-right font-weight-semi-bold">$539</td>
                                            <td class="align-middle pr-card">
                                                <div class="d-flex flex-between-center">
                                                    <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                                                        <div class="progress-bar rounded-capsule" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-weight-semi-bold">17%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/14.png" width="60" alt="" />
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Slick</a></h6>
                                                        <p class="font-weight-semi-bold mb-0 text-500">Builder</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-right font-weight-semi-bold">$245</td>
                                            <td class="align-middle pr-card">
                                                <div class="d-flex flex-between-center">
                                                    <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                                                        <div class="progress-bar rounded-capsule" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-weight-semi-bold">8%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/13.png" width="60" alt="" />
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Reign Pro</a></h6>
                                                        <p class="font-weight-semi-bold mb-0 text-500">Agency</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-right font-weight-semi-bold">$234</td>
                                            <td class="align-middle pr-card">
                                                <div class="d-flex flex-between-center">
                                                    <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                                                        <div class="progress-bar rounded-capsule" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="font-weight-semi-bold">7%</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer bg-light py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto"><select class="custom-select custom-select-sm">
                                            <option>Last 7 days</option>
                                            <option>Last Month</option>
                                            <option>Last Year</option>
                                        </select></div>
                                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 pl-lg-2 mb-3">
                        <div class="card h-lg-100">
                            <div class="card-header d-flex flex-between-center bg-light py-2">
                                <h6 class="mb-0">Shared Files</h6><a class="btn btn-sm btn-link pr-0 fs--1" href="#!">View All</a>
                            </div>
                            <div class="card-body pb-0">
                                <div class="media mb-3 hover-actions-trigger align-items-center">
                                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/5-thumb.png" alt="" /></div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">apple-smart-watch.png</a></h6>
                                        <div class="fs--1"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">Just Now</span></div>
                                        <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                                    </div>
                                </div>
                                <hr class="border-200" />
                                <div class="media mb-3 hover-actions-trigger align-items-center">
                                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/3-thumb.png" alt="" /></div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">iphone.jpg</a></h6>
                                        <div class="fs--1"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">Yesterday at 1:30 PM</span></div>
                                        <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                                    </div>
                                </div>
                                <hr class="border-200" />
                                <div class="media mb-3 hover-actions-trigger align-items-center">
                                    <div class="file-thumbnail"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">Falcon v1.8.2</a></h6>
                                        <div class="fs--1"><span class="font-weight-semi-bold">Jane</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></div>
                                        <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                                    </div>
                                </div>
                                <hr class="border-200" />
                                <div class="media mb-3 hover-actions-trigger align-items-center">
                                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/2-thumb.png" alt="" /></div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">iMac.jpg</a></h6>
                                        <div class="fs--1"><span class="font-weight-semi-bold">Rowen</span><span class="font-weight-medium text-600 ml-2">23 Sep at 6:10 PM</span></div>
                                        <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                                    </div>
                                </div>
                                <hr class="border-200" />
                                <div class="media mb-3 hover-actions-trigger align-items-center">
                                    <div class="file-thumbnail"><img class="img-fluid" src="../assets/img/icons/docs.png" alt="" /></div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">functions.php</a></h6>
                                        <div class="fs--1"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">1 Oct at 4:30 PM</span></div>
                                        <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-sm-6 col-xxl-3 pr-sm-2 mb-3 mb-xxl-0">
                        <div class="card">
                            <div class="card-header d-flex flex-between-center bg-light py-2">
                                <h6 class="mb-0">Active Users</h6>
                                <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-active-user" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-active-user">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="media align-items-center mb-3">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Emma Watson</a></h6>
                                        <p class="text-500 fs--2 mb-0">Admin</p>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-3">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Antony Hopkins</a></h6>
                                        <p class="text-500 fs--2 mb-0">Moderator</p>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-3">
                                    <div class="avatar avatar-2xl status-away">
                                        <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Anna Karinina</a></h6>
                                        <p class="text-500 fs--2 mb-0">Editor</p>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-3">
                                    <div class="avatar avatar-2xl status-offline">
                                        <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">John Lee</a></h6>
                                        <p class="text-500 fs--2 mb-0">Admin</p>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-3">
                                    <div class="avatar avatar-2xl status-offline">
                                        <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Rowen Atkinson</a></h6>
                                        <p class="text-500 fs--2 mb-0">Editor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link btn-block py-2" href="../pages/people.html">All active users<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-3 pl-sm-2 order-xxl-1 mb-3 mb-xxl-0">
                        <div class="card h-100">
                            <div class="card-header bg-light d-flex flex-between-center py-2">
                                <h6 class="mb-0">Bandwidth Saved</h6>
                                <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-bandwidth-saved" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-bandwidth-saved">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-center">
                                <div>
                                    <div class="progress-circle progress-circle-dashboard" data-options='{"color":"url(#gradient)","progress":93,"strokeWidth":5,"trailWidth":5}'></div>
                                    <div class="text-center mt-4">
                                        <h6 class="fs-0 mb-1"><span class="fas fa-check text-success mr-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                                        <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto"><select class="custom-select custom-select-sm">
                                            <option>Last 6 Months</option>
                                            <option>Last Year</option>
                                            <option>Last 2 Year</option>
                                        </select></div>
                                    <div class="col-auto"><a class="fs--1" href="#!">Help</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 px-xxl-2">
                        <div class="card h-100">
                            <div class="card-header bg-light py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h6 class="mb-0">Top Products</h6>
                                    </div>
                                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm mr-2" href="#!">View Details</a>
                                        <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-running-projects" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-running-projects">
                                                <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body h-100">
                                <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v2.8.1</p>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>



</html>