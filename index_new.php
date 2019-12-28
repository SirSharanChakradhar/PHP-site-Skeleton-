<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
  require "includes/showmenu.php";

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
    <script src="https://kit.fontawesome.com/a6ad77e818.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/bds.css">
	<link rel="stylesheet" href="./assets/css/template.css">
	

</head>

<body>

    <header class="header">
        		<div>
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
    </header>
    
    <aside class="sidebar">
        <div class="sidebar-nav">
            <ul class="">
                <li class="is-size-4">
                <p class="is-size-4 " href="index.php">
                 <strong>Office <br/> Jerks    
                 <span class="has-text-weight-bolder fas fa-boxes"> </span></strong>
                </p>
				</li>
				<br/>
                <div class="menu is-small">
                    <ul class="menu-list">
                        
                        <li>
                            <p><a href="signup.php">Signup</a></p>
                        </li>
                        <li>
                            <p><a href="login.php">Login</a></p>
                        </li>

                    </ul>
        <?= show_menu() ?>


                </div>

            </ul>
        </div>
	</aside>
	
	
	<object class="content" href="login.php" onload="this.width=screen.width;this.height=screen.height;">


       


</object>
	
    <footer class="footer">
        CoolLogo
        <span class="btn-inner--icon"><i class="fas fa-hiking mr-3">Logout</i>
    </footer>

</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</html>