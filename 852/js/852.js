jQuery(document).ready( function($){

   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 23,
      loop: true,
    	navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
            480: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,

            },
            992: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 23,
            },
        }
    });
});
