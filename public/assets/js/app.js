import './bootstrap';


import Swiper from 'swiper/swiper-bundle';

import 'swiper/css';


// Additional Swiper components or styles can be imported if needed
// import 'swiper/swiper-bundle.min.css';

// Initialize Swiper
const mySwiper = new Swiper('.swiper-container', {
    // Swiper configuration options
});







document.addEventListener('DOMContentLoaded', function () {
    console.log('DOMContentLoaded event fired');

    const mySwiper = new Swiper('.swiper-container', {
        // Swiper configuration options
    });

    console.log('Swiper initialized');
});
