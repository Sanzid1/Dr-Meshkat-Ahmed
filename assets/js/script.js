// assets/js/script.js
document.addEventListener('DOMContentLoaded', function() {
    const searchBox = document.createElement('input');
    searchBox.placeholder = "Search publications...";
    searchBox.classList.add('pub-search');
    const publicationsSection = document.querySelector('.publications');
    if (publicationsSection) {
        publicationsSection.prepend(searchBox);
    }

    searchBox.addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('.pub-row').forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
});
  
  // Add CV Download Button
  const cvButton = document.createElement('a');
  cvButton.className = 'cv-download';
  cvButton.href = 'path/to/cv.pdf';
  cvButton.download = 'Chaudhury-Meshkat-Ahmed-CV.pdf';
  cvButton.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
      <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
    </svg>
    Download Full CV
  `;
  document.body.appendChild(cvButton);
});
// Intersection Observer for scroll animations
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

// Smooth scroll for navigation
document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      target.scrollIntoView({ behavior: 'smooth' });
  });
});