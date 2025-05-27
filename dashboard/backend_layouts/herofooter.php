</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
const Toast = Swal.mixin({
  toast: true,
  position: "bottom-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});

// File upload functionality
// document.getElementById('featured-image').addEventListener('change', function (e) {
//   const file = e.target.files[0];
//   const container = e.target.closest('.file-upload-container');
//   const content = container.querySelector('.file-upload-content');

//   if (file) {
//     content.innerHTML = `
//                 <div class="file-upload-icon">
//                     <i class="fas fa-check-circle" style="color: #10B981;"></i>
//                 </div>
//                 <div class="file-upload-text" style="color: #10B981;">File uploaded successfully</div>
//                 <div class="file-upload-subtext">${file.name}</div>
//             `;
//   }
// });


// Add fade-in animation on scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(20px)';
  el.style.transition = 'all 0.6s ease';
  observer.observe(el);
});
</script>
</body>

</html>