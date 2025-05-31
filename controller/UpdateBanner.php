<?php

session_start();

//! GET DATA FROM REQUEST //////
$errors = [];
$heading = trim($_REQUEST['heading']);
$sub_heading = trim($_REQUEST['sub_heading']);
$details = trim($_REQUEST['details']);
$cta_one = trim($_REQUEST['cta_one']);
$cta_one_link = trim($_REQUEST['cta_one_link']);
$cta_two = trim($_REQUEST['cta_two']);
$cta_two_link = trim($_REQUEST['cta_two_link']);
$featured_img = $_FILES['featured_img'];
$extension = pathinfo($featured_img['name'], PATHINFO_EXTENSION) ?? null;
$accepted_extensions = ['jpg', 'jpeg', 'png'];
$id = $_REQUEST['id'];
$oldImg = $_REQUEST['oldImage'];


//  Validation
// Validate heading
if(empty($heading)) {
    $errors['heading'] = "Heading is required";
} elseif(strlen($heading) > 100) {
    $errors['heading'] = "Heading cannot be longer than 100 characters";
}

// Validate sub heading
if(empty($sub_heading)) {
    $errors['sub_heading'] = "Sub heading is required";
} elseif(strlen($sub_heading) > 200) {
    $errors['sub_heading'] = "Sub heading cannot be longer than 200 characters";
}

// Validate details
if(empty($details)) {
    $errors['details'] = "Details are required";
} elseif(strlen($details) > 500) {
    $errors['details'] = "Details cannot be longer than 500 characters";
}

// Validate CTA One
if(!empty($cta_one)) {
    if(strlen($cta_one) > 50) {
        $errors['cta_one'] = "CTA text cannot be longer than 50 characters";
    }
    if(empty($cta_one_link)) {
        $errors['cta_one_link'] = "CTA link is required when CTA text is provided";
    } elseif(!filter_var($cta_one_link, FILTER_VALIDATE_URL)) {
        $errors['cta_one_link'] = "Please enter a valid URL for CTA link";
    }
}

// Validate CTA Two
if(!empty($cta_two)) {
    if(strlen($cta_two) > 50) {
        $errors['cta_two'] = "CTA text cannot be longer than 50 characters";
    }
    if(empty($cta_two_link)) {
        $errors['cta_two_link'] = "CTA link is required when CTA text is provided";
    } elseif(!filter_var($cta_two_link, FILTER_VALIDATE_URL)) {
        $errors['cta_two_link'] = "Please enter a valid URL for CTA link";
    }
}

// Validate feature image
if(!$id && empty($featured_img['name'])) {
    $errors['featured_img'] = "Feature image is required";
}else if($extension && !in_array($extension, $accepted_extensions)){
    $errors['featured_img'] = "Invalid image format. Only JPG and PNG files are allowed";
}elseif($featured_img['size'] > 2 * 1024 * 1024) { // 2MB limit
    $errors['featured_img'] = "Image size should not exceed 2MB";
}


// Check if there are any errors
if (count($errors) > 0){
  $_SESSION['errors'] = $errors;
  header('Location: ../dashboard/heroSection.php');
  exit;
} else {
  
    $path = '../uploads/banners';
    if (!file_exists($path)) {
        mkdir($path);
    }
   // Unique Img name
   $fileName = $oldImg;
   // If an image is uploaded, generate a unique file name
   if($featured_img['size'] > 0) {
    $fileName = "banner_" . uniqid() . "." . $extension;
    // Move the uploaded file to the desired directory
    move_uploaded_file($featured_img['tmp_name'], "$path/$fileName");

    $fileName = "uploads/banners/$fileName";
    // If an ID is provided, delete the old image
    // if previous image exists, delete it
    if($oldImg){
        unlink("../$oldImg");
    }
   }

    // Include database connection
   include_once '../database/env.php';
    // ! Prepare the SQL query to insert the banner data
   if ($id)  {
    // If an ID is provided, update the existing banner
    $query = "UPDATE banner SET heading='$heading',sub_heading='$sub_heading',details='$details',cta_one='$cta_one',cta_one_link='$cta_one_link',cta_two='$cta_two',cta_two_link='$cta_two_link',featured_img='$fileName' WHERE id='$id'";
   } else {
    // If no ID is provided, insert a new banner
    $query = "INSERT INTO banner(heading, sub_heading, details, cta_one, cta_one_link, cta_two, cta_two_link, featured_img) VALUES ('$heading','$sub_heading','$details','$cta_one','$cta_one_link','$cta_two','$cta_two_link','$fileName')";
   }

    $res = mysqli_query($conn, $query);
    if ($res){
        // If the query was successful, redirect to the hero section page
        $_SESSION['success'] = "Banner updated successfully!";
        header('Location: ../dashboard/heroSection.php');
        exit(); // Add exit after redirect
    }
}