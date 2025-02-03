document.addEventListener('DOMContentLoaded', function() {
  // Remove the problematic search box code
  // Add smooth scroll functionality
  document.querySelectorAll('nav a').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
          if(this.hash !== "") {
              e.preventDefault();
              const target = document.querySelector(this.hash);
              target.scrollIntoView({ behavior: 'smooth' });
          }
      });
  });

  // Scroll animations
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
          }
      });
  }, { threshold: 0.1 });

  document.querySelectorAll('[data-scroll]').forEach((element) => {
      observer.observe(element);
  });
});