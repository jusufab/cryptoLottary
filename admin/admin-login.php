<?php
include_once("../config.php");
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
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <!-- Title -->
    <title>Cryptos - Cryptocurrency &amp; Mining Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="top-header">
            <h3>Welcome back</h3>
            <p>Enter your credentials to access your account</p>
        </div>
        <form action="admin-loginlogic.php" method="POST">
            <div class="user">
                <i class="bx bxs-user-circle"></i>
                <input type="text" name="username" placeholder="Enter your username" />
            </div>
            <div class="pass">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" name="password" placeholder="Enter your password" />
            </div>
            <div class="btn">
                <button name="submit-log">Sign in</button>
            </div>
        </form>

    </div>
    <p class="last">SIGNUP <a href="#">SIGNUP </a></p>