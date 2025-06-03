<?php
  session_start();


$facebook_url = $_REQUEST['facebook_url'] ?? null;
$insta_url = $_REQUEST['insta_url'] ?? null;
$github_url = $_REQUEST['github_url'] ?? null;
$twitter_url = $_REQUEST['twitter_url'] ?? null;
$tiktok_url = $_REQUEST['tiktok_url'] ?? null;
$whatsapp_url = $_REQUEST['whatsapp_url'] ?? null;
$linkedin_url = $_REQUEST['linkedin_url'] ?? null;
$telegram_url = $_REQUEST['telegram_url'] ?? null;

// ! Delete old data
include_once "../database/env.php";
$query = "DELETE FROM social_links";
$res = mysqli_query($conn, $query);

if($res){
  // ! Insert new data
  $query ="INSERT INTO social_links(fb_url, insta_url, github_url, whatsapp_url, tiktok_url, telegram_url,twitter_url, linkedin_url) VALUES ('$facebook_url','$insta_url','$github_url','$whatsapp_url','$tiktok_url','$telegram_url','$twitter_url','$linkedin_url')";
  $res = mysqli_query($conn, $query);

   if($res){
  // ! Redirect to dashboard
    header("Location: ../dashboard/SocialLink.php");
    $_SESSION['msg'] = [
      'icon' => 'success',
      'title' => 'Social Links Updated Successfully'
    ];
  }
}