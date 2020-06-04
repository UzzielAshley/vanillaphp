<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php

 include 'header.php'  ?>

  <div class="row" style="padding-top: 75px;">
    <div class="col s12 m2"></div>
    <div class="col s12 m8">

      <div class="card">
        <div class="card-content">
          <?php
          if(isset($_SESSION['message'])):
            echo $_SESSION['message'];
            // unset($_SESSION['message']);
          endif
          ?>
          <span class="card-title">See the Registration Rules</span>
          <div class="row">
            <?php require_once 'controller/registrationController.php'; ?>
            <form class="col s12" action="controller/registrationController.php" method="post">
              <div class="input-field col s12">
                <input placeholder="Please Enter Username" id="username" name="username"  type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input placeholder="Please Enter Email" id="email" name="email" type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input placeholder="Please Enter Password" id="password" name="password" type="password" class="validate">
              </div>
              <div class="input-field col s12">
                <input placeholder="Please Confirm Password" id="confirm_password" name="confirm_password" type="password" class="validate">
              </div>
                <button type="submit" class="waves-effect waves-light btn" name="register">Regiter</button>
              <p>Return to the <a class="waves-effect waves-light" href="index.php">Login page</a></p>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </body>
</html>
