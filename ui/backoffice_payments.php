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
require_once('../app/helpers/rentals.php');
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
                            <span class="bg-200 pr-3">Payment Module</span>
                            <span class="border position-absolute absolute-vertical-center w-100 z-index--1 l-0"></span>
                        </h5>
                        <p class="mb-0 text-justify">
                            This module allows you to manage your payments records. You can edit, delete and view payments .
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="card mb-3 col-12">
                        <div class="card-header text-right">
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#downloadCategoriesModal">
                                <i class="fas fa-download"></i>
                                Download Payments Report
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body bg-light">
                                    <table class="data table table-sm no-wrap mb-0 fs--1 w-100">
                                        <thead class="bg-200">
                                            <tr>
                                                <th class="sort">Payment ref number</th>
                                                <th class="sort">Rental ref number</th>
                                                <th class="sort">Payment from</th>
                                                <th class="sort">Payment amount</th>
                                                <th class="sort">Date paid</th>
                                                <th class="sort">Payment means</th>
                                                <th class="">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <?php
                                            $payments_sql = mysqli_query(
                                                $mysqli,
                                                "SELECT * FROM payments p 
                                                INNER JOIN car_rentals cr  ON cr.rental_id = p.payment_rental_id
                                                INNER JOIN clients cl ON cl.client_id = cr.rental_client_id                                    
                                                "
                                            );
                                            if (mysqli_num_rows($payments_sql) > 0) {
                                                while ($payments = mysqli_fetch_array($payments_sql)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <a href="backoffice_payment?view=<?php echo $payments['payment_id']; ?>">
                                                                <?php echo $payments['payment_ref_code']; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="backoffice_rental?view=<?php echo $payments['rental_id']; ?>">
                                                                <?php echo $payments['rental_ref_code']; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="backoffice_client?view=<?php echo $payments['client_id']; ?>">
                                                                <?php echo $payments['client_names']; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            Kes <?php echo number_format($payments['payment_amount']); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date('d M Y g:ia', strtotime($payments['payment_date_posted'])); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $payments['payment_means']; ?>
                                                        </td>
                                                        <td>
                                                            <a data-toggle="modal" href="#delete_<?php echo $payments['payment_id']; ?>" class="badge badge-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                            <?php
                                                    include('../app/modals/payments.php');
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

                <div class="modal fade" id="downloadCategoriesModal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-danger">
                                    <i class="fas fa-download fa-4x"></i><br><br>
                                    <h5>Export vehicle payment details as</h5> <br>
                                    <!-- Hide This -->
                                    <a href="reports?module=Payments&type=pdf" class="text-center btn btn-success">PDF</a>
                                    <a href="reports?module=Payments&type=csv" class="text-center btn btn-primary">CSV</a>
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