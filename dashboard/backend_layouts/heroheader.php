<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
  :root {
    --primary-purple: #8B5CF6;
    --primary-blue: #3B82F6;
    --light-purple: #F8FAFC;
    --text-dark: #1F2937;
    --text-light: #6B7280;
    --border-color: #E5E7EB;
    --shadow-light: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  a {
    text-decoration: none;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 50%, #f3e5f5 100%);
    color: var(--text-dark);
    line-height: 1.6;
    min-height: 100vh;
  }

  .dashboard-container {
    min-height: 100vh;
    padding: 1rem;
  }

  .dashboard-card {
    background: white;
    border-radius: 20px;
    box-shadow: var(--shadow-large);
    border: 1px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;
    animation: slideInUp 0.8s ease-out;
  }

  @keyframes slideInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* New Header Design */
  .dashboard-header {
    background: white;
    padding: 1.5rem 2rem;
    border-bottom: 1px solid var(--border-color);
    position: relative;
  }

  .header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .header-left {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .header-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--primary-purple), var(--primary-blue));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    box-shadow: var(--shadow-medium);
  }

  .header-text h1 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    line-height: 1.2;
  }

  .header-text .subtitle {
    font-size: 0.875rem;
    color: var(--text-light);
    margin: 0;
    font-weight: 400;
  }

  .header-actions {
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }

  .btn-preview {
    background: var(--light-purple);
    color: var(--primary-purple);
    border: 1px solid var(--border-color);
    padding: 0.625rem 1.25rem;
    border-radius: 10px;
    font-weight: 500;
    font-size: 0.875rem;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }

  .btn-preview:hover {
    background: var(--primary-purple);
    color: white;
    transform: translateY(-1px);
    box-shadow: var(--shadow-medium);
  }

  .btn-submit {
    background: linear-gradient(135deg, var(--primary-purple), var(--primary-blue));
    color: white;
    border: none;
    padding: 0.625rem 1.5rem;
    border-radius: 10px;
    font-weight: 600;
    font-size: 0.875rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: var(--shadow-medium);
  }

  .btn-submit:hover {
    /* transform: translateY(-2px); */
    box-shadow: var(--shadow-large);
    box-shadow: var(--shadow-large);
    color: white;
    transform: scale(1.1);
  }

  .btn-submit:active {
    transform: translateY(0);
  }

  /* Status indicator */
  .status-indicator {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.75rem;
    color: var(--text-light);
    margin-top: 0.25rem;
  }

  .status-dot {
    width: 6px;
    height: 6px;
    background: #10B981;
    border-radius: 50%;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {

    0%,
    100% {
      opacity: 1;
    }

    50% {
      opacity: 0.5;
    }
  }

  .form-section {
    padding: 2rem;
  }

  .section-title {
    color: var(--primary-purple);
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--light-purple);
  }

  .section-title i {
    font-size: 1.25rem;
    padding: 0.5rem;
    background: linear-gradient(135deg, var(--primary-purple), var(--primary-blue));
    color: white;
    border-radius: 8px;
  }

  .form-group {
    margin-bottom: 1.5rem;
  }

  .form-label {
    color: var(--text-dark);
    font-weight: 500;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .form-control,
  .form-select {
    border: 2px solid var(--border-color);
    border-radius: 12px;
    padding: 0.875rem 1rem;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    background-color: #FAFAFA;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: var(--primary-purple);
    box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
    background-color: white;
    padding: 0.875rem 1rem;
  }

  .form-control::placeholder {
    color: var(--text-light);
    font-size: 0.9rem;
  }

  .textarea-field {
    min-height: 120px;
    resize: vertical;
  }

  .file-upload-container {
    position: relative;
    border: 2px dashed var(--border-color);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    background-color: #FAFAFA;
    cursor: pointer;
  }

  .file-upload-container:hover {
    border-color: var(--primary-purple);
    background-color: rgba(139, 92, 246, 0.05);
  }

  .file-upload-container input[type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
  }

  .file-upload-content {
    pointer-events: none;
  }

  .file-upload-icon {
    font-size: 2.5rem;
    color: var(--primary-purple);
    margin-bottom: 1rem;
  }

  .file-upload-text {
    color: var(--text-dark);
    font-weight: 500;
    margin-bottom: 0.5rem;
  }

  .file-upload-subtext {
    color: var(--text-light);
    font-size: 0.875rem;
  }

  .row-group {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
  }

  .input-icon {
    position: relative;
  }

  .input-icon i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    z-index: 2;
  }

  .input-icon .form-control {
    padding-left: 2.75rem;
  }

  .fade-in {
    animation: fadeIn 0.8s ease-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .dashboard-container {
      padding: 0.5rem;
    }

    .dashboard-header {
      padding: 1rem;
    }

    .header-content {
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }

    .header-actions {
      justify-content: center;
      width: 100%;
    }

    .header-text h1 {
      font-size: 1.5rem;
    }

    .form-section {
      padding: 1.5rem;
    }

    .row-group {
      grid-template-columns: 1fr;
      gap: 1rem;
    }

    .btn-preview,
    .btn-submit {
      flex: 1;
      justify-content: center;
    }
  }

  /* Success state */
  .btn-success {
    background: linear-gradient(135deg, #10B981, #059669) !important;
  }

  .form-control.valid {
    border-color: #10B981;
    background-color: rgba(16, 185, 129, 0.05);
  }

  .form-control.invalid {
    border-color: #EF4444;
    background-color: rgba(239, 68, 68, 0.05);
  }
  </style>
</head>

<body>
  <div class="container-fluid dashboard-container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-12">
        <div class="dashboard-card">
          <!-- Redesigned Header -->
