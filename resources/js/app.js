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
  });


  