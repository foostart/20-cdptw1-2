<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container type-540">
        <div class="swiper-container">
            <div class="swiper-wrapper wraslide">
                <div class="swiper-slide slides">
                    <div class="container">
                        <div class="row">
                             <div class="col-lg-6 col-md-12 image-slider">
                                <img src="images/15.jpg" alt="" class="img-responsive img-fruit">
                            </div>
                            <div class="col-lg-6 col-md-12 caption-slider">
                                <div class="r-part-car">
                                    <i class="fa fa-fire"></i>
                                    <span>135 <span
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
                    </div>
                </div>
                <div class="swiper-slide slides">
                    <div class="container">
                        <div class="row">
                             <div class="col-lg-6 col-md-12 image-slider">
                                <img src="images/16.jpg" alt="" class="img-responsive img-fruit">
                            </div>
                            <div class="col-lg-6 col-md-12 caption-slider">
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
                                        $49.60
                                        <del>$64.99</del>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slides">
                    <div class="container">
                        <div class="row">
                             <div class="col-lg-6 col-md-12 image-slider">
                                <img src="images/10.jpg" alt="" class="img-responsive img-fruit">
                            </div>
                            <div class="col-lg-6 col-md-12 caption-slider">
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
                    </div>
                </div>
                <div class="swiper-slide slides">
                    <div class="container">
                        <div class="row">
                             <div class="col-lg-6 col-md-12 image-slider">
                                <img src="images/17.jpg" alt="" class="img-responsive img-fruit">
                            </div>
                            <div class="col-lg-6 col-md-12 caption-slider">
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
                                        $49.60
                                        <del>$64.99</del>
                                    </span>
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