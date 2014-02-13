<?php
ini_set("display_errors", 1);
include_once 'phpless/Less.php';

$name = array(
    'bootstrap' => 'bootstrap/less/',
    'carousel' => 'bootstrap/less/',
    'style' => 'less/',
);

foreach ($name as $key => $value) {
    $to_cache = array($value . $key . '.less' => '/');
    Less_Cache::$cache_dir = 'css/cache/';
    $css_file_name = Less_Cache::Get($to_cache);
    $file = file_get_contents("css/cache/" . $css_file_name);
    file_put_contents("css/" . $key . ".css", $file);
}
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
            <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="css/style.css">
            <link type="text/css" rel="stylesheet" href="css/carousel.css">
            <!--css END-->

            <!--js-->
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
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
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Financial Products <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="products-overview.php">Overview</a></li>
                                                <li><a href="products-products.php">Our Financial Products</a></li>
                                                <li><a href="products-programs.php">Types of Programs</a></li>
                                                <li><a href="products-faq.php">FAQ </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Customers <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="customers-for-you.php">Are We Right For You?</a></li>
                                                <li><a href="customers-transactions.php">Recent Transactions</a></li>
                                                <li><a href="customers-privacy.php">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.php">Overview</a></li>
                                                <li><a href="about-careers.php">Careers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="step-1.php">APPLY NOW<span class="apply-img float"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


