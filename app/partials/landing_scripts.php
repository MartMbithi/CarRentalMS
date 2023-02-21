<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>


<script src="../public/landing_assets/js/jquery.min.js"></script>
<script src="../public/landing_assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="../public/landing_assets/js/popper.min.js"></script>
<script src="../public/landing_assets/js/bootstrap.min.js"></script>
<script src="../public/landing_assets/js/jquery.easing.1.3.js"></script>
<script src="../public/landing_assets/js/jquery.waypoints.min.js"></script>
<script src="../public/landing_assets/js/jquery.stellar.min.js"></script>
<script src="../public/landing_assets/js/owl.carousel.min.js"></script>
<script src="../public/landing_assets/js/jquery.magnific-popup.min.js"></script>
<script src="../public/landing_assets/js/aos.js"></script>
<script src="../public/landing_assets/js/jquery.animateNumber.min.js"></script>
<script src="../public/landing_assets/js/bootstrap-datepicker.js"></script>
<script src="../public/landing_assets/js/jquery.timepicker.min.js"></script>
<script src="../public/landing_assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../public/landing_assets/js/google-map.js"></script>
<script src="../public/landing_assets/js/main.js"></script>
<!-- Mojs -->
<script src="../public/backoffice_assets/plugins/mojs/mo.js"></script>
<!-- Noty -->
<script src="../public/backoffice_assets/plugins/noty/noty.js"></script>
<!-- Load Alerts -->
<?php include('alerts.php'); ?>
<script>
    /* Add Active class on navigation */
    var url = window.location;
    // Will only work if string in href matches with location
    $('li.nav-item a[href="' + url + '"]').parent().addClass('active');
    // Will also work for relative and absolute hrefs
    $('li.nav-item a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
</script>