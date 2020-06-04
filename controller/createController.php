<?php
$title = '';
$content = '';
$update = false;
$id = 0;

  $mysqli = new mysqli('localhost', 'root', '', 'vanillaphp_db')or die(mysqli_error($mysqli));

if(isset($_POST['post'])){
  $uid        = $_POST['uid'];
  $title      = $_POST['title'];
  $content    = $_POST['content'];
  $date       = date('Y-m-d h:i:sa');

  $mysqli->query("INSERT INTO post (u_id, title, content, date_created) VALUES('$uid', '$title', '$content', '$date')") or
            die(mysqli_error($mysqli));

            header('location: ../home.php');
}

if(isset($_POST['update'])){
  $uid        = $_POST['uid'];
  $id         = $_POST['id'];
  $title      = $_POST['title'];
  $content    = $_POST['content'];
  $date       = date('Y-m-d h:i:sa');

  $mysqli->query("UPDATE post SET title='$title', content='$content' WHERE id='$id'") or die(mysqli_error($mysqli));
  header('location: ../home.php');
}


  $id = $_GET['edit'];
  if($id !=0){
    $result = $mysqli->query("SELECT * FROM post WHERE id = $id")or die(mysqli_error($mysqli));
    if(count($result) == 1){
      $row = $result->fetch_array();
      $title = $row['title'];
      $content = $row['content'];
      $id = $row['id'];
      $update = true;

    }

  }



 ?>
