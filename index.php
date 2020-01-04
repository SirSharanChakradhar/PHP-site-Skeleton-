<?php
// First we start a session which allow for us to store information as SESSION variables.
session_start();


// "require" creates an error message and stops the script. "include" creates an error and continues the script.
require "includes/dbh.inc.php";

define( 'RESTRICTED', true );

if ( defined( 'RESTRICTED' ) ) {
    if ( !isset( $_SESSION['id'] ) ) {
      header( 'Location: login.php' );
      exit();
    }
}
else {
    
    if ( isset( $_SESSION['id'] ) ) {
      header( 'Location: index.php' );
      exit();
    }
}
require "includes/showmenu.inc.php";


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
    <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0">
    <!-- <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <script src="https://kit.fontawesome.com/a6ad77e818.js" crossorigin="anonymous"></script> -->
    <script src="./assets/js/fontawesome_proforfree.js" crossorigin="anonymous"></script>
    <title>GInv</title>
    <link rel="stylesheet" href="./assets/css/bds.css">
    <link rel="stylesheet" href="./assets/css/template.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>


</head>

<body>

    <header class="header">
        <div class="level">
            <div class="level-left">
                <div class="level-item"><a href="login.php" target="#/content">Item 1</a></div>&nbsp;
                <div class="level-item">Item 2</div>
            </div>
            <div class="level-right">
                <div class="level-item"></div>
                &nbsp;
                <div class="avatar">
                    <div class="has-background-grey-light"> <?php echo ucfirst(substr($_SESSION['uid'],0,1)); ?></div>
                </div>
                <span><?php echo $_SESSION['uid'];?></span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="level-item"><?php
                        if (!isset($_SESSION['id'])) {
                            echo '<a href="./login.php" class="button is-glowing is-info">
                            <span class="btn-inner--icon"> <i class="fa fa-sign-in mr-3"></i> Login</a>';
                        } else if (isset($_SESSION['id'])) {
                            echo '<a href="includes/logout.inc.php" class="button is-small is-glowing is-danger">
                            <span class="btn-inner--icon"><i class="fas fa-hiking"></i>&nbsp;Logout</a>';
                        }
                        ?></div>
            </div>
        </div>
    </header>
    <button class="sidebar-toggle" aria-label="Menu">
        <div class="sidebar-toggle-button">B<span></span><span></span><span></span></div>
    </button>
    <aside class="sidebar">
        <div class="sidebar-nav">
            <ul class="logo is-box">
                <li class="is-size-4">
                    <p class="is-size-3 " href="index.php">
                        <strong>Office <br /> Jerks
                            <i class="fad fa-cubes"> </i></strong>
                    </p>
                    <hr>
                </li>

                <div class="menu is-block-fullhd"> <?=show_menu();?>
                    <a href="login.php"></a>
                </div>
            </ul>
        </div>
    </aside>


    <div class="content">




        <aside class="subnav">
            <a name="menu">Menu</a>
            <ul>
                <li><a href="#a001">Jump to a001</a></li>
                <li><a href="#a002">Jump to a002</a></li>
                <li><a href="#a003">Jump to a003</a></li>
            </ul>
        </aside>
        
        <div class="spacer"><a name="a001">a001</a></div>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <hr class="is-visible">
  <hr class="is-visible is-wavy">
        <div class="spacer"><a name="a002">a002</a></div>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <hr class="is-visible">
  <hr class="is-visible is-wavy">
        <div class="spacer"><a name="a003">a003</a></div>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>
        <p>paragraph text paragraph text paragraph text</p>

        <hr>
        <hr class="is-visible">
  <hr class="is-visible is-wavy">
        <p><a href="#menu">Jump to Menu</a></p>
        <hr class="is-visible">
  <hr class="is-visible is-wavy">
        <p class="Return"><a href="http://www.tagindex.net/html/link/a_name.html">Return</a></p>


    </div>
    <!-- <footer class="footer">

        <span class="btn-inner--icon"><i class="fas fa-hiking mr-3"></i>
    </footer> -->

</body>


</html>