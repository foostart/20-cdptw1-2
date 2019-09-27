<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-549">
    <div class="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12 header_contai">
                        <p>Wrlcover to virut over writer <a href="#"> Nark(riday 50% al) erlire size + Shore</a></p>
                    </div>
                    <div class="col-md-7 col-xs-12  header_contai2">
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Fod & Store</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Account</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Frewcrocring </a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Emg </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-menu" id="my-menu">
            <div class="container">
                <div class="col-md-2 col-xs-12 logo">
                 <h1><a href="#">a</a>neue<a href="#">.</a></h1>
                </div>
                <div class="col-md-10 col-xs-12 menu-content">
                     <nav class="navbar-right">
                        <ul id="myTopnav" class="topnav">
                            <li class="toggle-menu">
                                <a class="icon" href="javascript:void(0);"  onclick="myFunction()">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li><a class="home" href="#">HOME</a></li>
                            <li><a href="#">SHOP</a></li>
                            <li><a href="#">WOMEN'S</a></li>
                            <li><a href="#">MEN'S</a></li>
                            <li><a href="#">PACES</a></li>
                            <li><a href="#">FEATURES</a></li>
                            <li><a href="#">BLOG</a></li>
                        </ul> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="project">
        <section id="demos">
            <div class="row">
                <div class="col-md-12 columns">
                    <div class="swiper-container slider-swip-1">
                        <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="images/bg-1.jpg" alt=""/></div>
                              <div class="swiper-slide"><img src="images/bg-2.jpg" alt=""/></div>
                              <div class="swiper-slide"><img src="images/bg-3.jpg" alt=""/></div>
                               <div class="swiper-slide"><img src="images/bg-4.jpg" alt=""/></div>
                                <div class="swiper-slide"><img src="images/bg-5.jpg" alt=""/></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>   
            </div>
        </section>
    </div>
    <hr>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d1">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h3 class="title-small br-bottom-center">MEMBER SAFE SHOPPING</h3>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi? Beatae cumque maiores.</p>
                </div>
                <div class="col-md-4 d1">
                   <i class="fa fa-cc-visa" aria-hidden="true"></i>
                  <h3 class="title-small br-bottom-center">MEMBER SAFE SHOPPING</h3>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi? Beatae cumque maiores.</p>
                </div>
                <div class="col-md-4 d1">
                    <i class="fa fa-cc-jcb" aria-hidden="true"></i>
                    <h3 class="title-small br-bottom-center">MEMBER SAFE SHOPPING</h3>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi? Beatae cumque maiores.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
           <h2>DEAL OF THE DAY</h2>
        </div>
    </div>
    <div class="content2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 columns">
                    <div class="swiper-container slider-swip-2">
                        <div class="swiper-wrapper" >
                            <div class="swiper-slide">
                                <img src="images/mp1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/mp2.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/mp3.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/mp2.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                         <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
