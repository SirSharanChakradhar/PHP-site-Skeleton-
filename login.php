

<section class="content">

    <div class="markdown-section">
        <h1 class="title is-1 is-family-secondary">Login</h1>
        <hr class="is-visible is-size-3">
        <!--
        Here is the HTML login form.
        Notice that the "method" is set to "post" because the data we send is sensitive data.
        The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
        -->
        <?php
        if (!isset($_SESSION['id'])) 
        {
          echo '
          <form action="includes/login.inc.php" method="post">
          <div class="box is-well">
            <input class="input" type="text" name="mailuid" placeholder="E-mail/Username">
            <hr class="is-size-8">
            <input class="input" type="password" name="pwd" placeholder="Password">
            <hr class="is-size-8">
            <button class="button is-dark" type="submit" name="login-submit">Login</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button class="button is-light" href="signup.php" class="header-signup"><strong> No Account? &nbsp;💁‍♂️ Signup !! </strong></button>
            </div>
          </form>
          ';
        }
        else if (isset($_SESSION['id']))
         {
          echo '<form action="includes/logout.inc.php" method="post">
          <div class="box is-well">
          
            <button class="button is-dark" type="submit" name="login-submit">Logout</button>
            </div>
          </form>';
        }
        ?>
    </div>
   
</section>

