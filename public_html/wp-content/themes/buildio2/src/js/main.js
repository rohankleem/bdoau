console.log("Main js code");


import Swiper from 'swiper/bundle';
//import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css/bundle';
import '../../dist/assets/vendor/swiper/swiper.scss';
import '../../dist/assets/vendor/swiper/swiper.scss';

// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
    var swiper = new Swiper('.js-swiper-course-hero',{
		//modules: [Navigation, Pagination],
		
      preloaderClass: 'custom-swiper-lazy-preloader',
      navigation: {
        nextEl: '.js-swiper-course-hero-button-next',
        prevEl: '.js-swiper-course-hero-button-prev',

      },
      slidesPerView: 1,
      loop: 1,
      freeMode: true,
      speed: 3000,
      autoplay: {
        delay: 200,
        disableOnInteraction: false,
      },
      breakpoints: {
        380: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        580: {
          slidesPerView: 3,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 15,
        },
      },
      on: {
        'imagesReady': function (swiper) {
          const preloader = swiper.el.querySelector('.js-swiper-course-hero-preloader')
          preloader.parentNode.removeChild(preloader)
        }
      }
    });
  })();
