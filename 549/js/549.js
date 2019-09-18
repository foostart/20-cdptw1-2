$(document).ready(function() {
	var swiper = new Swiper('.slider-swip-1', {
		effect: 'cube',
		grabCursor: true,
		loop: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		cubeEffect: {
			shadow: true,
			slideShadows: true,
			shadowOffset: 20,
			shadowScale: 0.94,
		},
		pagination: {
			el: '.swiper-pagination',
		},
	});
	var swiper = new Swiper('.slider-swip-2', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      loop: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
});

$(document).on('scroll' , function() {
	window.onscroll = function() {scrollMenu()};
	var header = document.getElementById("my-menu");
	var sticky = header.offsetTop;

	function scrollMenu() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}
});

function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";

	} else {
		x.className = "topnav";
	}
}