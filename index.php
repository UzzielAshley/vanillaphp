<!DOCTYPE html>

<html lang="en" dir="ltr">
<?php include 'header.php'  ?>


  <div class="row" style="padding-top: 75px;">
    <div class="col s12 m2"></div>
    <div class="col s12 m8">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Login</span>
          <div class="row">
              <?php require_once 'controller/loginController.php'; ?>
            <form class="col s12" action="controller/loginController.php"  method="post">
              <div class="input-field col s12">
                <input placeholder="Please Enter Email" id="email" name="email" type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input placeholder="Please Enter Password" id="password" name="password" type="password" class="validate">
              </div>
              <button type="submit" class="waves-effect waves-light btn" name="login" id="login">Login</button>
              <a href="registration.php"class="waves-effect waves-light btn">Register</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </body>

</html>
