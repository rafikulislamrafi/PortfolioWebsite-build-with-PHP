<?php
include_once("../database/env.php");
include_once("./backend_layouts/header.php");
include_once("./backend_layouts/heroheader.php");
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

$query = "SELECT * FROM banner LIMIT 1"; 
// Connect to the database
$result = mysqli_query($conn, $query);
$currentBanner = mysqli_fetch_assoc($result);
?>
<!-- Form Section -->
<div class="form-section">
  <form action="../controller/UpdateBanner.php" enctype="multipart/form-data" method="post" id="portfolioForm">
    <input type="text" name="id" value="<?= $currentBanner['id'] ?>" hidden>
    <input type="hidden" value="<?= $currentBanner['featured_img'] ?? null ?>" name="oldImage">
  <div class="dashboard-header">
      <div class="header-content">
        <div class="header-left">
          <div class="header-icon">
            <i class="fas fa-palette"></i>
          </div>
          <div class="header-text">
            <h1>Hero Section</h1>
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
        Main Heading
      </label>
      <div class="input-icon">
        <i class="fas fa-heading"></i>
        <input value="<?=$currentBanner['heading'] ?? null?>" name="heading" type="text" class="form-control"
          id="heading" placeholder="Enter your main heading">
      </div>
      <?php if(isset($errors['heading'])): ?>
      <span class="text-danger"><?php echo $errors['heading']; ?></span>
      <?php endif; ?>
    </div>

    <!-- Sub Heading -->
    <div class="form-group fade-in">
      <label for="subheading" class="form-label">
        <i class="fas fa-text-height"></i>
        Sub Heading
      </label>
      <div class="input-icon">
        <i class="fas fa-text-height"></i>
        <input value="<?=$currentBanner['sub_heading'] ?? null?>" name="sub_heading" type="text" class="form-control"
          id="subheading" placeholder="Enter your sub heading">
      </div>
      <?php if(isset($errors['sub_heading'])): ?>
      <span class="text-danger"><?php echo $errors['sub_heading']; ?></span>
      <?php endif; ?>
    </div>

    <!-- Details -->
    <div class="form-group fade-in">
      <label for="details" class="form-label">
        <i class="fas fa-align-left"></i>
        Description
      </label>
      <textarea name="details" class="form-control textarea-field" id="details"
        placeholder="Describe your portfolio in detail..."><?=$currentBanner['details'] ?? null?></textarea>
      <?php if(isset($errors['details'])): ?>
      <span class="text-danger"><?php echo $errors['details']; ?></span>
      <?php endif; ?>
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
          <input value="<?=$currentBanner['cta_one'] ?? null?>" name="cta_one" type="text" class="form-control"
            id="cta-one" placeholder="Example: Lets Talk">
        </div>
        <?php if(isset($errors['cta_one'])): ?>
        <span class="text-danger"><?php echo $errors['cta_one']; ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="cta-one-link" class="form-label">
          <i class="fas fa-link"></i>
          Primary CTA Link
        </label>
        <div class="input-icon">
          <i class="fas fa-link"></i>
          <input value="<?=$currentBanner['cta_one_link'] ?? null?>" name="cta_one_link" type="url" class="form-control"
            id="cta-one-link" placeholder="https://example.com">
        </div>
        <?php if(isset($errors['cta_one_link'])): ?>
        <span class="text-danger"><?php echo $errors['cta_one_link']; ?></span>
        <?php endif; ?>
      </div>
    </div>

    <div class="row-group fade-in">
      <div class="form-group">
        <label for="cta-two" class="form-label">
          <i class="fas fa-hand-pointer"></i>
          Secondary CTA
        </label>
        <div class="input-icon">
          <i class="fas fa-hand-pointer"></i>
          <input value="<?=$currentBanner['cta_two'] ?? null?>" name="cta_two" type="text" class="form-control"
            id="cta-two" placeholder="Example: Download CV">
        </div>
        <?php if(isset($errors['cta_two'])): ?>
        <span class="text-danger"><?php echo $errors['cta_two']; ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="cta-two-link" class="form-label">
          <i class="fas fa-external-link-alt"></i>
          Secondary CTA Link
        </label>
        <div class="input-icon">
          <i class="fas fa-external-link-alt"></i>
          <input value="<?=$currentBanner['cta_two_link'] ?? null?>" name="cta_two_link" type="url" class="form-control"
            id="cta-two-link" placeholder="https://example.com">
        </div>
        <?php if(isset($errors['cta_two_link'])): ?>
        <span class="text-danger"><?php echo $errors['cta_two_link']; ?></span>
        <?php endif; ?>
      </div>
    </div>

    <!-- Featured Image Upload -->
    <div class="form-group fade-in">
      <label class="form-label">
        <i class="fas fa-image"></i>
        Featured Image
      </label>
      <div class="file-upload-container">
        <input name="featured_img" type="file" id="featured-image">
        <div class="file-upload-content">
          <div class="file-upload-icon">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <div class="file-upload-text">Click to upload or drag and drop</div>
          <div class="file-upload-subtext">Only JPG and PNG files are allowed</div>
        </div>
      </div>
      <?php if(isset($errors['featured_img'])): ?>
      <span class="text-danger"><?php echo $errors['featured_img']; ?></span>
      <?php endif; ?>
    </div>
    <label class="form-label">
      <i class="fas fa-image"></i>
      Preview Image
    </label>
    <div class="justify-content-center file-pload-container">
      <?php
   if(isset($currentBanner['featured_img'])){
    ?>
      <img src="../<?= $currentBanner['featured_img'] ?>" alt="Featured Image" class="img-fluid img-preview"
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
if(isset($_SESSION['success'])){
?>
<script>
Toast.fire({
  icon: "success",
  title: `<?= $_SESSION['success']; ?>`
});
</script>
<?php
}
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>