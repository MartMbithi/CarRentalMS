<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>CarRentalMS</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../storage/system/favicon/backapple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../storage/system/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../storage/system/favicon/favicon-16x16.png">
    <link rel="manifest" href="../storage/system/favicon/site.webmanifest">
    <!-- Config navbar -->
    <script src="../public/backoffice_assets/js/config.navbar-vertical.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <!-- Scrollbar -->
    <link href="../public/backoffice_assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <!-- Theme  -->
    <link href="../public/backoffice_assets/css/theme.min.css" rel="stylesheet">
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