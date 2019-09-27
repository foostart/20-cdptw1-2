jQuery(document).ready( function($){

   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true,
    	navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    });
});
