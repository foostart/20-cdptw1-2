 <?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
     $less->compileFile('./less/106.less', 'css/106.css');
    
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Title - 852</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">       
        <link href="<?php echo $url_path ?>/css/106.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $url_path ?>/css/mobile.css" rel="stylesheet">
        <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet">
        <link href="<?php echo $url_path ?>/css/animate.min.css" rel="stylesheet">
        <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/wow.min.js"></script>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <link href="<?php echo $url_path ?>/css/106.css" rel="stylesheet" type="text/css" /> 
    </head>
    
    <body>
         <?php include $dir_block.'/852-content.php'; ?>

        <!-- Bootstrap core JavaScript --> 
        <script src="js/main.js"></script> 
        <script src="js/jquery.bxslider.js"></script> 

    </body>
</html>



