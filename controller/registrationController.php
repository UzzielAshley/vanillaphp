<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'vanillaphp_db')or die(mysqli_error($mysqli));

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $confirm =  $_POST['confirm_password'];
  if($password == $confirm){
    $password = md5($password);
    $mysqli->query("INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')") or
              die(mysqli_error($mysqli));
              header('location: ../index.php');
  }else{
    $_SESSION['message'] = "Password do not Match!";
    header('location: ../registration.php');
  }

}


 ?>
