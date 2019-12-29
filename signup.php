



    <section class="content is-narrow">
        
        <div class="markdown-section">
            <h1 class="title is-1 is-family-secondary">Signup</h1>
            <hr class="is-visible is-size-3">

            <form action="includes/signup.inc.php" method="post">
                <div class="box is-well">
                    <?php
            // Here we check if the user already tried submitting data.

            // We check username.
            if (!empty($_GET["uid"])) {
              echo '<input id="fieldId" class="input" type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">
              <hr class="is-size-8">';
            }
            else {
              echo '<input id="fieldId" class="input" type="text" name="uid" placeholder="Username">
              <hr class="is-size-8">';
            }

            // We check e-mail.
            if (!empty($_GET["mail"])) {
              echo '<input id="fieldId" class="input" type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">
              <hr class="is-size-8">';
            }
            else {
              echo '<input id="fieldId" class="input" type="text" name="mail" placeholder="E-mail">
              <hr class="is-size-8">';
            }
            ?>
                    <input id="fieldId" class="input" type="password" name="pwd" placeholder="Password">
                    <hr class="is-size-8">
                    <input id="fieldId" class="input" type="password" name="pwd-repeat" placeholder="Repeat password">
                    <hr class="is-size-8">

                    <button class="button is-dark" type="submit" name="signup-submit">Signup</button>
                    <div class="">
                        <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="message is-success is-info"><strong>Signup successful 👍</strong></p>';
            }
          }
          ?>
                    </div>
                </div>
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



