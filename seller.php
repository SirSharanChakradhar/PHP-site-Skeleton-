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

<script>
$(function () {
    	$("content").click(function() {
    	  $("ul").slideToggle();
    	  $("ul ul").css("display", "none");
    	});
    	$("ul li").click(function(e) {
    	  $(this).find("ul").slideToggle();
    	  $(this).find("ul ul").css("display", "none");
    	  e.stopPropagation();
    	});
    });
</script>



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
                <li class="is-size-4" border-bottom=dashed #b00020>
                    <p class="is-size-3 " href="index.php">
                        <strong>Guest <br /> Inventory
                            <i class="fad fa-alien"> </i></strong>
                    </p>
                    <hr>
                </li>

                <div class="menu is-block-fullhd"> <?=show_menu();?>
                    <a href="login.php"></a>
                </div>
            </ul>
        </div>
    </aside>


<div id="content">
    <section class="content is-narrow">
	
        <div class="markdown-section">
            <h1 class="title is-1 is-family-secondary">Seller Section</h1>
            <hr class="is-visible is-size-3">

            <form action="includes/seller.inc.php" method="post">
           





                <label class="radio"><input type="radio" name="title" id="title"><span
                        class="radio-mark"></span>Mr</label>
                <label class="radio"><input type="radio" name="title" id="title"><span
                        class="radio-mark"></span>Miss</label>
                <label class="radio"><input type="radio" name="title" id="title"><span
                        class="radio-mark"></span>Mrs</label>
                <hr class="is-size-8">


                <div class="field">
                    <label for="Given Name" class="label">Given name</label>
                    <input class="input" type="text" name="givenname" id="givenname" />
                </div>

                <div class="field">
                    <label for="surname" class="label">Surname</label>
                    <input class="input" type="text" name="surname" id="surname" />
                </div>
                <div class="field">
                    <label for="dob" class="label">Date of Birth</label>
                    <input class="input" type="date" date-format="YYYY-MM-DD" name="dob" id="dob" />
                </div>
                <div class="field">
                    <label for="emailid" class="label">Email</label>
                    <input class="input" type="email" name="emailid" id="emailid" />
                </div>
                <div class="field">
                    <label for="streetaddress" class="label">Street Address</label>
                    <input class="input" type="text" name="streetaddress" id="streetaddress" />
                </div>
                <div class="field">
                    <label for="city" class="label">City</label>
                    <input class="input" type="text" name="city" id="city" />
                </div>
                <div class="field">
                    <label for="state" class="label">State</label>
                    <input class="input" type="text" name="state" id="state" />
                </div>
                <div class="field">
                    <label for="country" class="label">Country</label>
                    <input class="input" type="text" name="country" id="country" />
                </div>
                <div class="field">
                    <label for="mobile" class="label">Mobile</label>
                    <input class="input" type="text" name="mobile" id="mobile" />
                </div>
                <div class="field">
                    <label for="landline" class="label">Landline</label>
                    <input class="input" type="text" name="landline" id="landline" />
                </div>
                <div class="field">
                    <label for="businessname" class="label">Business name</label>
                    <input class="input" type="text" name="businessname" id="businessname" />
                </div>
                <div class="field">
                    <label for="website1" class="label">Website 1</label>
                    <input class="input" type="text" name="website1" id="website1" />
                </div>
                <div class="field">
                    <label for="website2" class="label">Website 2</label>
                    <input class="input" type="text" name="website2" id="website2" />
                </div>
                <div class="field">
                    <label for="textfield" class="label">Notes</label>
                    <input class="input" type="text" name="notes" id="notes" />
                </div>
                <!-- <div class="field">
                    <label for="users_id" class="label">Users Id</label>
                    <input class="input" type="text" name="users_id" id="users_id" />
                </div> -->
                <!-- <div class="field">

                        <label for="create_time" class="label">Create Time</label>
                        <input class="input" type="text" name="create_time" id="create_time" />
                    </div> -->
                <!-- <div class="field">

                        <label for="last_updated" class="label">Last Updated</label>
                        <input class="input" type="text" name="last_updated" id="last_updated" />
                    </div> -->


                <button class="button is-dark" type="submit" name="submit">Submit</button>
				
            </form>

            <!--
          NOTES FOR ME BEFORE DOING PHP!
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          -->
        </div>
    </section>
</div>

</body>


</html>