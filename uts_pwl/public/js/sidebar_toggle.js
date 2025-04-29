// sidebar.toggle.js
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const toggleButton = document.querySelector('.toggle-btn');
    const content = document.querySelector('.content');

    // Toggle sidebar
    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('active');
        content.classList.toggle('active');
    });
});
