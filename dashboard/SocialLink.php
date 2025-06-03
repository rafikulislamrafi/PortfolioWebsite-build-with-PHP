<?php
include_once("./backend_layouts/header.php");
include_once("./backend_layouts/htmlCss/sociallinkHeader.php");
include_once("../database/env.php");
$query = "SELECT * FROM social_links";
$res = mysqli_query($conn, $query); 
$links = mysqli_fetch_assoc($res);

?>

<form action="../controller/SocialLinksController.php" method="POST">
  <div class="card-header">
    <h2 class="card-title">Social Media Links</h2>
    <button type="submit" class="btn btn-primary btn-update">Update</button>
  </div>
  <div class="row">
    <!-- Facebook -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-facebook'></i>
        </span>
        <input value="<?= $links['fb_url'] ?? null ?>" name="facebook_url" type="url" class="form-control" placeholder="www.facebook.com/username">
      </div>
    </div>

    <!-- Instagram -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-instagram'></i>
        </span>
        <input value="<?= $links['insta_url'] ?? null ?>" name="insta_url" type="url" class="form-control" placeholder="www.instagram.com/username">
      </div>
    </div>

    <!-- GitHub -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-github'></i>
        </span>
        <input value="<?= $links['github_url'] ?? null ?>" name="github_url" type="url" class="form-control" placeholder="www.github.com/username">
      </div>
    </div>

    <!-- Twitter -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-twitter'></i>
        </span>
        <input value="<?= $links['twitter_url'] ?? null ?>" name="twitter_url" type="url" class="form-control" placeholder="www.twitter.com/username">
      </div>
    </div>

    <!-- TikTok -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-tiktok'></i>
        </span>
        <input value="<?= $links['tiktok_url'] ?? null ?>" name="tiktok_url" type="url" class="form-control" placeholder="www.tiktok.com/@username">
      </div>
    </div>

    <!-- WhatsApp -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-whatsapp'></i>
        </span>
        <input value="<?= $links['whatsapp_url'] ?? null ?>" name="whatsapp_url" type="url" class="form-control" placeholder="wa.me/phonenumber">
      </div>
    </div>

    <!-- LinkedIn -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-linkedin'></i>
        </span>
        <input value="<?= $links['linkedin_url'] ?? null ?>" name="linkedin_url" type="url" class="form-control" placeholder="www.linkedin.com/in/username">
      </div>
    </div>

    <!-- Telegram -->
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-text">
          <i class='bx bxl-telegram'></i>
        </span>
        <input value="<?= $links['telegram_url'] ?? null ?>" name="telegram_url" type="url" class="form-control" placeholder="t.me/username">
      </div>
    </div>
  </div>
</form>

<?php
include_once("./backend_layouts/htmlCss/sociallinkFooter.php");
include_once("./backend_layouts/footer.php");
unset($_SESSION['msg']);
?>