<?php
session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'vanillaphp_db')or die(mysqli_error($mysqli));

if(isset($_POST['login'])){
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
  if($email !='' || $password !='' ){
    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'") or
           die(mysqli_error($mysqli));
    if (count($result) == 1) {
      $row = $result->fetch_array();
      $_SESSION["uid"]    = $row['id'];
      $_SESSION["uname"]  = $row['username'];

      header("location: ../home.php");
    }else{
      $_SESSION["message"] = "Email/Password is Incorrect!";
    }
  }else{
      $_SESSION["message"] = "Please Complete the fields!";
  }




}


 ?>
