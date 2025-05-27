<?php

//// ENV.PHP ///////

$dbHost ="localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ashikur_project";

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed");
}