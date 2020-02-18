<?php
    session_start();
    unset($_SESSION['a_id']);
    session_destroy();

    header("Location: staff_login.php");
    exit;
?>