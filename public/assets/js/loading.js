// scripts.js

// Show loading spinner on page load
document.addEventListener('DOMContentLoaded', function () {
    showLoadingSpinner();
});

// Hide loading spinner when the entire page (including images) has loaded
window.addEventListener('load', function () {
    hideLoadingSpinner();
});

// Hide loading spinner when transitioning between pages (adjust based on your routing/SPA setup)
document.addEventListener('transitionstart', function () {
    showLoadingSpinner();
});

document.addEventListener('transitionend', function () {
    hideLoadingSpinner();
});

// Function to show loading spinner
function showLoadingSpinner() {
    document.querySelector('.loading-container').style.display = 'flex';
}

// Function to hide loading spinner
function hideLoadingSpinner() {
    document.querySelector('.loading-container').style.display = 'none';
}
