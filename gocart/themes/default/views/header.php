<?php
ini_set("display_errors", 1);
//include_once REAL_PATH.'stuff/css/phpless/Less.php';
//
//$name = array(
//    'bootstrap' => REAL_PATH.'stuff/css/bootstrap/less/',
//    'carousel' => REAL_PATH.'stuff/css/bootstrap/less/',
//    'style' => REAL_PATH.'stuff/css/less/',
//);
//
//foreach ($name as $key => $value) {
//    $to_cache = array($value . $key . '.less' => '/');
//    Less_Cache::$cache_dir = REAL_PATH.'stuff/css/cache/';
//    $css_file_name = Less_Cache::Get($to_cache);
//    $file = file_get_contents(REAL_PATH."stuff/css/cache/" . $css_file_name);
//    file_put_contents(REAL_PATH."stuff/css/" . $key . ".css", $file);
//}
?>
<!DOCTYPE html>
<html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!--css-->
            <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL; ?>stuff/css/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL; ?>stuff/css/style.css">
            <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL; ?>stuff/css/carousel.css">
            <!--css END-->

            <!--js-->
            <script type="text/javascript" src="<?php echo SITE_URL; ?>stuff/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo SITE_URL; ?>stuff/js/bootstrap.js"></script>
            <!--js END-->
        </head>
        <body>
            <div id="wrap">
                <header>
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="index.php">
                            <div id="logo"></div>
                        </a>
                        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo SITE_URL;?>">Home</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Financial Products <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo SITE_URL;?>products-overview3">Overview</a></li>
                                                <li><a href="<?php echo SITE_URL;?>products-products">Our Financial Products</a></li>
                                                <li><a href="<?php echo SITE_URL;?>products-programs">Types of Programs</a></li>
                                                <li><a href="<?php echo SITE_URL;?>faq">FAQ </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Customers <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo SITE_URL;?>customers-for-you">Are We Right For You?</a></li>
                                                <li><a href="<?php echo SITE_URL;?>customers-transactions">Recent Transactions</a></li>
                                                <li><a href="<?php echo SITE_URL;?>customers-privacy">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo SITE_URL;?>about">Overview</a></li>
                                                <li><a href="<?php echo SITE_URL;?>careers">Careers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo SITE_URL;?>contact_us">Contact Us</a></li>
                                        <li><a href="<?php echo SITE_URL;?>step1">APPLY NOW<span class="apply-img float"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


