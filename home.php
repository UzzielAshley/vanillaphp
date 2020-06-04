<!DOCTYPE html>
<?php
session_start();
if($_SESSION['uid'] == ''){
  header('location: index.php');
}else{
$uid = $_SESSION['uid'];
}
?>
<html lang="en" dir="ltr">
<?php include 'header.php'  ?>



  <div class="row" style="padding-top: 75px;">
    <div class="col s12 m4"></div>
    <div class="col s12 m4">

      <div class="row">
        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'vanillaphp_db')or die(mysqli_error($mysqli));
            $result = $result = $mysqli->query("SELECT * FROM post WHERE u_id = '$uid'") or
                   die(mysqli_error($mysqli));

            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="card">
                <div class="card-content">
                  <span class="card-title"><?php echo $row['title'] ?></span>
                  <div class="row">
                  <p><?php echo $row['content']; ?></p>
                  <p><?php echo $row['date_created']; ?></p>
                  </div>
                  <?php require_once 'controller/deleteController.php'; ?>
                  <a href="controller/deleteController.php?delete=<?php echo $row['id'];?>" class="waves-effect waves-light btn-small red accent-4" name="delete" id="delete" >Delete</a>
                  <a href="createPost.php?edit=<?php echo $row['id'];?>" class="waves-effect waves-light btn-small green darken-4" name="edit" id="edit" >Edit</a>
                </div>

              </div>
              <?php
            }
          ?>
      </div>
      <div class="row">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <a href="createPost.php?edit=0" name="button" class="waves-effect waves-light btn">Create New Post</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </body>

</html>
