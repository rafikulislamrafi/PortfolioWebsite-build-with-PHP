<?php
session_start();

///// LOGINUSER.PHP ///////

include_once("../database/env.php");
$emailOrPhone = $_REQUEST['emailphone'];
$password = $_REQUEST['password'];

$query = "SELECT * FROM users WHERE  phone = '$emailOrPhone'  OR email = '$emailOrPhone'";
$res = mysqli_query($conn, $query);

if($res->num_rows == 1){
  $user = mysqli_fetch_assoc($res);
  if(password_verify($password, $user["password"])){
    $_SESSION["auth"] = $user;
    header("Location: ../dashboard/index.php");
  } else {
    $_SESSION["password_error"] = "Invalid password";
    header("Location: ../login.php");
  }
} else {
  /// error email
  $_SESSION["email_error"] = "Invalid email or phone";
  header("Location: ../login.php");
}









?>