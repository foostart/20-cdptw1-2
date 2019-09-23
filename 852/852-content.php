 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?> 
            <div class="container">
                <div class="inner-page">
                    <section class="welcome-wrap ">
                        <div class="recent-vehicles-wrap">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles">
                                    <h5><b>Recent Vehicles</b></h5>
                                    <p>Browse through the vast
                                        selection of vehicles that
                                        have recently been added
                                        to our inventory.</p>
                                    <div class="arrow3 clearfix" id="slideControls3"><span></span><span></span></div>
                                </div>
                                <div class="col-md-10 col-sm-8">
                                    <div class="carasouel-slider3">
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/1.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2012 Porsche Cayenne GTS</strong></h6>
                                                    <h6>1 Owner, 26,273 miles</h6>
                                                    <h5>$ 102,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/2.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2009 Porsche Boxster</strong></h6>
                                                    <h6>New Tires, 26,273 miles</h6>
                                                    <h5>$ 34,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/3.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2013 Porsche Panamera S</strong></h6>
                                                    <h6>Demonstrator, 7,088 miles</h6>
                                                    <h5>$ 63,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/4.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2010 Porsche Carrera 4S</strong></h6>
                                                    <h6>AWD, 21,900 miles</h6>
                                                    <h5>$ 73,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/5.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2012 Porsche Carrera S</strong></h6>
                                                    <h6>Convertible, 22,158 miles</h6>
                                                    <h5>$ 56,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/6.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2013 Porsche Panamera</strong></h6>
                                                    <h6>1 Owner, 3,914 miles</h6>
                                                    <h5>$ 94,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/7.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2014 Porsche Cayenne GTS</strong></h6>
                                                    <h6>1 Owner, 7 miles</h6>
                                                    <h5>$ 114,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/8.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2014 Porsche GTS</strong></h6>
                                                    <h6>1 Owner, 5 miles</h6>
                                                    <h5>$ 99,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="car-block">
                                                <div class="img-flex"> <a href="#"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./images/9.jpg" alt="" class="img-responsive"> </div>
                                                <div class="car-block-bottom">
                                                    <h6><strong>2009 Porsche Carrera 4S</strong></h6>
                                                    <h6>1 Owner, 114,239 miles</h6>
                                                    <h5>$ 39,995</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->

                        <div class="car-rate-block clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12  scroll_effect bounceInLeft">
                                <div class="small-block clearfix">
                                    <h4 class="margin-bottom-25">Financing.</h4>
                                    <a href="#"><span class="align-center"><i class="fa fa-tag fa-7x"></i></span></a> </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 scroll_effect bounceInLeft" data-wow-delay=".2s">
                                <div class="small-block clearfix">
                                    <h4 class="margin-bottom-25 ">Warranty.</h4>
                                    <a href="#"><span class="align-center"><i class="fa fa-cogs fa-7x"></i></span></a> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hours_operation">
                                <div class="small-block clearfix">
                                    <h4 class="margin-bottom-25 ">What are our Hours of Operation?</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  scroll_effect bounceInUp" data-wow-delay=".4s">
                                            <table class="table table-bordered no-border font-13px">
                                                <thead>
                                                    <tr>
                                                        <td colspan="2"><span class="footer-end"><strong>Sales Department</strong></span></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mon:</td>
                                                        <td>8:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tue:</td>
                                                        <td>8:00am - 9:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wed:</td>
                                                        <td>8:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu:</td>
                                                        <td>8:00am - 9:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fri:</td>
                                                        <td>8:00am - 6:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sat:</td>
                                                        <td>9:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sun:</td>
                                                        <td>Closed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  scroll_effect bounceInUp" data-wow-delay=".4s">
                                            <table class="table table-bordered no-border font-13px">
                                                <thead>
                                                    <tr>
                                                        <td colspan="2"><span class="footer-end"><strong>Service Department</strong></span></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mon:</td>
                                                        <td>8:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tue:</td>
                                                        <td>8:00am - 9:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wed:</td>
                                                        <td>8:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu:</td>
                                                        <td>8:00am - 9:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fri:</td>
                                                        <td>8:00am - 6:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sat:</td>
                                                        <td>9:00am - 5:00pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sun:</td>
                                                        <td>Closed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12   scroll_effect bounceInRight" data-wow-delay=".2s">
                                <div class="small-block clearfix">
                                    <h4 class="margin-bottom-25 ">About Us.</h4>
                                    <a href="#"><span class="align-center"><i class="fa fa-users fa-7x"></i></span></a> </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12   scroll_effect bounceInRight">
                                <div class="small-block clearfix">
                                    <h4 class="margin-bottom-25 ">Find Us.</h4>
                                    <a href="#"><span class="align-center"><i class="fa fa-map-marker fa-7x"></i></span></a> </div>
                            </div>
                        </div>
                    </section>
                    <!--welcome-wrap ends-->

                </div>
            </div>
          <!-- Swiper JS -->
  <script src="../js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    

     var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>