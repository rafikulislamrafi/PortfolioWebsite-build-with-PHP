<?php
include_once("./backend_layouts/header.php");
include_once("./backend_layouts/heroheader.php");
include_once '../database/env.php';
// Fetch the current banner data

$query = "SELECT * FROM branding LIMIT 1";
// Connect to the database
$res = mysqli_query($conn, $query);
$currentBranding = mysqli_fetch_assoc($res);
?>


<div class="form-section">
  <form action="../controller/BrandingController.php" enctype="multipart/form-data" method="post" id="portfolioForm">
    <input type="hidden" name="id" value="<?= $currentBranding['id'] ?? null ?>">
    <input type="hidden" name="oldImage" value="<?= $currentBranding['branding_img'] ?? null ?>" >
    <div class="dashboard-header">
      <div class="header-content">
        <div class="header-left">
          <div class="header-icon">
            <i class="fas fa-palette"></i>
          </div>
          <div class="header-text">
            <h1>Branding Section</h1>
            <p class="subtitle">Create and manage your portfolio content</p>
          </div>
        </div>
        <div class="header-actions">
          <button type="submit" class="btn-submit">
            <i class="fas fa-save"></i>
            Save Changes
          </button>
        </div>
      </div>
    </div>
    <!-- Heading -->
    <div class="form-group mt-4 fade-in">
      <label for="heading" class="form-label">
        <i class="fas fa-heading"></i>
        About Section Heading
      </label>
      <div class="input-icon">
        <i class="fas fa-heading"></i>
        <input value="<?= $currentBranding['branding_heading'] ?? '' ?>" name="heading" type="text" class="form-control"
          id="heading" placeholder="Enter your main heading">
      </div>
    </div>


    <!-- Details -->
    <div class="form-group fade-in">
      <label for="details" class="form-label">
        <i class="fas fa-align-left"></i>
        Description
      </label>
      <textarea name="details" class="form-control textarea-field" id="details"
        placeholder="Describe your portfolio in detail..."><?= $currentBranding['branding_description'] ?? '' ?></textarea>
    </div>

    <!-- CTA Buttons Row -->
    <div class="row-group fade-in">
      <div class="form-group">
        <label for="cta-one" class="form-label">
          <i class="fas fa-mouse-pointer"></i>
          Primary CTA
        </label>
        <div class="input-icon">
          <i class="fas fa-mouse-pointer"></i>
          <input value="<?= $currentBranding['cta'] ?? '' ?>" name="cta" type="text" class="form-control" id="cta-one"
            placeholder="Example: Lets Talk">
        </div>
      </div>

      <div class="form-group">
        <label for="cta-one-link" class="form-label">
          <i class="fas fa-link"></i>
          Primary CTA Link
        </label>
        <div class="input-icon">
          <i class="fas fa-link"></i>
          <input value="<?= $currentBranding['cta_link'] ?? '' ?>" name="cta_link" type="url" class="form-control"
            id="cta-one-link" placeholder="https://example.com">
        </div>
      </div>
    </div>

    <!-- Featured Image Upload -->
    <div class="form-group fade-in">
      <label class="form-label">
        <i class="fas fa-image"></i>
        Featured Image
      </label>
      <div class="file-upload-container">
        <input name="branding_img" type="file" id="featured-image">
        <div class="file-upload-content">
          <div class="file-upload-icon">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <div class="file-upload-text">Click to upload or drag and drop</div>
          <div class="file-upload-subtext">Only JPG and PNG files are allowed</div>
        </div>
      </div>
    </div>
    <label class="form-label">
      <i class="fas fa-image"></i>
      Preview Image
    </label>
    <div class="justify-content-center file-pload-container">
    <?php
   if(isset($currentBranding['branding_img'])){
    ?>
      <img src="../<?= $currentBranding['branding_img'] ?>" alt="Featured Image" class="img-fluid img-preview"
        style="max-width: 100%; height: auto; border-radius: 8px;">
      <?php
   }
    ?>
    </div>
  </form>
</div>

<?php
include_once("./backend_layouts/herofooter.php");
include_once("./backend_layouts/footer.php");
?>