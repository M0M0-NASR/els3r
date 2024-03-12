import './bootstrap';


import Swiper from 'swiper/bundle';
import Chart from 'chart.js/auto';


const sectionSwiper = new Swiper(".section .mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        400: {
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


const productsSwiper = new Swiper(".products .mySwiper", {
    slidesPerView: 3,
    grid: {
      rows: 2,
    },
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

  

// for search modal
const myInput = document.getElementById('searchInput')
const searchInput = document.getElementById('myModal')

myInput.addEventListener('focus' , (e)=>
{
  e.preventDefault();
});


