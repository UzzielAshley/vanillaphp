<?php

  $mysqli = new mysqli('localhost', 'root', '', 'vanillaphp_db')or die(mysqli_error($mysqli));

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM post WHERE id = $id")or die(mysqli_error($mysqli));
  header('location: ../home.php');
}




 ?>
