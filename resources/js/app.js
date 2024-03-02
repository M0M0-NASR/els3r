import './bootstrap';


import Swiper from 'swiper/bundle';
import Chart from 'chart.js/auto';


const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        345: {
            slidesPerView: 1,
        },
        // when window width is <= 576px
        576: {
            slidesPerView: 1,
        },
        // when window width is <= 768px
        768: {
            slidesPerView: 2,
        },
        // when window width is <= 992px
        992: {
            slidesPerView: 3,
        },
    },
  });


  