// assets/js/script.js
document.addEventListener('DOMContentLoaded', function() {
    const searchBox = document.createElement('input');
    searchBox.placeholder = "Search publications...";
    searchBox.classList.add('pub-search');
    document.querySelector('.publications').prepend(searchBox);

    searchBox.addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('.pub-row').forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
    });
});