
<?php 
session_start();
include('userlocation.php');
include('connection.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <!-- Stylesheets
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="./theme/style.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="./theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!-- Document Title
        ============================================= -->
        <title>Home</title>       
        <style>
            #header-wrap, #header {
                height: 60px;
            }
            .dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark) #logo, #header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) #logo {
                border-right-color: transparent;
            }
            .dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark), #header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) {
                border-bottom-color: transparent;
            }
            .slider-caption h2 {
                font-size: 20px;
                text-transform: inherit;
            }
            #header.transparent-header.full-header #header-wrap {
                height: 60px;
                border-bottom: transparent;
            }
            #logo img {
                height: 40px;
            }
            #top-cart {
                margin: 14px 0px 40px 15px;
            }
            #top-cart a {

                color: #fff;
            }
            #primary-menu ul li > a {
                padding: 20px 15px;
                color: #fff;
            }
            #primary-menu {
                float: left;
            }
            #header.sticky-header #header-wrap {
                background: #0c297e;
            }
            #header.sticky-header:not(.static-sticky) #top-cart {
                margin-top: 14px !important;
            }
            #header.sticky-header:not(.static-sticky):not(.sticky-style-2):not(.sticky-style-3) #logo img {
                height: 40px;
            }
            .dark .slider-caption h2 {
                color: #fff;
            }
            .slider-text {
                position: relative;
                max-width: 800px;
                text-align: center;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: 151px;
                color: #fff;
            }
            .dark h2 {
                color: #fff
            }
            #header.transparent-header.full-header #logo {
                border-right: 0px solid;
            }
            #header.full-header #logo {
                border-right: 0px solid;
            }
            @media (min-width:1200px){.col-lg-15{width:20%;float:left}}
            .team-title {
                padding-top: 0px;
            }
            .team-desc {
                text-align: left;
            }
            .team-desc.team-desc-bg {
                box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px;
                padding: 10px;
            }
            .team-desc:hover {
                border-color: #0c297e;
            }
            .team-title span {
                font-family: Bloomfield, "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: rgb(153, 153, 153);
                font-style: inherit;
            }
            .team-desc-bg {
                height: 242px;
            }
            .team-title h4 {
                text-transform: inherit;
            }
            /***   Footer Styling   ***/
            #footer {
                border-top: 0px;
            }
            #footer.dark {
                background-color: #fff;
            }
            .dark #copyrights {
                border-top: 1px solid rgb(153, 153, 153);
                background-color: #fff;
            }
            #copyrights {
                padding: 12px;
            }
            .dark .widget h4 {
                color: rgb(51, 51, 51);
            }
            .dark .widget_links li a {
                color: rgb(54, 0, 96);
            }
            .dark .widget_links li a:hover {
                color: #1ABC9C;
            }
            .widget > h4 {
                text-transform: inherit;
            }
            .dark .footer-widgets-wrap a {
                color: black;
            }
            .dark .footer-widgets-wrap a:hover {
                color: black;
            }
            .dark .spost .entry-title h4 a {
                color: rgb(54, 0, 96);
            }
            .dark .spost .entry-title h4 a:hover {
                color: #1ABC9C;
            }
            #copyrights .col_half {
                color: black;
            }
            .dark #copyrights {
                text-shadow: 0px 0px 0px rgba(0,0,0,0.1);
            }
            /***   End   ***/
            /***   Customise 5 column   ***/
            .col-lg-15,.col-md-15,.col-sm-15,.col-xs-15 {
                width:50%;
                position:relative;
                min-height:1px;
                padding-right:10px;
                padding-left:10px
            }
            @media (min-width:480px){
                .col-xs-15 {
                    width:50%;
                    float:left
                }
            }
            @media (min-width:768px){
                .col-sm-15 {
                    width:20%;
                    float:left
                }
            }
            @media (min-width:992px){
                .col-md-15{
                    width:20%;
                    float:left
                }
            }
            @media (min-width:1200px){
                .col-lg-15{
                    width:20%;
                    float:left
                }
            }
            /***   Slider Styling   ***/
            .SliderImg
            {
                height: 140px;
            }
            #mainSlider .carousel-control.left
            {
                background-image: none;
                border-top-right-radius: 3px;
                border-bottom-right-radius: 3px;
                left: 7px;
            }
            #mainSlider .carousel-control:hover.left 
            {
                background-color: #556273;
                color: #fff;
            }
            #mainSlider .carousel-control.right 
            {
                border-top-left-radius: 3px;
                border-bottom-left-radius: 3px;
                right: 7px;
            }
            #mainSlider .carousel-control:hover.right 
            {
                background-color: #556273;
                color: #fff;
            }
            #mainSlider .carousel-control 
            {
                background-color: #fff;
                height: 28px;
                opacity: 1;
                padding-left: 5px;
                padding-top: 0px;
                padding-right: 5px;
                text-shadow: none;
                top: 43%;
                width: 25px;
                color: #999;
            }
            .carousel-control.left
            {
                background-repeat: repeat-x;
            }
            .fa 
            {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: inherit;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
            }
            .carousel-control
            {
                text-align: center;
            }
            .carousel-inner.carousel-latest-news
            {
                height: 140px;
            }		
            .carousel-indicators {
                margin-bottom: 0px;
            }
            .MultiStoryModule-overlay {
                margin-left: 20px;
                width: 89%;
                height: 144px;
                margin-top: -74px;
                padding: 32px 38px 24px;
                background: #fff;
                border-bottom: 4px solid #a0b5e8;
            }
            #footer .footer-widgets-wrap {
                padding: 0px 0px 60px 0px;
            }

            .differnet-text.text-center a{
                color:white;
                font-size: 17px;
                margin-left: 35px;
            }
            .differnet-text.text-center a:hover{
                color:white;
            }
            #slider-arrow-right:hover {
                background: transparent;
            }
            #top-cart a {
                font-size: 16px;
            }
            #slider-arrow-left i {
                font-size: 38px;
            }
            #slider-arrow-right i {
                font-size: 38px;
            }
        </style>
    </head>
    <body class="stretched">
        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <!-- Header
            ============================================= -->
            <header id="header" class="transparent-header full-header" data-sticky-class="not-dark" style="background: #0c297e">
                <div id="header-wrap">
                    <div class="container-fluid clearfix" style="height: 60px">
                        <div class="col-lg-1 col-md-1">
                            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                            <!-- Logo
                            ============================================= -->
                            <div id="logo" style="padding:12px 15px 0px 0px">
                                <h3 style="color: #fff">Joy</h3>
                            </div><!-- #logo end -->
                        </div>
                        <div class="col-lg-8 col-md-8 col-lg-offset-1">
                            <div class="differnet-text text-center" style="margin-top: 18px">
                                <a href="./html/fashion.php">Fashion</a>
                                <a href="./html/healthandbeauty.php">Health & Beauty</a>
                                <a href="./html/electronics.php">Electronics</a>
                                <a href="./html/groceries.php">Groceries</a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="top-cart" style="min-width: 48px;max-width: 48px">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 13px">
                                        <a href="#" id="top-cart-trigger" style="font-size: 10px">Cart</a>
                                    </div>
                                </div>
                                <!--                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="../theme/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">Blue Round-Neck Tshirt</a>
                                                <span class="top-cart-item-price">$19.99</span>
                                                <span class="top-cart-item-quantity">x 2</span>
                                            </div>
                                        </div>
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="../theme/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">Light Blue Denim Dress</a>
                                                <span class="top-cart-item-price">$24.99</span>
                                                <span class="top-cart-item-quantity">x 3</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action clearfix">
                                        <span class="fleft top-checkout-price">$114.95</span>
                                        <button class="button button-3d button-small nomargin fright">View Cart</button>
                                    </div>
                                </div>-->
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="top-cart" style="min-width: 48px;max-width: 48px">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" id="top-cart-trigger" style="float: right"><i class="icon-user"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right: 24px">
                                        <a href="#" id="top-cart-trigger" style="font-size: 10px" class="pull-right">Account</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="top-cart" style="min-width: 48px;max-width: 48px">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" id="top-cart-trigger" class="" style="float: right"><i class="icon-search"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right: 22px;">
                                        <a href="#" id="top-cart-trigger" style="font-size: 10px" class="pull-right">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- #header end -->
            <section id="slider" style="height: 358px" class="slider-parallax swiper_wrapper clearfix">
                <div style="height: 358px">
                    <div class="swiper-container swiper-parent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide dark" style="background-image: url('./theme/images/slider/swiper/main_background.jpg'); height: 358px">
                                <div class="container clearfix">
                                    <div class="slider-text" style="margin-top: 0px">
                                        <h2 data-caption-animate="fadeInUp">Shop curated brands and city essentials, all in one place</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide dark" style="background-image: url('./theme/images/slider/swiper/main_background.jpg'); height: 358px">
                                <div class="container clearfix">
                                    <div class="slider-text" style="margin-top: 0px">
                                        <h2 data-caption-animate="fadeInUp">Shop curated brands and city essentials, all in one place</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide dark" style="background-image: url('./theme/images/slider/swiper/main_background.jpg'); height: 358px">
                                <div class="container clearfix">
                                    <div class="slider-text" style="margin-top: 0px">
                                        <h2 data-caption-animate="fadeInUp">Shop curated brands and city essentials, all in one place</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-arrow-left" style="background: transparent"><i class="icon-angle-left"></i></div>
                        <div id="slider-arrow-right" style="background: transparent"><i class="icon-angle-right"></i></div>
                    </div>
                </div>
            </section>
            <!-- Content
            ============================================= -->   
            <div class="section" style="margin-top: 33px;padding: 0px;background: #fff; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 0px !important">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!--<h3> Featured Images</h3>-->
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0px">
                                    <img src="./theme/images/slider/swiper/04.png" alt="" class="center-block" style="height: 550px">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0px">
                                    <img src="./theme/images/slider/swiper/05.png" alt="" class="center-block" style="height: 550px">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding: 0px">
                                    <img src="./theme/images/slider/swiper/06.png" alt="" class="center-block" style="height: 550px">
                                </div>
                            </div>
                        </div><br/><br/>
                    </div>
                </div>
            </div>
            <div class="section" style="padding: 0px;background: #fff;margin-top: 0px; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 12px !important">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h3> Most Popular Products</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="#">
                                    <h3 class="pull-right" style="color: black; font-size: 15px; margin-top: 12px; font-weight: bold"> See All ></h3>
                                </a>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/16.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/12.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/13.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/14.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/15.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Home Docer</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Headphones</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Backpacks</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Skin Care</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Pet Supplies</h5>
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                    </div>
                </div>
            </div>
            <div class="section" style="padding: 0px;background: #fff;margin-top: 0px;margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 12px !important">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h3> Discover Latest In Fashion</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="#">
                                    <h3 class="pull-right" style="color: black; font-size: 15px; margin-top: 12px;font-weight: bold"> See All ></h3>
                                </a>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/22.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/12.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/13.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/14.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/15.png" class="center-block" alt="" style="height: 130px">
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Bedding</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Headphones</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Backpacks</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Skin Care</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Pet Supplies</h5>
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                    </div>
                </div>
            </div>
            <div class="section" style="padding: 0px;background: #fff;margin-top: 0px;margin-bottom: 34px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 12px !important">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h3>  Coveted Health & Beauty</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <a href="#">
                                    <h3 class="pull-right" style="color: black; font-size: 15px; margin-top: 12px; font-weight: bold"> See All ></h3>
                                </a>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/11.png" alt="" class="center-block" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/12.png" alt="" class="center-block" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/13.png" alt="" class="center-block" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/14.png" alt="" class="center-block" style="height: 130px">
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <img src="./theme/images/brand/15.png" alt="" class="center-block" style="height: 130px">
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Watches</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Headphones</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Backpacks</h5>
                                    </a>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <h5 class="text-center" style="font-weight: normal;color: black">Skin Care</h5>
                                </div>
                                <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                    <a href="#">
                                        <h5 class="text-center" style="font-weight: normal;color: black">Pet Supplies</h5>
                                    </a>
                                </div>
                            </div>
                        </div><br/>
                    </div>
                </div>
            </div>
            <section class="container">
                <div class="row" style="height: 232px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 200px;">
                        <img src="./theme/images/brand/07.jpg" alt="">
                        <div style="position:relative;bottom: 221px;left: 110px;color: rgb(51, 51, 51);">
                            <p style="font-size: 48px;line-height: 52px;letter-spacing: -2.3px;font-weight: bolder;margin-bottom: 9px;font-family: Bloomfield, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                                Finds for family <br>
                                time
                            </p>
                            <p style="font-size: 16px;">From games &amp; puzzles to arts &amp; crafts, get fun activities <br> for every age.</p>
                        </div>
                    </div>
                </div><br/> 
            </section>
            <br/><br/><br/><!-- #content end -->
            <!---   End   --->				
            <!-- Footer
            ============================================= -->
            <footer id="footer" class="dark">
                <div class="container">
                    <!-- Footer Widgets
                    ============================================= -->
                    <div class="footer-widgets-wrap clearfix">
                        <div class="col-lg-3 col-md-3">
                            <div class="widget clearfix">
                                <h4 style="font-weight: 700">Get to Know Us</h4>
                                <ul style="list-style: none; line-height: 2">
                                    <li><a href="#">Our Company</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="widget clearfix">
                                <h4 style="font-weight: 700">Joy Business</h4>
                                <ul style="list-style: none; line-height: 2">
                                    <li><a href="#">Sell on Joy</a></li>
                                    <li><a href="#">Advertise With Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="widget clearfix">
                                <h4 style="font-weight: 700">Customer Service</h4>
                                <ul style="list-style: none; line-height: 2">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="widget clearfix">
                                <h4 style="font-weight: 700">Social</h4>
                                <div id="post-list-footer">
                                    <a href="#" class="social-icon si-small si-borderless si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="#" class="social-icon si-small si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .footer-widgets-wrap end -->
                </div>
                <!-- Copyrights
                ============================================= -->
                <div id="copyrights">
                    <div class="container clearfix">
                        <div class="col_half">
                            Copyrights &copy; 2020 Joy.com, Inc.
                        </div>
                        <div class="col_half col_last tright">
                            <div class="clear"></div>
                            <i class="icon-envelope2"></i> contact@joy.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-2222-3333 <span class="middot">&middot;</span>
                        </div>
                    </div>
                </div><!-- #copyrights end -->
            </footer>
        </div><!-- #wrapper end -->
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="./theme/js/jquery.js"></script>
        <script type="text/javascript" src="./theme/js/plugins.js"></script>
        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="./theme/js/functions.js"></script>
    </body>
</html>