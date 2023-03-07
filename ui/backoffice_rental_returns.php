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

session_start();
require_once('../app/settings/config.php');
require_once('../app/settings/back_office_checklogin.php');
include('../app/settings/codeGen.php');
require_once('../app/helpers/inspection.php');
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
                        <i class="fa-inverse fa-stack-1x text-primary fas fa-list"></i>
                    </span>
                    <div class="media-body">
                        <h5 class="mb-0 text-primary position-relative">
                            <span class="bg-200 pr-3">Rentals Return Module</span>
                            <span class="border position-absolute absolute-vertical-center w-100 z-index--1 l-0"></span>
                        </h5>
                        <p class="mb-0 text-justify">
                            This module allows you to manage your rental vehicles returns. You can add, edit, delete and view returns.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="card mb-3 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body bg-light">
                                    <table class="data table table-sm no-wrap mb-0 fs--1 w-100">
                                        <thead class="bg-200">
                                            <tr>
                                                <th class="sort">Ref number</th>
                                                <th class="sort">Inspected by</th>
                                                <th class="sort">Date posted</th>
                                                <th class="sort">Inspection comments</th>
                                                <th class="">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <?php
                                            $rentals_sql = mysqli_query(
                                                $mysqli,
                                                "SELECT * FROM rental_returns rr  
                                                INNER JOIN car_rentals cr ON rr.return_rental_id = cr.rental_id
                                                INNER JOIN cars c ON c.car_id = cr.rental_car_id
                                                INNER JOIN users u ON u.user_id = rr.return_user_id                                    
                                                "
                                            );
                                            if (mysqli_num_rows($rentals_sql) > 0) {
                                                while ($rental = mysqli_fetch_array($rentals_sql)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <a href="backoffice_rental?view=<?php echo $rental['rental_id']; ?>">
                                                                <?php echo $rental['rental_ref_code']; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            Number: <?php echo $rental['user_number']; ?><br>
                                                            Names: <?php echo $rental['user_name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date('d M Y g:ia', strtotime($rental['return_date_posted'])); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $rental['return_comments']; ?>
                                                        </td>
                                                        <td>
                                                            <a data-toggle="modal" href="#update_<?php echo $rental['return_id']; ?>" class="badge badge-warning">
                                                                <i class="fas fa-edit"></i> Update
                                                            </a>
                                                            <a data-toggle="modal" href="#delete_<?php echo $rental['return_id']; ?>" class="badge badge-danger">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>

                                            <?php
                                                    include('../app/modals/rental_returns.php');
                                                }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once('../app/partials/back_office_footer.php'); ?>
                </div>
                <!-- Add  Modals -->
                <div class="modal fade fixed-right" id="addCategoriesModal" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-center">
                                <div class="text-center">
                                    <h6 class="mb-0 text-bold">Register new vehicle rental record</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Client Details</label>
                                            <select type="" required name="rental_client_id" class="form-control selectpicker" style="width: 100%;">
                                                <option value="">Select client</option>
                                                <?php
                                                $clients_sql = mysqli_query($mysqli, "SELECT * FROM clients");
                                                while ($clients = mysqli_fetch_array($clients_sql)) {
                                                    echo '<option value="' . $clients['client_id'] . '">' . $clients['client_names'] . ' - ' . $clients['client_email'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Vehicle Details</label>
                                            <select type="" required name="rental_car_id" class="form-control selectpicker" style="width: 100%;" onchange="GetCarDetails(this.value)" id="CarID">
                                                <option value="">Select vehicle Registration number</option>
                                                <?php
                                                $vehicles_sql = mysqli_query($mysqli, "SELECT * FROM cars WHERE car_availability_status = '0'");
                                                while ($vehicles = mysqli_fetch_array($vehicles_sql)) {
                                                    echo '<option value="' . $vehicles['car_id'] . '">' . $vehicles['car_reg_number'] . ' ' . $vehicles['car_model'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- Hide this -->
                                        <input type="hidden" name="rental_cost" id="CarRentalCost">
                                        <div class="form-group col-md-6">
                                            <label for="">From date</label>
                                            <input type="hidden" required name="rental_ref_code" value="<?php echo $ref_code; ?>" class="form-control">
                                            <input type="date" required name="rental_from_date" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Return date</label>
                                            <input type="date" required name="rental_to_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="Add_Rental" class="btn btn-outline-success">Add rental</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="downloadCategoriesModal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-danger">
                                    <i class="fas fa-download fa-4x"></i><br><br>
                                    <h5>Export vehicle rentals details as</h5> <br>
                                    <!-- Hide This -->
                                    <a href="reports?module=Rentals&type=pdf" class="text-center btn btn-success">PDF</a>
                                    <a href="reports?module=Rentals&type=csv" class="text-center btn btn-primary">CSV</a>
                                </div>
                            </form>
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