<?php
include_once("./backend_layouts/header.php");
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

  a {
    text-decoration: none;
    color: inherit;
    font-weight: 500;
  }

  body,
  html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
    /* Prevents scrollbars from appearing due to animations */
    /* background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 50%, #f3e5f5 100%); */
    background: linear-gradient(135deg, #fff1eb 0%, #ace0f9 100%);
  }

  #home-section {
    height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    /* --- YOU CAN CHANGE THE BACKGROUND GRADIENT HERE --- */
    /* background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%); */
    /* Example: Cooler, Modern Gradient */
    /* background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); */
    /* Original Soft Gradient */
    /* Example: Warmer Gradient */
    color: #333;
    text-align: center;
    overflow: hidden;
    /* Crucial for containing absolute positioned elements */
  }

  .background-shapes div {
    position: absolute;
    border-radius: 50%;
    opacity: 1;
    /* Softer shapes */
  }

  .background-shapes div:nth-child(1) {
    width: 200px;
    height: 200px;
    background: rgba(255, 0, 0, 0.3);
    /* Using RGBA for better blending with various backgrounds */
    top: 10%;
    left: 15%;
    animation: floatShape 15s infinite alternate ease-in-out;
  }

  .background-shapes div:nth-child(2) {
    width: 150px;
    height: 150px;
    background: rgba(255, 241, 215, 0.25);
    bottom: 15%;
    right: 20%;
    animation: floatShape 20s infinite alternate-reverse ease-in-out;
  }

  .background-shapes div:nth-child(3) {
    width: 100px;
    height: 100px;
    background: rgb(0, 229, 255);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: floatShapePulse 18s infinite ease-in-out;
  }

  @keyframes floatShape {
    0% {
      transform: translateY(0px) translateX(0px) scale(1);
      opacity: 0.19;
    }

    50% {
      opacity: 0.15;
    }

    100% {
      transform: translateY(-80px) translateX(40px) scale(1.1);
      opacity: 0.30;
    }
  }

  @keyframes floatShapePulse {
    0% {
      transform: translate(-50%, -50%) scale(0.9);
      opacity: 0.08;
    }

    50% {
      transform: translate(-50%, -50%) scale(1.05);
      opacity: 0.2;
    }

    100% {
      transform: translate(-50%, -50%) scale(0.9);
      opacity: 0.08;
    }
  }

  .welcome-text {
    font-size: 5rem;
    /* Large text */
    font-weight: 700;
    color: #2c3e50;
    /* Darker, elegant color - adjust if background is dark */
    margin-bottom: 15px;
    animation: slideInFromTop 1.5s ease-out forwards;
    opacity: 0;
  }

  @keyframes slideInFromTop {
    0% {
      transform: translateY(-80px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .subtitle-text {
    font-size: 1.5rem;
    font-weight: 300;
    color: #57606f;
    /* Softer color for subtitle - adjust if background is dark */
    min-height: 2.2rem;
    /* To prevent layout shift during typing */
  }

  .typing-cursor {
    display: inline-block;
    width: 2px;
    height: 1.5rem;
    /* Match subtitle font size */
    background-color: #57606f;
    /* Adjust if background is dark */
    animation: blinkCursor 0.7s infinite;
    margin-left: 3px;
    vertical-align: middle;
  }

  @keyframes blinkCursor {

    0%,
    100% {
      opacity: 1;
    }

    50% {
      opacity: 0;
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .welcome-text {
      font-size: 3.5rem;
    }

    .subtitle-text {
      font-size: 1.2rem;
      min-height: 1.8rem;
    }

    .typing-cursor {
      height: 1.2rem;
    }

    .background-shapes div:nth-child(1) {
      width: 150px;
      height: 150px;
    }

    .background-shapes div:nth-child(2) {
      width: 100px;
      height: 100px;
    }

    .background-shapes div:nth-child(3) {
      width: 70px;
      height: 70px;
    }
  }

  @media (max-width: 576px) {
    .welcome-text {
      font-size: 2.8rem;
    }

    .subtitle-text {
      font-size: 1rem;
      min-height: 1.5rem;
    }

    .typing-cursor {
      height: 1rem;
    }
  }

  /* Particles */
  .particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  .particle {
    position: absolute;
    background-color: rgba(43, 46, 245, 0.64);
    border-radius: 50%;
    animation: float-particle 15s infinite linear;
  }

  /* Animations */
  @keyframes float {

    0%,
    100% {
      transform: translateY(0) translateX(0);
    }

    25% {
      transform: translateY(-20px) translateX(10px);
    }

    50% {
      transform: translateY(10px) translateX(-15px);
    }

    75% {
      transform: translateY(-10px) translateX(-5px);
    }
  }

  @keyframes float-particle {
    0% {
      transform: translateY(0) translateX(0);
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    90% {
      opacity: 1;
    }

    100% {
      transform: translateY(-500px) translateX(100px);
      opacity: 0;
    }
  }
  </style>
</head>

<body>
  <div class="particles" id="particles"></div>
  <section id="home-section">
    <div class="background-shapes">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="welcome-text">Welcome</h1>
          <p class="subtitle-text"><span id="typed-subtitle"></span><span class="typing-cursor"></span></p>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Create particles
    const particlesContainer = document.getElementById('particles');
    const particleCount = 30;

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');

      // Random properties
      const size = Math.random() * 6 + 2;
      const posX = Math.random() * 100;
      const delay = Math.random() * 15;
      const duration = Math.random() * 10 + 10;
      const opacity = Math.random() * 0.4 + 0.1;

      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;
      particle.style.left = `${posX}%`;
      particle.style.bottom = `-${size}px`;
      particle.style.animationDelay = `${delay}s`;
      particle.style.animationDuration = `${duration}s`;
      particle.style.opacity = opacity;

      particlesContainer.appendChild(particle);
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    const subtitleElement = document.getElementById('typed-subtitle');
    const cursorElement = document.querySelector('.typing-cursor');
    const textToType = "Glad to see you back!";
    let index = 0;
    const typingSpeed = 100; // Milliseconds per character

    function typeEffect() {
      if (index < textToType.length) {
        subtitleElement.textContent += textToType.charAt(index);
        index++;
        setTimeout(typeEffect, typingSpeed);
      } else {
        if (cursorElement) {
          // Cursor keeps blinking via CSS animation
        }
      }
    }

    // Start typing after a short delay to allow "Welcome" animation to progress
    setTimeout(typeEffect, 1500); // Adjust delay based on welcome animation duration

    // Optional: Actions after typing is complete
    // setTimeout(() => {
    //     if (index >= textToType.length && cursorElement) {
    //          // For example, to stop the cursor blinking and hide it:
    //          // cursorElement.style.animation = 'none';
    //          // cursorElement.style.opacity = '0';
    //     }
    // }, 1500 + textToType.length * typingSpeed + 1000); // Delay + typing time + pause
  });
  </script>
</body>

</html>


<?php
include_once("./backend_layouts/footer.php");
?>