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
require_once('../app/helpers/cars.php');
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
                $vehicle_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM cars c
                     INNER JOIN car_categories cc ON cc.category_id = c.car_category_id
                     WHERE car_id = '{$_GET['view']}'"
                );
                if (mysqli_num_rows($vehicle_sql) > 0) {
                    while ($vehicles = mysqli_fetch_array($vehicle_sql)) {

                ?>
                        <div class="card">
                            <div class="bg-light overflow-hidden">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        /* Get the first car image - use it as a key */
                                        $car_images = mysqli_query($mysqli, "SELECT * FROM car_images 
                                        WHERE image_car_id = '{$vehicles['car_id']}' LIMIT 1");
                                        if (mysqli_num_rows($car_images) > 0) {
                                            while ($car_image = mysqli_fetch_array($car_images)) {
                                                /* Get Car Image ID and put it as global */
                                                $car_image_id = $car_image['image_id'];
                                                global $car_image_id;
                                        ?>
                                                <div class="carousel-item active">
                                                    <img src="../storage/cars/<?php echo $car_image['image_file_name']; ?>" class="rounded d-block w-100">
                                                </div>
                                            <?php }
                                        }
                                        /* Get the rest of the car images */
                                        $car_images = mysqli_query($mysqli, "SELECT * FROM car_images 
                                        WHERE image_car_id = '{$vehicles['car_id']}' AND image_id != '{$car_image_id}'");
                                        if (mysqli_num_rows($car_images) > 0) {
                                            while ($car_image = mysqli_fetch_array($car_images)) {
                                            ?>
                                                <div class="carousel-item">
                                                    <img src="../storage/cars/<?php echo $car_image['image_file_name']; ?>" class="rounded d-block w-100">
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-3">
                            <div class="bg-holder d-none d-lg-block bg-card"></div>
                            <!--/.bg-holder-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h3 class="mb-0"><?php echo $vehicles['car_model']; ?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Registration number: <?php echo $vehicles['car_reg_number']; ?></li>
                                            <li class="list-group-item">Model: <?php echo $vehicles['category_name']; ?></li>
                                            <li class="list-group-item">Year of manufacture: <?php echo $vehicles['car_yom']; ?></li>
                                            <li class="list-group-item">Mileage: <?php echo $vehicles['car_mileage']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Transmission: <?php echo $vehicles['car_transmission_type']; ?></li>
                                            <li class="list-group-item">Fuel: <?php echo $vehicles['car_fuel_type']; ?></li>
                                            <li class="list-group-item">Seats: <?php echo $vehicles['car_seats']; ?></li>
                                            <li class="list-group-item">Renting rate per hour: Kes <?php echo number_format($vehicles['car_renting_rate']); ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12"><br>
                                        <h5 class="text-center">Vehicle description</h5>
                                        <p><?php echo $vehicles['car_description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row no-gutters">
                            <div class="col-lg-12 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">Update vehicle</a></li>
                                            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Upload images</a></li>
                                        </ul>
                                        <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                                                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="">Registration number</label>
                                                            <input type="hidden" name="car_id" value="<?php echo $vehicles['car_id']; ?>">
                                                            <input type=" text" value="<?php echo $vehicles['car_reg_number']; ?>" required name="car_reg_number" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Model name</label>
                                                            <input type="text" value="<?php echo $vehicles['car_model']; ?>" required name="car_model" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Year of manufacture</label>
                                                            <input type="text" value="<?php echo $vehicles['car_yom']; ?>" required name="car_yom" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Vehicle category</label>
                                                            <select type="" required name="car_category_id" class="form-control">
                                                                <option value="<?php echo $vehicles['car_category_id']; ?>"><?php echo $vehicles['category_name']; ?></option>
                                                                <?php
                                                                $categories_sql = mysqli_query($mysqli, "SELECT * FROM car_categories WHERE category_id != '" . $vehicles['car_category_id'] . "'");
                                                                while ($categories = mysqli_fetch_array($categories_sql)) {
                                                                    echo '<option value="' . $categories['category_id'] . '">' . $categories['category_name'] . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Mileage (Kms)</label>
                                                            <input type="text" value="<?php echo $vehicles['car_mileage']; ?>" required name="car_mileage" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Seats</label>
                                                            <input type="text" value="<?php echo $vehicles['car_seats']; ?>" required name="car_seats" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Transmission</label>
                                                            <select type="text" required name="car_transmission_type" class="form-control">
                                                                <?php if ($vehicles['car_transmission_type'] == "Manual") { ?>
                                                                    <option selected>Manual</option>
                                                                    <option>Automatic</option>
                                                                <?php } else { ?>
                                                                    <option>Manual</option>
                                                                    <option selected>Automatic</option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Pickup location</label>
                                                            <input type="text" value="<?php echo $vehicles['car_pick_up_location']; ?>" required name="car_pick_up_location" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Renting rate (Per Hour)</label>
                                                            <input type="text" value="<?php echo $vehicles['car_renting_rate']; ?>" required name="car_renting_rate" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Fuel type</label>
                                                            <select type="text" required name="car_fuel_type" class="form-control">
                                                                <?php if ($vehicles['car_fuel_type'] == "Petrol") { ?>
                                                                    <option selected>Petrol</option>
                                                                    <option>Diesel</option>
                                                                    <option>Electric</option>
                                                                <?php } else if ($vehicles['car_fuel_type'] == "Diesel") { ?>
                                                                    <option>Petrol</option>
                                                                    <option selected>Diesel</option>
                                                                    <option>Electric</option>
                                                                <?php } else { ?>
                                                                    <option>Petrol</option>
                                                                    <option>Diesel</option>
                                                                    <option selected>Electric</option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="">Detailed description of the vehicle</label>
                                                            <textarea type="text" rows="5" required name="car_description" class="summernote form-control"><?php echo $vehicles['car_description']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="Update_Car_Details" class="btn btn-outline-success">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationTooltip01">Vehicle images</label>
                                                            <div class="custom-file">
                                                                <input name="car_id" type="hidden" class="form-control" value="<?php echo $vehicles['car_id']; ?>" required>
                                                                <input type="file" name="files[]" multiple accept=".png, .jpg, .jpeg, .webp" required class="custom-file-input" id="inputGroupFile02">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button class="btn btn-primary" type="submit" name="Update_Vehicle_Images">Upload</button>
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

    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>


</html>