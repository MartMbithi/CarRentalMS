<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarRentals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../storage/system/favicon/backapple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../storage/system/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../storage/system/favicon/favicon-16x16.png">
    <link rel="manifest" href="../storage/system/favicon/site.webmanifest">
    <!-- End Favicons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/landing_assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../public/landing_assets/css/animate.css">
    <link rel="stylesheet" href="../public/landing_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/landing_assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../public/landing_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../public/landing_assets/css/aos.css">
    <link rel="stylesheet" href="../public/landing_assets/css/ionicons.min.css">
    <link rel="stylesheet" href="../public/landing_assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../public/landing_assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="../public/landing_assets/css/flaticon.css">
    <link rel="stylesheet" href="../public/landing_assets/css/icomoon.css">
    <link rel="stylesheet" href="../public/landing_assets/css/style.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/noty.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/bootstrap-v4.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/light.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/metroui.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/mint.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/nest.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/relax.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/semanticui.css">
    <link rel="stylesheet" href="../public/backoffice_assets/plugins/noty/themes/sunset.css">

    <?php
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['err'])) {
        $err = $_SESSION['err'];
        unset($_SESSION['err']);
    }
    ?>
</head>