<!doctype html>
<html lang="en">
    @include('partial.head')
<body>

    <!--================Header Menu Area =================-->
        @include('partial.nav')
    <!--================Header Menu Area =================-->


    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>CarRentals  Features</h2>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->

    <!--================Service  Area =================-->
    <section class="service-area area-padding">
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
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="service-content">
                            <h5>Clients and Staff Accounts Management</h5>
                            <p>CarRentals allows the management to create, update and even delete staff accounts, and also client accounts. This functionality helps in keeping track of all personnels who are endorsed by the system.</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-money "></i>
                        </div>
                        <div class="service-content">
                            <h5>Finance And Billings</h5>
                            <p>CarRentals System has a finance and billing module which takes care of billing of rented cars, penalties or cars which have been returned damanged.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Service Area end =================-->

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