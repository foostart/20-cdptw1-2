<html>

    <head>
        <title>539 - Criteria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/677.less', 'css/677.css');
        ?>

        <link href="css/677.css" rel="stylesheet" type="text/css" />
        <script src="js/newjavascript.js"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>


        <div class="tem-677">
            <div class="container mod">
                <div class="row">


                    <nav class="navbar navbar-default header-tops" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only"> Toggle navigation</span>
                                <span class="icon-bar" aria-hidden="true"> </span>
                                <span class="icon-bar" aria-hidden="true"></span>
                                <span class="icon-bar" aria-hidden="true"></span >
                            </button>
                            <a class="navbar-brand" href="#"> </a >
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-header" >
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYOUT EXAMPLES <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
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

                            <ul class="nav navbar-nav navbar-right">
                                <li style=" border: 0;"><a href="#"><span class="fa fa-search" aria-hidden="true"></span></a></li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->

                    </nav>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>


        </div>


    </body >
</html>
