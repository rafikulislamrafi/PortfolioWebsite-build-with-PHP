<?php
include_once '../database/env.php';

$heading = $_REQUEST['heading'] ?? '';
$details = $_REQUEST['details'] ?? '';
$ctaOne = $_REQUEST['cta'] ?? '';
$ctaOneLink = $_REQUEST['cta_link'] ?? '';
$branding_img = $_FILES['branding_img'];
$oldImg = $_REQUEST['oldImage'];
$id = $_REQUEST['id'];
$extension = pathinfo($branding_img['name'], PATHINFO_EXTENSION) ?? null;


// Create the directory if it doesn't exist
$path = '../uploads/branding';
if (!file_exists($path)) {
    mkdir($path);
}
// Unique Img name
$fileName = $oldImg;
// If an image is uploaded, generate a unique file name
if($branding_img['size'] > 0) {
$fileName = "branding_" . uniqid() . "." . $extension;
// Move the uploaded file to the desired directory
move_uploaded_file($branding_img['tmp_name'], "$path/$fileName");

$fileName = "uploads/branding/$fileName";
// If an ID is provided, delete the old image
// if previous image exists, delete it
  if($oldImg){
    unlink("../$oldImg");
  }
}

// Prepare the data for the database
if($id) {
  // Update existing record
  $query = "UPDATE branding SET branding_img='$fileName', branding_heading='$heading', branding_description='$details', cta='$ctaOne', cta_link='$ctaOneLink' WHERE id='$id'";
} else {
  // Insert new record
  $query = "INSERT INTO branding( branding_img, branding_heading, branding_description, cta, cta_link) VALUES ('$fileName','$heading','$details','$ctaOne','$ctaOneLink')";
}
$res = mysqli_query($conn, $query);
if ($res) {
  header('Location: ../dashboard/BrandingSection.php');
}