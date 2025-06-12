<?php
include_once("./backend_layouts/header.php");
include_once("./backend_layouts/htmlCss/ExperiencesHeader.php");
?>


<form id="jobExperienceForm" mathod="POST" action="../controller/ExperienceController.php">
  <div class="experience-card px-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <span class="badge badge-experience px-3 py-2">Experience</span>
    </div>

    <div class="row g-3">
      <!-- Company Name -->
      <div class="col-md-6">
        <label class="form-label fw-semibold">
          Company Name <span class="required">*</span>
        </label>
        <input type="text" class="form-control" name="companyName" placeholder="Enter company name" >
      </div>

      <!-- Work Position -->
      <div class="col-md-6">
        <label class="form-label fw-semibold">
          Work Position <span class="required">*</span>
        </label>
        <input type="text" class="form-control" name="workPosition" placeholder="Enter work position" >
      </div>

      <!-- Working From -->
      <div class="col-md-6">
        <label class="form-label fw-semibold">
          Working From <span class="required">*</span>
        </label>
        <input type="date" class="form-control" name="workingFrom" >
      </div>

      <!-- Working Status -->
      <div class="col-md-6">
        <label class="form-label fw-semibold">
          Working Status <span class="required">*</span>
        </label>
        <select class="form-select"  onchange="toggleWorkingTo(this.value)" >
          <option value="">Select working status</option>
          <option value="Past">Past</option>
          <option value="Running">Running</option>
        </select>
      </div>

      <!-- Working To -->
      <div class="col-md-6">
        <label class="form-label fw-semibold">
          Working To <span class="working-to-required" style="display: none;">*</span>
        </label>
        <input type="date" class="form-control" name="workingTo" id="workingTo" disabled>
      </div>

      <!-- Job Description -->
      <div class="col-12 mt-4">
        <label class="form-label fw-semibold">Job Description</label>
        <textarea class="form-control" name="jobDescription" rows="4"
          placeholder="Describe your role and responsibilities..." style="resize: none;"></textarea>
      </div>
    </div>
  </div>

  <!-- Submit Button -->
  <div class="text-end">
    <button type="submit" class="btn btn-primary btn-submit">
      <i class='bx bx-save me-2'></i>
      Save Job Experience
    </button>
  </div>
</form>

<?php
include_once("./backend_layouts/footer.php");
include_once("./backend_layouts/htmlCss/ExperiencesFooter.php");
?>