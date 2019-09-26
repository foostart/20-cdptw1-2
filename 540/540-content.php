<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-540">
    <div class="container mod">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper wraslide">
                                    <div class="swiper-slide slides">
                                            <div class="image-slider">
                                                <img src="images/slider-show-1.jpg" alt="hinh1" class="img-responsive">
                                            </div>
                                            <div class="caption-slider">
                                                <div class="r-part-car">
                                                    <i class="fa fa-fire"></i>
                                                    <span>136 <span
                                                            class=" fa fa-heart"></span></span>
                                                    <h2><a>Mma-barley-grass-juice/agma, Barley Grass </a></h2>
                                                    
                                                    <div>
                                                        <span class="cat_link_meta">
                                                            <a href="#" class="cat">Green Food</a>
                                                        </span>
                                                    </div>
                                                   
                                                    <span class="simple_price_count">
                                                        $39.60
                                                        <del>$54.99</del>
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide slides">
                                            <div class="image-slider">
                                                <img src="images/13.jpg" alt="hinh1" class="img-responsive">
                                            </div>
                                            <div class="caption-slider">
                                                <div class="r-part-car">
                                                    <i class="fa fa-fire"></i>
                                                    <span>137 <span
                                                            class=" fa fa-heart"></span></span>
                                                    <h2><a>Mma-barley-grass-juice/agma, Barley Grass </a></h2>
                                                    
                                                    <div>
                                                        <span class="cat_link_meta">
                                                            <a href="#" class="cat">Green Food</a>
                                                        </span>
                                                    </div>
                                                   
                                                    <span class="simple_price_count">
                                                        $49.60
                                                        <del>$64.99</del>
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide slides">
                                            <div class="image-slider">
                                                <img src="images/7.jpg" alt="hinh1" class="img-responsive">
                                            </div>
                                            <div class="caption-slider">
                                                <div class="r-part-car">
                                                    <i class="fa fa-fire"></i>
                                                    <span>138 <span
                                                            class=" fa fa-heart"></span></span>
                                                    <h2><a>Mma-barley-grass-juice/agma, Barley Grass </a></h2>
                                                    
                                                    <div>
                                                        <span class="cat_link_meta">
                                                            <a href="#" class="cat">Green Food</a>
                                                        </span>
                                                    </div>
                                                   
                                                    <span class="simple_price_count">
                                                        $59.60
                                                        <del>$74.99</del>
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                </div>                                    
                            </div>                                
                            </div>  
                        </div> 
                    </div>  
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>                       
</div>