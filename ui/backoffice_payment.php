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
                $payments_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM payments p
                    INNER JOIN car_rentals cr ON cr.rental_id = p.payment_rental_id
                    INNER JOIN cars ca ON ca.car_id = cr.rental_car_id
                    INNER JOIN clients c ON c.client_id = cr.rental_client_id
                    WHERE p.payment_id = '{$_GET['view']}'"
                );
                if (mysqli_num_rows($payments_sql) > 0) {
                    while ($payments = mysqli_fetch_array($payments_sql)) {
                ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md">
                                        <h5 class="mb-2 mb-md-0">Payment #<?php echo $payments['payment_ref_code']; ?></h5>
                                    </div>
                                    <div class="col-auto">
                                        <button id="print" onclick="printDiv('PaymentReceipt');" class="btn btn-falcon-default btn-sm mr-2 mb-2 mb-sm-0" type="button"><span class="fas fa-print mr-1"> </span>Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div id="PaymentReceipt">
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
                                            <h5><?php echo $payments['client_names']; ?></h5>
                                            <p class="fs--1"><?php echo $payments['client_phone_number']; ?>
                                                <br><?php echo $payments['client_email']; ?><br>
                                                <?php echo $payments['client_address']; ?>
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
                                                            <td><?php echo $payments['rental_ref_code']; ?></td>
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
                                                    <th class="border-0 text-center">Rate per day</th>
                                                    <th class="border-0 text-right">Days leased</th>
                                                    <th class="border-0 text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">
                                                        <h6 class="mb-0 text-nowrap">
                                                            Rental of <?php echo $payments['car_reg_number']; ?>
                                                        </h6>
                                                        <p class="mb-0">
                                                            from <?php echo date('d M Y', strtotime($payments['rental_from_date'])); ?> to
                                                            <?php echo date('d M Y', strtotime($payments['rental_to_date'])); ?>
                                                        </p>
                                                    </td>
                                                    <td class="align-middle text-center">1</td>
                                                    <td class="align-middle text-center">Kes <?php echo number_format($payments['car_renting_rate'], 2); ?></td>
                                                    <td class="align-middle text-right">
                                                        <?php echo  $number_of_days = ceil(abs(strtotime($payments['rental_to_date']) - strtotime($payments['rental_from_date'])) / 86400);
                                                        ?> Days
                                                    </td>
                                                    <td class="align-middle text-right">Kes <?php echo number_format($payments['payment_amount']); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row no-gutters justify-content-end">
                                        <div class="col-auto">
                                            <table class="table table-sm table-borderless fs--1 text-right">
                                                <?php
                                                /* Compute Taxes */
                                                $tax_rate = 0.16;
                                                $taxed_amount = $payments['payment_amount'];
                                                $tax = $taxed_amount * $tax_rate;
                                                $untaxed_amount  = $taxed_amount - $tax;
                                                ?>
                                                <tr>
                                                    <th class="text-900">Subtotal:</th>
                                                    <td class="font-weight-semi-bold">Kes <?php echo number_format($untaxed_amount); ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-900">Tax 16%:</th>
                                                    <td class="font-weight-semi-bold">Kes <?php echo number_format($tax); ?></td>
                                                </tr>
                                                <tr class="border-top">
                                                    <th class="text-900">Total:</th>
                                                    <td class="font-weight-semi-bold"><?php echo number_format($taxed_amount); ?></td>
                                                </tr>
                                                <tr class="border-top border-2x font-weight-bold text-900">
                                                    <th>Amount Paid:</th>
                                                    <td>Kes <?php echo number_format($taxed_amount); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <h4 class="text-center text-danger">
                        No payment record available.
                    </h4>
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