<?php

$companyName = $_REQUEST['companyName'] ?? null;
$workPosition = $_REQUEST['workPosition'] ?? null;
$workingFrom = date('M Y', strtotime($_REQUEST['workingFrom'])) ?? null;
$workingTo = $_REQUEST['workingTo'] ? date('M Y', strtotime($_REQUEST['workingTo'])) : null; // Format the date to 'M Y'
$jobDescription = $_REQUEST['jobDescription'] ?? null; 
$colors = ['green','red','yellow'];
$color = $colors[array_rand($colors)]; // Randomly select a color from the array













// Validate required fields
// if (empty($companyName) || empty($workPosition) || empty($workingFrom)) {
//     echo "Please fill in all required fields.";
//     exit;
// }



include_once "../database/env.php";

$query ="INSERT INTO experiences (company, duration_from, duration_to, position, position_details, color) VALUES ('$companyName','$workingFrom','$workingTo','$workPosition','$jobDescription','$color')";

$res = mysqli_query($conn, $query);

if ($res) {
  header("Location: ../dashboard/Experiences.php");
}