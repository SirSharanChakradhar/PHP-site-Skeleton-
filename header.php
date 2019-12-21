<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="renting">
    <meta name="author" content="guest Inventory">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>GInv</title>


    <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="./assets/bds.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/pure.css">
    <link rel="stylesheet" href="./assets/bds.css">
    <link rel="stylesheet" href="./assets/docsify.css">
  
</head>



<body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->

    <aside class="sidebar">
        <div class="sidebar-nav">
            <ul>
                <li>
                    <p><a href="index.php" class="docsify-logo">
                            <img src="./assets/svg/biings-ds-logo.svg" data-origin="./assets/svg/biings-ds-logo.svg"
                                alt="" data-no-zoom="">
                        </a></p>
                </li>
                <div class="menu is-small">
                    <ul class="menu-list">
                        <p></p>
                        <li>
                            <p><a href="signup.php">Signup</a></p>
                        </li>
                        <li>
                            <p><a href="login.php">Login</a></p>
                        </li>

                    </ul>
                </div>

            </ul>
        </div>
    </aside>

    <!-- Page content -->
    <div>



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
      echo '<a href="includes/logout.inc.php" class="btn btn-neutral btn-icon ml-sm-3 d-none d-md-block">
      <span class="btn-inner--icon"><i class="fas fa-hiking mr-3"></i>Logout</a>';
    }
    ?>

        
    </div>
</body>