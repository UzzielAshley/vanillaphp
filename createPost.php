<!DOCTYPE html>
<?php
session_start();
if($_SESSION['uid'] == ''){
  header('location: index.php');
}

?>
<html lang="en" dir="ltr">
<?php include 'header.php'  ?>


  <div class="row" style="padding-top: 75px;">
    <div class="col s12 m2"></div>
    <div class="col s12 m8">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Create a Post!</span>
          <div class="row">
              <?php require_once 'controller/createController.php'; ?>
              <?php require_once 'controller/deleteController.php'; ?>
            <form class="col s12" action="controller/createController.php?edit='0'"  method="post">
              <input placeholder="Enter Title" id="uid" name="uid" value="<?php echo $_SESSION['uid'];?>" type="hidden" class="validate">
              <input placeholder="Enter Title" id="id" name="id" value="<?php echo $id;?>" type="hidden" class="validate">
              <div class="input-field col s12">
                <input placeholder="Enter Title" id="title" name="title" value="<?php echo $title;?>" type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input id="content" name="content" value="<?php echo $content;?>" class="materialize-textarea"  placeholder="Enter Content">
              </div>
              <?php if($update == true){
                ?>
                    <button type="submit" class="waves-effect waves-light btn" name="update" id="update">Update</button>
                <?php
              }else{
                ?>
                  <button type="submit" class="waves-effect waves-light btn" name="post" id="post">Post</button>
                <?php
              }?>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </body>

</html>
