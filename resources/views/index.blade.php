<!doctype html>
<html lang="en">
    @include('partial.head')
<body>

    <!--================Header Menu Area =================-->
        @include('partial.nav')
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <div class="banner_content">
                            <h3>CarRentals<br/> Management System</h3>
                            <p>CarRentals System is a  web based application crafted using finnest and modern web programming languages to deliver high productivity, robustness and user friendlyness in automobile hire agencies.</p>
                            <a class="banner_btn" href="#core_features">Features<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Service  Area =================-->
    <section id="core_features" class="service-area area-padding">
        <div class="container">
            <div class="row">
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Unique Design</h5>
                            <p>This application is crafted with unique designs that it can run on any platforms ie(Smartphones, Tables and Laptops), Its unique design makes it responsive and lightweight.</p>
                            <a href="{{ url('/features') }}">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-image"></i>
                        </div>
                        <div class="service-content">
                            <h5>Payment Intergrations</h5>
                            <p>Payment records are processed directly in the payments module which makes it esy for the finance guys to analize agency finances quickly and with less hassle</p>
                            <a href="{{ url('/features') }}">Read More</a>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Advanced Reporting</h5>
                            <p>CarRentals is shipped with a complex advance reporting module which takes care of all reporting in the agency ranging from car hire records, car returns, payments, staff records, client records and car records. this module utilizes the
                            data visualization tools like graphs and charts. </p>
                            <a href="{{ url('/features') }}">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Service Area end =================-->


    <!--================About  Area =================-->
    <section class="about-area area-padding-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="area-heading">
                        <h4>Clean, OpenSource<br>and Fully Documented Codes </h4>
                        <h6>And if you find any wack spaghetti code...mmmmhhh  dont panic just clean em and move on oh and dont forget to share. </h6>

                        <p>CarRental core source code mainly in PHP, Javascript, HTML5 and CSS3, these codes are well commented, clean and easy to extend, upgrade, downgrade or to add 
                            other features. Well structured functions, classes and even normal code which is easy to manipulate. Our source codes are free i mean they are totally free and available
                            in Github. Oh and if you find any spaghetti code feel free to make it clean and share it. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-thought"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Deployment</h5>
                                    <p>This system can be deployed easly on any web server, its easy to reconfigure and also its shipped with its .SQL database file which saves time for 
                                    creating a ground zero database insted anyone who is installing the application can just import the bundled .SQL file and voila!! your database is up and running.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-truck"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>On Time Delivery</h5>
                                    <p>CarRentals System is opensource that means each and every module in the system is shipped fully no trials or subscriptions needed.
                                    All you need is just a web server(XAMPP, LAMPP, WAMPP), a database server  -A MySql database server eg phpmyadmin which is the most used, then enjoy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================Feature  Area =================-->
    <section class="feature-area area-padding bg_one">
        <div class="container">
            <div class="row align-items-center">

                <div class="offset-lg-6 col-lg-6">
                    <div class="area-heading light">
                        <h4>CarRentals on <br>Mobile (Smartphones)</h4>
                        <p>The following features makes this platform one of the best lite-weight opensource CarRentals Agencies Management System:</p>
                    </div>
                    <div class="row">
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-layers"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Super responsive design</h5>
                                    <p>This feature allows the system to be viewed and accessed not only on devices with screens having large aspect ratio but also to devices with small aspect ratios like smartphones and tablets 
                                    without any distortion, data loss or any front end bugs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-layers"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Lightweight</h5>
                                    <p>Despite of complex backend this system is crafted with cutting edge practices which allows small devices like mobile phones to save an eact copy of the system in their browsers cache which speeds 
                                    up the entire load and execution process thus making the learning activity fun and intresting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Feature Area End =================-->


    


    <!-- ================ start footer Area ================= -->
    @include('partial.footer')
<!-- ================ End footer Area ================= -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>