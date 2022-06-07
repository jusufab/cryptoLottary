<?php
include_once('config.php');

if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>

    <!-- Title -->
    <title>Cryptos - Cryptocurrency &amp; Mining Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style-dash.css">


</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Top Headline -->


                            <div class="login-faq-earn-money">

                                <a href="dashboard.php" class="active profile" style="font-size: 40px;"> <i
                                        class="fas fa-home"></i></a>
                            </div>
                            <div class="login-faq-earn-money">

                                <a href="deposit.php" class="active profile" style="font-size: 40px;"><i
                                        class='fa fa-bank'></i>
                                    </i></a>
                            </div>
                            <!-- Top Login & Faq & Earn Monery btn -->
                            <div class="login-faq-earn-money">

                                <a href="profile.php" class="active profile" style="font-size: 40px;"> <i <i
                                        class="fas fa-trophy"></i></a>
                            </div>
                            <div class="login-faq-earn-money">

                                <a href="profile.php" class="active profile" style="font-size: 40px;"> <i
                                        class="fas fa-user-circle"></i></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php

        include_once('authController.php');


        if (isset($_GET['token'])) {
            $token = $_GET['token'];
            verifyUser($token);
        }

        if (isset($_GET['password-token'])) {
            $passwordToken = $_GET['password-token'];
            resetPassword($passwordToken);
        }


        ?>
        <?php
        if (isset($_SESSION['message'])) : ?>
        <div class="alert <?php echo $_SESSION['alert-class']; ?> ">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
        </div>
        <?php endif; ?>
        <?php if ($_SESSION['verified'] == 0) : ?>
        <div class="alert alert-warning">
            Verify your Account!!!
            <?php echo $_SESSION['email']; ?>
        </div>
        <?php endif; ?>

        <!-- Navbar Area -->

    </header>
    <!-- ##### Header Area End ##### -->

    <body>