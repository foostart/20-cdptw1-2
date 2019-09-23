<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-536">
    <div class="container mod">
        <div class="row">
            <div class="content">
                <!-- Main Side -->

                <div class="mosthot">
                    <div class=" vc_col-sm-4">
                        <div>
                            <div>
                                <div class="sidebar">
                                    <div class="widget tabsajax">
                                        <div class="title">Most hot</div>
                                        <div class="	re_filter_panel">

                                            <div class="tabs">
                                                <ul class="tabs-list">
                                                    <li class="active"><a href="#tab1">Best rated</a></li>
                                                    <li><a href="#tab2">Tab2</a></li>
                                                    <li><a href="#tab3">Tab3</a></li>
                                                </ul>

                                                <div id="tab1" class="tab active">

                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">1<span
                                                                    class="gradus_icon"></span></span> <a
                                                                href="#">LUMBABACK best sport bandage deal</a>

                                                            <span class="simple_price_count">
                                                                $107 </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                6 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">21<span
                                                                    class="gradus_icon"></span></span> <a
                                                                href="#">Calcium with Magnesium, Natural Orange
                                                                Flavor</a>

                                                            <span class="simple_price_count">
                                                                $15.36
                                                                <del>$19.95</del>
                                                            </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                6 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">20
                                                                <span class="gradus_icon">

                                                                </span>

                                                            </span> <a href="#">Apple Pectin, 700 mg</a>

                                                            <span class="simple_price_count">
                                                                $10.18 <del>$15.99</del> </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                6 months ago
                                                            </span>
                                                            <span><i class="fa fa-commenting"></i> 1
                                                            </span>
                                                        </div>

                                                    </article>
                                                </div>
                                                <div id="tab2" class="tab">
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">2<span
                                                                    class="gradus_icon"></span></span> <a href="#">BACK
                                                                YOGA best sport bandage deal</a>

                                                            <span class="simple_price_count">
                                                                $398 </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                7 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">201<span
                                                                    class="gradus_icon"></span></span> <a
                                                                href="#">Calcium with Magnesium, Natural Orange
                                                                Flavor</a>

                                                            <span class="simple_price_count">
                                                                $18.36
                                                                <del>$19.95</del>
                                                            </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                2 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">290
                                                                <span class="gradus_icon">

                                                                </span>

                                                            </span> <a href="#">Brid Pectin, 700 mg</a>

                                                            <span class="simple_price_count">
                                                                $13.18 <del>$15.99</del> </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                2 months ago
                                                            </span>
                                                            <span><i class="fa fa-commenting"></i> 1
                                                            </span>
                                                        </div>

                                                    </article>
                                                </div>
                                                <div id="tab3" class="tab">
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">3<span
                                                                    class="gradus_icon"></span></span> <a href="#">WHITE
                                                                best deal</a>

                                                            <span class="simple_price_count">
                                                                $127 </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                9 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">15<span
                                                                    class="gradus_icon"></span></span> <a
                                                                href="#">Calcium with, Natural
                                                                Flavor</a>

                                                            <span class="simple_price_count">
                                                                $11.36
                                                                <del>$16.95</del>
                                                            </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                8 months ago </span>
                                                            <span><i class="fa fa-commenting"></i> 6</span>
                                                        </div>

                                                    </article>
                                                    <article class="item-small-news" style="display: block;">
                                                        <h3 class="rie"><span class="temperatur">567
                                                                <span class="gradus_icon">

                                                                </span>

                                                            </span> <a href="#">YELLOW Pectin, 500 mg</a>

                                                            <span class="simple_price_count">
                                                                $8.18 <del>$17.99</del> </span>

                                                        </h3>
                                                        <div class="post-meta">
                                                            <span>
                                                                8 months ago
                                                            </span>
                                                            <span><i class="fa fa-commenting"></i> 1
                                                            </span>
                                                        </div>

                                                    </article>
                                                </div>

                                            </div>
                                            <div style="display: block;">
                                            </div>
                                        </div>
                                        <div class="widget ">
                                            <div>
                                                <div class="rehub_chimp ">
                                                    <h3 class="rie">GET THE BEST DEALS IN YOUR INBOX</h3>
                                                    <!-- Begin MailChimp Signup Form -->
                                                    <div id="mc_embed_signup1">
                                                        <form action="#" method="post" target="_blank">
                                                            <div>
                                                                <input type="email" value="" name="EMAIL" class="email"
                                                                    placeholder="Email address" required="">
                                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                <div style="position: absolute; left: -5000px;">
                                                                    <input type="text"
                                                                        name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b"
                                                                        tabindex="-1" value="">
                                                                </div>
                                                                <div class="clear">
                                                                    <input type="submit" value="Subscribe"
                                                                        name="subscribe" class="button">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!--End mc_embed_signup-->
                                                    <p>Don't worry we don't spam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget  widget">
                                            <div class="title">Active</div>
                                            <ul class="item-list">
                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Green Food">
                                                            <img src="images/1a.jpg" alt="" />
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Green Food</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 17 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Body Health">
                                                            <img src="images/2a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Body Health</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 18 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/3a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Bath &amp; Wash</a></div>
                                                        <div>
                                                            <span>
                                                                active 3 days, 20 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/4a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Sunshine</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/5a.jpg" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Tooth for tooth</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="widget ">
                                            <div>
                                                <div class="rehub_chimp ">
                                                    <h3 class="rie">GET THE BEST DEALS IN YOUR INBOX</h3>
                                                    <!-- Begin MailChimp Signup Form -->
                                                    <div id="mc_embed_signup2">
                                                        <form action="#" method="post" target="_blank">
                                                            <div>
                                                                <input type="email" value="" name="EMAIL" class="email"
                                                                    placeholder="email address" required="">
                                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                <div style="position: absolute; left: -5000px;">
                                                                    <input type="text"
                                                                        name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b"
                                                                        tabindex="-1" value="">
                                                                </div>
                                                                <div class="clear">
                                                                    <input type="submit" value="Subscribe"
                                                                        name="subscribe" class="button">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!--End mc_embed_signup-->
                                                    <p>Don't worry we don't spam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget widget">
                                            <div class="title">Groups</div>
                                            <div class="item-options">
                                                <a href="#">Newest</a>
                                                <span role="separator">|</span>
                                                <a href="#" class="selected">Active</a>
                                                <span role="separator">|</span>
                                                <a href="#">Popular</a>
                                            </div>

                                            <ul class="item-list">
                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Green Food">
                                                            <img src="images/1a.jpg" alt="" />
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Green Food</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 17 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Body Health">
                                                            <img src="images/2a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Body Health</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 18 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/3a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Bath &amp; Wash</a></div>
                                                        <div>
                                                            <span>
                                                                active 3 days, 20 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/4a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Sunshine</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/5a.jpg" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Tooth for tooth</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <input type="hidden" value="52a0d18451">
                                            <input type="hidden" name="_wp_http_referer" value="/">
                                            <input type="hidden" value="5">

                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="wpsm_recent_posts_list"
                                            data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;post_hot_count&quot;,&quot;no_found_rows&quot;:1}"
                                            data-template="simplepostlist"
                                            data-innerargs="{&quot;nometa&quot;:&quot;1&quot;}">
                                            <div class="item-small-news" style="display: block;">
                                                <h3 class="rie"><span class="temperatur">4<span
                                                            class="gradus_icon"></span></span> <a href="#">LUMBABACK
                                                        best  bandage deal</a>

                                                    <span class="simple_price_count">
                                                        $107 </span>

                                                </h3>
                                                <div class="post-meta">
                                                    <span>
                                                        6 months ago </span>
                                                    <span><i class="fa fa-commenting"></i> 6</span>
                                                </div>

                                            </div>
                                            <div class="item-small-news" style="display: block;">
                                                <h3 class="rie"><span class="temperatur">39<span
                                                            class="gradus_icon"></span></span> <a href="#"> with
                                                         Natural Orange
                                                        Flavor</a>

                                                    <span class="simple_price_count">
                                                        $15.36
                                                        <del>$19.95</del>
                                                    </span>

                                                </h3>
                                                <div class="post-meta">
                                                    <span>
                                                        6 months ago </span>
                                                    <span><i class="fa fa-commenting"></i> 6</span>
                                                </div>

                                            </div>
                                            <div class="item-small-news" style="display: block;">
                                                <h3 class="rie"><span class="temperatur">145
                                                        <span class="gradus_icon">

                                                        </span>

                                                    </span> <a href="#">Apple Pectin, 700 mg</a>

                                                    <span class="simple_price_count">
                                                        $10.18 <del>$15.99</del> </span>

                                                </h3>
                                                <div class="post-meta">
                                                    <span>
                                                        6 months ago
                                                    </span>
                                                    <span><i class="fa fa-commenting"></i> 1
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="widget ">
                                            <div>
                                                <div class="rehub_chimp ">
                                                    <h3 class="rie">GET THE BEST DEALS IN YOUR INBOX</h3>
                                                    <!-- Begin MailChimp Signup Form -->
                                                    <div id="mc_embed_signup3">
                                                        <form action="#" method="post" target="_blank">
                                                            <div>
                                                                <input type="email" value="" name="EMAIL" class="email"
                                                                    placeholder="email address" required="">
                                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                                <div style="position: absolute; left: -5000px;">
                                                                    <input type="text"
                                                                        name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b"
                                                                        tabindex="-1" value="">
                                                                </div>
                                                                <div class="clear">
                                                                    <input type="submit" value="Subscribe"
                                                                        name="subscribe" class="button">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!--End mc_embed_signup-->
                                                    <p>Don't worry we don't spam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget  widget">
                                            <div class="title">Groups</div>
                                            <div class="item-options">
                                                <a href="#">Newest</a>
                                                <span role="separator">|</span>
                                                <a href="#" class="selected">Active</a>
                                                <span role="separator">|</span>
                                                <a href="#">Popular</a>
                                            </div>

                                            <ul class="item-list">
                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Green Food">
                                                            <img src="images/1a.jpg" alt="" />
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Green Food</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 17 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#" title="Body Health">
                                                            <img src="images/2a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Body Health</a></div>
                                                        <div>
                                                            <span>
                                                                active 1 day, 18 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/3a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Bath &amp; Wash</a></div>
                                                        <div>
                                                            <span>
                                                                active 3 days, 20 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="even">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/4a.png" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Sunshine</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="odd">
                                                    <div class="item-avatar">
                                                        <a href="#">
                                                            <img src="images/5a.jpg" alt="" /></a>
                                                    </div>

                                                    <div class="item">
                                                        <div><a href="#">Tooth for tooth</a></div>
                                                        <div>
                                                            <span>
                                                                active 4 days, 15 hours ago
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <input type="hidden" value="52a0d18451">
                                            <input type="hidden" name="_wp_http_referer" value="/">
                                            <input type="hidden" value="5">

                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>