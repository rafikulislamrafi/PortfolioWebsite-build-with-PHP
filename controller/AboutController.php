<?php
include_once '../database/env.php';

$heading = $_REQUEST['heading'] ?? '';
$details = $_REQUEST['details'] ?? '';
$ctaOne = $_REQUEST['cta'] ?? '';
$ctaOneLink = $_REQUEST['cta_link'] ?? '';
$about_img = $_FILES['about_img'];
$oldImg = $_REQUEST['oldImage'];
$id = $_REQUEST['id'];
$extension = pathinfo($about_img['name'], PATHINFO_EXTENSION) ?? null;


// Create the directory if it doesn't exist
$path = '../uploads/about';
if (!file_exists($path)) {
    mkdir($path);
}
// Unique Img name
$fileName = $oldImg;
// If an image is uploaded, generate a unique file name
if($about_img['size'] > 0) {
$fileName = "about_" . uniqid() . "." . $extension;
// Move the uploaded file to the desired directory
move_uploaded_file($about_img['tmp_name'], "$path/$fileName");

$fileName = "uploads/about/$fileName";
// If an ID is provided, delete the old image
// if previous image exists, delete it
  if($oldImg){
    unlink("../$oldImg");
  }
}

// Prepare the data for the database
if($id) {
  // Update existing record
  $query = "UPDATE about SET about_img='$fileName', about_heading='$heading', about_description='$details', cta='$ctaOne', cta_link='$ctaOneLink' WHERE id='$id'";
} else {
  // Insert new record
  $query = "INSERT INTO about( about_img, about_heading, about_description, cta, cta_link) VALUES ('$fileName','$heading','$details','$ctaOne','$ctaOneLink')";
}
$res = mysqli_query($conn, $query);
if ($res) {
  header('Location: ../dashboard/aboutSection.php');
}