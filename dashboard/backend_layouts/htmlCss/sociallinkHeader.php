<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Links Input Section</title>
  <style>
  body {
    background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 50%, #f3e5f5 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  a {
    text-decoration: none;
    font-size: 0.9375rem;
    font-weight: 500;
  }

  .social-card {
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    padding: 30px;
    background-color: white;
    transition: all 0.3s ease;
    animation: slideUp 0.6s ease-out;
  }

  .social-card:hover {
    /* transform: translateY(-2px); */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 25px;
    border-bottom: 2px solid #f0f0f0;
    margin-bottom: 25px;
    animation: fadeIn 0.8s ease-out 0.2s both;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateX(-20px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .card-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .input-group {
    margin-bottom: 20px;
    animation: slideInLeft 0.6s ease-out;
    animation-fill-mode: both;;
  }

  .input-group:nth-child(1) {
    animation-delay: 0.1s;
  }

  .input-group:nth-child(2) {
    animation-delay: 0.2s;
  }

  .input-group:nth-child(3) {
    animation-delay: 0.3s;
  }

  .input-group:nth-child(4) {
    animation-delay: 0.4s;
  }

  .input-group:nth-child(5) {
    animation-delay: 0.5s;
  }

  .input-group:nth-child(6) {
    animation-delay: 0.6s;
  }

  .input-group:nth-child(7) {
    animation-delay: 0.7s;
  }

  .input-group:nth-child(8) {
    animation-delay: 0.8s;
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .input-group-text {
    background-color: #f8f9fa;
    border-right: none;
    border-radius: 8px 0 0 8px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .input-group-text::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.5s ease;
    animation: shine 2s linear infinite;
  }
  @keyframes shine {
    0% {
      left: -100%;
    }

    50% {
      left: 100%;
    }

    100% {
      left: -100%;
    }
  }

  .input-group:hover .input-group-text::before {
    left: 100%;
  }

  .input-group:hover .input-group-text {
    background-color: #e9ecef;
    transform: scale(1);
  }

  .form-control {
    border-left: none;
    border-radius: 0 8px 8px 0;
    transition: all 0.3s ease;
    padding: 12px 15px;
  }

  .form-control:focus {
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
    border-color: transparent;
  }

  .form-control:hover {
    border-color: transparent;
    border-color: transparent;
    background-color: #fafbfc;
  }

  .input-group-text i {
    font-size: 2.3rem;
    transition: all 0.3s ease;
  }

  .input-group:hover .input-group-text i {
    /* transform: scale(1) rotate(0deg); */
    overflow: hidden;
    border: none;
    outline: none;
  }

  .btn-update {
    background: linear-gradient(135deg, #4361ee 0%, #3a56d4 100%);
    border: none;
    padding: 10px 25px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(67, 97, 238, 0.4);
    }

    70% {
      box-shadow: 0 0 0 10px rgba(67, 97, 238, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(67, 97, 238, 0);
    }
  }

  .btn-update::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
  }

  .btn-update:hover::before {
    left: 100%;
  }

  .btn-update:hover {
    background: linear-gradient(135deg, #3a56d4 0%, #2d47c7 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(67, 97, 238, 0.3);
    animation: none;
  }

  .btn-update:active {
    transform: translateY(0);
  }

  /* Enhanced social media icon colors with hover effects */
  .bxl-facebook {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-facebook {
    color:rgb(0, 110, 255);
    text-shadow: 0 0 10px rgba(24, 119, 242, 0.5);
  }

  .bxl-instagram {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-instagram {
    color:rgb(255, 6, 52);
    text-shadow: 0 0 10px rgba(228, 64, 95, 0.5);
  }

  .bxl-github {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-github {
    color:rgb(0, 0, 0);
    text-shadow: 0 0 10px rgba(51, 51, 51, 0.5);
  }

  .bxl-twitter {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-twitter {
    color:rgb(0, 157, 255);
    text-shadow: 0 0 10px rgba(29, 161, 242, 0.5);
  }

  .bxl-tiktok {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-tiktok {
    color: #ff0050;
    text-shadow: 0 0 10px rgba(255, 0, 80, 0.5);
  }

  .bxl-whatsapp {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-whatsapp {
    color:rgb(1, 251, 84);
    text-shadow: 0 0 10px rgba(37, 211, 102, 0.5);
  }

  .bxl-linkedin {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-linkedin {
    color:rgb(3, 122, 241);
    text-shadow: 0 0 10px rgba(10, 102, 194, 0.5);
  }

  .bxl-telegram {
    color: #000000;
    transition: all 0.3s ease;
  }

  .input-group:hover .bxl-telegram {
    color:rgb(5, 164, 244);
    text-shadow: 0 0 10px rgba(0, 136, 204, 0.5);
  }

  /* Row animation */
  .row {
    animation: fadeInUp 0.8s ease-out 0.3s both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Loading animation for inputs */
  .form-control::placeholder {
    transition: all 0.3s ease;
  }

  .form-control:focus::placeholder {
    opacity: 0.5;
    transform: translateX(5px);
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="social-card">
