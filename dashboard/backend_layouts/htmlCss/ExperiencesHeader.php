<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Experience Dashboard</title>

  <style>
  body {
    background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 50%, #f3e5f5 100%);
    /* min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
  }

  #jobExperienceForm {
    padding: 1.5rem;
  }

  .main-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: none;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    animation: fadeInUp 0.6s ease-out;
  }

  .card-header-custom h3{
    background: linear-gradient(135deg, #1976d2, #7b1fa2);
    color: #ffffff;
    font-weight: bold;
    border-radius: 20px !important;
    padding: 1.5rem;
  }

  .experience-card {
    background: rgba(248, 249, 250, 0.8);
    border: 1px solid #e9ecef;
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
    animation: slideIn 0.5s ease-out;
  }

  .experience-card:hover {
    background: rgba(248, 249, 250, 1);
    box-shadow: 0 5px 15px rgba(81, 155, 229, 0.29);
    transform: translateY(-2px);
  }
  .form-control,
  .form-select {
    border-radius: 10px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: #1976d2;
    box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.25);
    transform: scale(1);
  }

  .btn-submit {
    background: linear-gradient(135deg, #1976d2, #7b1fa2);
    border: none;
    border-radius: 10px;
    padding: 0.75rem 2rem;
    transition: all 0.3s ease;
  }

  .btn-submit:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(25, 118, 210, 0.4);
  }

  .badge-experience {
    background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
    color: #1976d2;
    border: 1px solid #e3f2fd;
  }

  .required {
    color: #dc3545;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateX(-20px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .alert-custom {
    border-radius: 10px;
    border: none;
  }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <!-- Header -->
        <!-- Main Form Card -->
        <div class="card main-card">
          <div class="card-header card-header-custom">
            <h3 class="mb-0 d-flex align-items-center">
              <i class='bx bx-briefcase me-3 fs-4'></i>
              Job Experience
            </h3>
          </div>
          <div class="card-body p-4"></div>