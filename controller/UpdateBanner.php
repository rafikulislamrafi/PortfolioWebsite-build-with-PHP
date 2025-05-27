<?php
session_start();

///// GET DATA FROM REQUEST //////
$heading = trim($_REQUEST['heading']);
$sub_heading = trim($_REQUEST['sub_heading']);
$details = trim($_REQUEST['details']);
$cta_one = trim($_REQUEST['cta_one']);
$cta_one_link = trim($_REQUEST['cta_one_link']);
$cta_two = trim($_REQUEST['cta_two']);
$cta_two_link = trim($_REQUEST['cta_two_link']);
$feature_img = $_FILES['feature_img'];

$errors = [];

//// Validation
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
if(empty($feature_img['name'])) {
    $errors['feature_img'] = "Feature image is required";
} else {
    $allowed_ext = ['jpg', 'jpeg', 'png'];
    $file_ext = strtolower(pathinfo($feature_img['name'], PATHINFO_EXTENSION));
    
    if(!in_array($file_ext, $allowed_ext)) {
        $errors['feature_img'] = "Invalid image format. Only JPG and PNG files are allowed";
    }
}

if (count($errors) > 0){
  $_SESSION['errors'] = $errors;
  header('Location: ../dashboard/heroSection.php');
  exit;
} else {
  // Redirect to success page or perform further processing
  $_SESSION['success'] = "Banner updated successfully!";
  header('Location: ../dashboard/heroSection.php');
}