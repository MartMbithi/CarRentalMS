<?php
/*
 *   Crafted On Thu Mar 02 2023
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
require_once('../app/settings/codeGen.php');
require_once('../app/helpers/clients.php');
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
                        <i class="fa-inverse fa-stack-1x text-primary fas fa-users"></i>
                    </span>
                    <div class="media-body">
                        <h5 class="mb-0 text-primary position-relative">
                            <span class="bg-200 pr-3">Clients</span>
                            <span class="border position-absolute absolute-vertical-center w-100 z-index--1 l-0"></span>
                        </h5>
                        <p class="mb-0 text-justify">
                            This module allows you to manage your clients. You can add, edit, delete and view clients.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="card mb-3 col-12">
                        <div class="card-header text-right">
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addClientModal">
                                <i class="fas fa-plus"></i> Add Client
                            </button>
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#bulkImportClients">
                                <i class="fas fa-upload"></i>
                                Bulk Import Clients
                            </button>
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#downloadClientsModal">
                                <i class="fas fa-download"></i>
                                Download Clients
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body bg-light">
                                    <table class="data table table-sm no-wrap mb-0 fs--1 w-100">
                                        <thead class="bg-200">
                                            <tr>
                                                <th class="sort">Name</th>
                                                <th class="sort">Contacts</th>
                                                <th class="sort">Email</th>
                                                <th class="sort">Date joined</th>
                                                <th class="sort">Address</th>
                                                <th class="">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <?php
                                            $clients_sql = mysqli_query(
                                                $mysqli,
                                                "SELECT * FROM clients"
                                            );
                                            if (mysqli_num_rows($clients_sql) > 0) {
                                                while ($clients = mysqli_fetch_array($clients_sql)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <a href="backoffice_client?view=<?php echo $clients['client_id']; ?>">
                                                                <?php echo $clients['client_names']; ?>
                                                            </a>
                                                        </td>
                                                        <td><?php echo $clients['client_phone_number']; ?></td>
                                                        <td><?php echo $clients['client_email']; ?></td>
                                                        <td><?php echo $clients['client_date_joined']; ?></td>
                                                        <td><?php echo $clients['client_address']; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($_SESSION['user_access_level'] == 'Administrator') { ?>
                                                                <a data-toggle="modal" href="#delete_<?php echo $clients['client_id']; ?>" class="badge badge-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="backoffice_client?view=<?php echo $clients['client_id']; ?>" class="badge badge-danger">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                            <?php
                                                    include('../app/modals/client_delete.php');
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
                <div class="modal fade fixed-right" id="addClientModal" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-center">
                                <div class="text-center">
                                    <h6 class="mb-0 text-bold">Register new client</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Full names</label>
                                            <input type="text" required name="client_names" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" required name="client_email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">National id number</label>
                                            <input type="text" required name="client_id_no" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Phone number</label>
                                            <input type="text" required name="client_phone_number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Default login password</label>
                                            <input type="text" value="Client@Carentals" required name="client_password" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Staff address</label>
                                            <textarea type="text" required name="client_address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="Add_Client" class="btn btn-outline-success">Add client</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Add  Modal -->

                <!-- Bulk import  modal-->
                <div class="modal fade fixed-right" id="bulkImportClients" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-center">
                                <div class="text-center">
                                    <h6 class="mb-0 text-bold">Bulk import clients</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                                    <div class="row">
                                        <div class="form-group col-md-12 text-center">
                                            <a class="text-center" href="../storage/templates/clients.xlsx"> Download a template here</a>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationTooltip01">XLS File</label>
                                            <div class="custom-file">
                                                <input type="file" accept=".xlsx" name="client_details" required class="custom-file-input" id="inputGroupFile02">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="Bulk_Import_Clients" class="btn btn-outline-success">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End bulk import  modal -->

                <!-- Download  Details -->
                <div class="modal fade" id="downloadClientsModal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-danger">
                                    <i class="fas fa-download fa-4x"></i><br><br>
                                    <h5>Export client details as</h5> <br>
                                    <!-- Hide This -->
                                    <a href="reports?module=Clients&type=pdf" class="text-center btn btn-success">PDF</a>
                                    <a href="reports?module=Clients&type=csv" class="text-center btn btn-primary">CSV</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>



</html>