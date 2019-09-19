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
