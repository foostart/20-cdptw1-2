
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="tem-677">
    <div class="container mod">
        <div class="row">
            <nav class="navbar navbar-default header-tops" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"> Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span >
                    </button>
                    <a class="navbar-brand img-navs" href="#"><img src="./images/logo1.png" class="responsive"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-header" >
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYOUT EXAMPLES <b class="caret"></b></a>
                            <ul class="dropdown-menu menu-hide">
                                <li><a href="#">List Home Page</a></li>
                                <li><a href="#">Gird Home Page</a></li>
                                <li><a href="#">Full Width Example</a></li>
                            </ul>
                        </li>
                        <li><a href="#">STORE PAGE</a></li>
                        <li><a href="#">GREEN FOOD</a></li>
                        <li><a href="#">BABY</a></li>
                        <li><a href="#">BODY</a></li>
                        <li><a href="#">FACE</a></li>
                        <li><a href="#">ORAL CARE</a></li>
                        <li><a href="#">YOUR FAVORITES</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-hid">
                        <li style=" border: 0;"><a href="#"><span class="fa fa-search"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
            <p class="axtos">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

