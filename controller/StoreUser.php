<?php

/////// STOREUSER.PHP ////////

include_once("../database/env.php");
session_start();

$username = $_REQUEST["username"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$errors = [];

$encPassword = password_hash($password ,PASSWORD_BCRYPT);


// Validation
if (empty($username)) {
  $errors['name'] = 'Please enter your name.';
} elseif (strlen($username) < 3) {
  $errors['name'] = 'Your name must be at least 3 characters.';
}
// Phone number validation
if (empty($phone)) {
  $errors['phone'] = 'Please enter your phone number.';
} elseif (strlen($phone) !== 11) {
  $errors['phone'] = ' Your phone number must be 11 digits.';
} else {
  $query = " SELECT phone FROM users WHERE phone = '$phone'";
  $result = mysqli_query($conn, $query);
  if ($result->num_rows > 0) {
    $errors["phone"] = "Phone number already exists";
  }
}
// Email validation
if (empty($email)) {
  $errors['email'] = 'Please enter your email.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Invalid email format.";
} else {
  $query = "SELECT email FROM users WHERE email='$email' ";
  $res = mysqli_query($conn, $query);
  if($res->num_rows > 0) {
    $errors['email'] = "Email already exists.";
  }
}

// Password validation 
if (empty($password)) {
  $errors["password"] = "Please enter your password.";
} elseif (strlen($password) < 8) {
  $errors["password"] = " Your password must be at least 8 characters.";
}



// Redairection to the form if there are errors
if (count($errors) > 0) {
  $_SESSION["old"] = $_REQUEST;
  $_SESSION['errors'] = $errors;
  header("Location: ../register.php");
} else {
  // Insert into database
  $query = "INSERT INTO users (username, phone, email, password ) VALUES ('$username','$phone','$email','$encPassword')";
  $result = mysqli_query($conn, $query);
  if ($result) {
    // Redirect to login page
    header("Location: ../login.php");
  } else {
    echo " Error creating user";
  }
}
?>