jQuery(document).ready( function($){

    if($('.carasouel-slider3').length){
        $('.carasouel-slider3').bxSlider({
            slideWidth: 170,
            minSlides: 1,
            maxSlides: 6,
            slideMargin: 30,
            infiniteLoop:false,
            pager:false,
            prevSelector:jQuery('#slideControls3>.prev-btn'),
            nextSelector:jQuery('#slideControls3>.next-btn'),
        });
    }
});
   // 2
            var slideIndex;
            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("img-flex");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            } 
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
 
            slides[slideIndex].style.display = "block";  
            dots[slideIndex].className += " active";

            slideIndex++;
            if (slideIndex > slides.length - 1) {
            slideIndex = 0
            }    
            setTimeout(showSlides, 2000);
        }
        showSlides(slideIndex = 0);
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }