<?php
/*
 *   Crafted On Sun Mar 05 2023
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
require_once('../app/partials/landing_head.php');
?>

<body>

    <?php require_once('../app/partials/landing_navbar.php');
    $vehicle_sql = mysqli_query(
        $mysqli,
        "SELECT * FROM cars c
         INNER JOIN car_categories cc ON cc.category_id = c.car_category_id
         WHERE car_id = '{$_GET['view']}'"
    );
    if (mysqli_num_rows($vehicle_sql) > 0) {
        while ($vehicles = mysqli_fetch_array($vehicle_sql)) {
    ?>

            <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../public/landing_assets/images/about.jpg');" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                        <div class="col-md-9 ftco-animate pb-5">
                            <p class="breadcrumbs"><span class="mr-2"><a href="../">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars<i class="ion-ios-arrow-forward"></i></span></p>
                            <h1 class="mb-3 bread">Car Details</h1>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ftco-section ftco-car-details">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="car-details">
                                <div class="img rounded" style="background-image: url(images/bg_1.jpg);"></div>
                                <div class="text text-center">
                                    <span class="subheading"><?php echo $vehicles['car_model']; ?></span>
                                    <h2><?php echo $vehicles['category_name']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Mileage
                                                <span><?php echo $vehicles['car_mileage']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Transmission
                                                <span><?php echo $vehicles['car_transmission_type']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Seats
                                                <span><?php echo $vehicles['car_seats']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Rate per hour
                                                <span>Ksh <?php echo $vehicles['car_renting_rate']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Fuel
                                                <span><?php echo $vehicles['car_fuel_type']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <div class="d-flex justify-content-center">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="features">
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="features">
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                                    <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                                    <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="features">
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                                    <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h3 class="head">23 Reviews</h3>
                                                <div class="review d-flex">
                                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                                <div class="review d-flex">
                                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                                <div class="review d-flex">
                                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="rating-wrap">
                                                    <h3 class="head">Give a Review</h3>
                                                    <div class="wrap">
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                (98%)
                                                            </span>
                                                            <span>20 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                (85%)
                                                            </span>
                                                            <span>10 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                (70%)
                                                            </span>
                                                            <span>5 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                (10%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                <i class="ion-ios-star"></i>
                                                                (0%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section ftco-no-pt">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                            <span class="subheading">Choose Car</span>
                            <h2 class="mb-2">Related Cars</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    <?php }
    } ?>


    <!-- Footer -->
    <?php require_once('../app/partials/landing_footer.php'); ?>


    <!-- Scripts -->
    <?php require_once('../app/partials/landing_scripts.php'); ?>

</body>

</html>