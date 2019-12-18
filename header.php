<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title></title>

    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>



<body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->


    <header class="navbar navbar-expand navbar-dark flex-row align-items-md-center ct-navbar bg-gray-dark">

        <a class="navbar-brand mr-0 mr-md-2" href="../../docs/getting-started/overview.html" aria-label="Bootstrap">

            <h1 class="ct-title" color="white" id="content">Guest Inv</h1>

        </a>
        <ul class="navbar-nav flex-row mr-auto ml-4 d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php" target="_blank">Signup</a>
            </li>
        </ul>
        <div class="d-none d-sm-block ml-auto">
            <ul class="navbar-nav ct-navbar-nav flex-row align-items-center">
                <li class="nav-item dropdown d-none">
                    <a class="btn-link text-white dropdown-toggle mr-sm-3" href="#" id="ct-versions"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1.0.1</a>
                    <div class="dropdown-menu" aria-labelledby="ct-versions">
                        <a class="dropdown-item active" href="../..//docs/1.0.1/">Latest - 1.0.1</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.facebook.com/sirsharanchakradhar" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>

            </ul>
        </div>
        

        <!--
    Here is the HTML login form.
    Notice that the "method" is set to "post" because the data we send is sensitive data.
    The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

    Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
    -->
        <?php
    if (!isset($_SESSION['id'])) {
      echo '<a href="login.php" class="btn btn-warning btn-icon ml-sm-3 d-none d-md-block">
      <span class="btn-inner--icon">
      <i class="fa fa-sign-in mr-3"></i>Login</a>';
    }
    else if (isset($_SESSION['id'])) {
      echo '<a href="includes/logout.inc.php" class="btn btn-neutral btn-icon ml-sm-3 d-none d-md-block"><span class="btn-inner--icon"><i class="fas fa-hiking mr-3"></i>Logout</a>';
    }
    ?>



    </header>