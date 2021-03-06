<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php

session_start();
include('../connection.php');
include('../userlocation.php');





?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <!-- Stylesheets
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../theme/style.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="../theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!-- Document Title
        ============================================= -->
        <title>Fashion</title>       
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
                margin: 14px 0px 18px 15px;
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
                font-size: 20px;
                font-weight: bold;
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
            body{
                font-size: 16px;
            }
            .under-line-a{color:black;font-weight: bold;text-decoration: underline !important;}
            .under-line-a:hover{color:black;}
            .row a{color:black;font-weight: bold;}
            .row a:hover{color:black;font-weight: bold;}

            div.category-list{
              overflow: auto;
              white-space: nowrap;

          }
          div.category-list a{

            text-align:center;
            display:inline-block;
            margin:1%;
            background-color:#1ABC9C;
            color:white;
            padding:0.5% 1%;
            border-radius:10px;
          }

         ::-webkit-scrollbar {
  width: 0px;
}

/* Track */
::-webkit-scrollbar-track {
 width:0px;
}

/* Handle */
 ::-webkit-scrollbar-thumb {
  background: white;
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
                            <div id="logo" style="padding:6px 15px 0px 0px;font-weight: bold;">
                                <span style="color: #fff;font-size: 24px">Joy</span>
                            </div><!-- #logo end -->
                        </div>
                        <div class="col-lg-8 col-md-8 col-lg-offset-1">
                            <div class="differnet-text text-center" style="margin-top: 18px">
                                <a href="#" style="font-size:20px;font-weight:bold">FASHION</a>
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
            </header>
            <section style="height: 497px;" class="swiper_wrapper clearfix">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="swiper-container swiper-parent">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide dark" style="background-image: url('../theme/images/slider/swiper/fashionbackground.jpg');color: black;">
                                    <div style="padding: 10px 60px;">
                                    <!-- <div>Fashion</div> -->
                                    <div style="padding:140px 0px 200px 0px;">
                                        <p style="font-family: Bloomfield, 'Helvetica Neue', Helvetica, Arial, sans-serif;font-weight: 700;font-size: 48px;letter-spacing: -2.3px;margin-bottom: 5px;">
                                            Spring forward
                                        </p>
                                        <p style="margin-bottom: 5px;width: 340px;font-size: 16px;">Celebrate the season in style with soft colors and light layers.</p>
                                        <div class="row">
                                            <div class="col col-lg-4 col-md-4" style=" padding: 0px;">
                                                <!-- <div class="col col-lg-6 col-md-6 ">
                                                    <a class="under-line-a" href="#">Shop Women's Clothing</a>
                                                </div>
                                                <div class="col col-lg-6 col-md-6">
                                                    <a href="#" class="under-line-a">Shop Men's Clothing</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    </div>
<!--                                    <div class='row' style="background:white;opacity: 0.8;height: 62px;margin: 0;padding: 17px 0px 18px 0px; text-align: center;">
                                        <a href="#" style="padding: 4px 35px 8px 35px;" >Free shopping over $49</a><a href="#" style="border-left: solid 1px rgb(153, 153, 153);padding: 4px 35px 8px 35px;">Free returns</a> 
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <div class="section" style="padding: 0px;background: #fff;margin-top: 30px; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 12px !important">
                        <div class="section" style="padding: 0px;background: #fff;margin-top: 0px; margin-bottom: 0px">
                            <div class="container clearfix">
                                <div class="row topmargin-sm" style="margin-top: 12px !important">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <img src="../theme/images/brand/fash01.jpg" class="center-block" alt="" style="height: 130px">
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <img src="../theme/images/brand/fash02.jpg" class="center-block" alt="" style="height: 130px">
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <img src="../theme/images/brand/fash03.jpg" class="center-block" alt="" style="height: 130px">
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <img src="../theme/images/brand/fash04.jpg" class="center-block" alt="" style="height: 130px">
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <img src="../theme/images/brand/fash05.jpg" class="center-block" alt="" style="height: 130px">
                                                </a>
                                            </div>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <h5 class="text-center" style="font-weight: normal;color: black">Fashion Jewellery</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <h5 class="text-center" style="font-weight: normal;color: black">Party Fashion Earrings</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <h5 class="text-center" style="font-weight: normal;color: black">Fancy Jewellery Set</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <h5 class="text-center" style="font-weight: normal;color: black">Fashion Necklace</h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
                                                <a href="#">
                                                    <h5 class="text-center" style="font-weight: normal;color: black">Fashion Dress</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div style="text-align: center;"><h2>Categories</h2></div>
            <div class="section" style="margin-top: 55px;padding: 0px;background: #fff; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 0px !important"> 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a href="#shop">
                                        <div class="women-blog" style="background: #c9aa95; height: 180px">
                                            <div class="row">
                                                <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <h2 class="text-center" style="padding: 68px;letter-spacing: -2.3px;font-weight: 700">Women</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-left: 0px">
                                    <a href="#shop">
                                        <div class="men-blog" style="background: #abb8c1; height: 180px">
                                            <div class="row">
                                                <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <h2 class="text-center" style="padding: 68px;letter-spacing: -2.3px;font-weight: 700">Men</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-left: 0px">
                                    <a href="#shop">
                                        <div class="kids-blog" style="background: #cecdcb;height: 180px">
                                            <div class="row">
                                                <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <h2 class="text-center" style="padding: 68px;letter-spacing: -2.3px;font-weight: 700">Kids&Baby</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div><br/><br/>
                    </div>
                </div>
            </div> -->
            <!---   Second Section   --->
            <!-- <div class="section" style="padding: 0px;background: #fff;margin-top: 0px; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 12px !important">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="text-center" style="font-size: 24px; font-weight: 700">Editor's Picks</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                                    <a href="#">
                                        <img src="../theme/images/brand/01.jpg" class="center-block" alt="">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="text-center" style="color: rgb(51, 51, 51);letter-spacing: -2px;font-size: 36px; font-weight:700;margin-top: 16px; margin-bottom: 12px">Step into the season</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="text-center" style="color: rgb(51, 51, 51);font-size: 16px;height: 28px">Shake off winter blues with new sandals, mules, and slides.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <button class="btn-primary btn-md center-block" style="letter-spacing: -1px;padding: 6px;height: 40px;background-color: rgb(0, 0, 0);font-size: 14px;margin-bottom: 12px;font-weight: 700;text-decoration-color: #fff;border-top-color: black; border-left-color: black">Shop Women's Shoes</button>              
                                            </div>
                                        </div>
                                    </a> 
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <a href="#">
                                        <img src="../theme/images/brand/02.jpg" class="center-block" alt="">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="text-center" style="color: rgb(51, 51, 51);letter-spacing: -2px;font-size: 36px; font-weight:700;margin-top: 16px; margin-bottom: 12px">So long, so boots</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="text-center" style="color: rgb(51, 51, 51);font-size: 16px;height: 28px">Complete your look with classic loafers and trend-forward sneakers.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <button class="btn-primary btn-md center-block" style="letter-spacing: -1px;padding: 6px;height: 40px;background-color: rgb(0, 0, 0);font-size: 14px; font-weight: 700;margin-bottom: 12px;text-decoration-color: #fff;border-top-color: black; border-left-color: black">Shop Men's Shoes</button>              
                                            </div>
                                        </div>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!---   End   --->
              
            <div style="width: 100%; margin:1%; "><h2 style="text-align:center;">Categories</h2></div>
         
             
         <div class="category-list" style="margin-left:43%">
                   
         <?php 
         
             $subc="select * from sub_categories where category_id= 1";
             
             $resc=mysqli_query($conn,$subc);

                while($rowc=mysqli_fetch_array($resc)){

                    //   echo("<a href='#shop' onclick='product_ajax('".$_SESSION['user_location']."',".$rowc['category_id'].", ".$rowc['sub_category_id'].")'>".$rowc['sub_category_name']."</a>");
                        
                    echo("<a href='#shop' onclick='product_ajax(".$rowc['category_id'].",".$rowc['sub_category_id'].")'>".$rowc['sub_category_name']."</a>");

                }
         
         ?>
                


         </div>


             <section id="content">
                <div class="content-wrap" style="padding:0px 0px 40px 0px; margin-top: 40px">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 style="font-size: 24px; font-weight: 700;margin-bottom: 0px">Products</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <p style="font-size: 16px; font-weight: 400; color: rgb(51, 51, 51)">Search in categories.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <!-- <a href="#">
                                    <h3 class="pull-right" style="color: black; font-size: 15px; margin-top: 12px; font-weight: bold;margin-bottom: 0px"> See All ></h3>
                                </a> -->
                            </div>
                        </div>
                        <!-- Shop
                        ============================================= -->
                        <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
                        <?php 
                          $query="select * from fashion where category_id=1 and vendor_location='".$_SESSION['user_location']."' and approved='y'";

                          $result=mysqli_query($conn,$query);
                      
                          if(mysqli_num_rows($result) > 0){

                             while($row=mysqli_fetch_array($result)){
                                    
                               echo("<div class='product clearfix'>
                               <div class='product-image'>
                                   <a href='#'><img src='./images/products/".$row['imglink']."' alt=''></a>");
                                     
                                   if($row['unit_price']!=$row['offer_price']){
                                       echo(" <div class='sale-flash' style='background-color: rgb(206, 31, 75);'>Deal</div>");
                                   }
                                 echo("<div class='product-overlay'>");
                                 echo("<a href='#' class='add-to-cart'><i class='icon-shopping-cart'></i><span> Add to Cart</span></a>
                                 <a href='#' class='item-quick-view' data-lightbox='ajax'><i class='icon-zoom-in2'></i><span> Quick View</span></a></div> </div>");

                               echo("  <div class='product-desc'>");

                               echo(" <div class='product-title'><h3><a href='#'>".$row['product_name']."</a></h3></div>");

                               if($row['unit_price']!=$row['offer_price']){
                                    
                                echo(" <div class='product-price'><del>$".$row['unit_price']."</del> <ins>$".$row['offer_price']."</ins></div>");

                               }
                               else{

                                echo("<div class='product-price'>$".$row['offer_price']."</div>");
                               }

                                 echo("</div>
                                 </div>");
                             }
                          
                            }
                           
                            else{

                                echo("<div style='text-align:center;width:100%;'><h4 style='color:red'>No Result Found</h4></div>");
                            }
                           
                          ?>

                            

                           
                            
                        </div>
                    </div>
                </div>
            </section>
<hr>
            <section id="content">
                <div class="content-wrap" style="padding:0px;  margin-top: 20px">
                    <div class="container clearfix">
                        <div class="row">
                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 style="font-size: 24px; font-weight: 700;margin-bottom: 0px">Products</h2>
                            </div> -->
                        </div>
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <p style="font-size: 16px; font-weight: 400; color: rgb(51, 51, 51)"> Try spring colors for the new season.</p>
                            </div> -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <!-- <a href="#">
                                    <h3 class="pull-right" style="color: black; font-size: 15px; margin-top: 12px; font-weight: bold;margin-bottom: 0px"> See All ></h3>
                                </a> -->
                            </div>
                        </div>
                        <!-- Shop
                        ============================================= -->
                        
                           
            </section>
<!-- <div class="section" style="padding: 0px;background: #fff;margin-top: 0px; margin-bottom: 0px">
                <div class="container clearfix">
                    <div class="row topmargin-sm" style="margin-top: 40px !important; margin-bottom: 50px">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <h3 style="color: rgb(51, 51, 51); font-size: 24px; font-weight: 700;letter-spacing: 0.6px"> Brands We Love</h3>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:200px;">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a href="#">
                                        <img src="../theme/images/brand/health03.jpg" style="height: 180px"/>
                                        <div class="row" style="position: relative;top: -105px;">
                                            <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h2 class="text-center" style="letter-spacing: -2.3px;font-weight: 700">Oribe</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-left: 0px;">
                                    <a href="#">
                                        <img src="../theme/images/brand/health04.jpg" style="height: 180px"/>
                                        <div class="row" style="position: relative;top: -105px;">
                                            <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h2 class="text-center" style="letter-spacing: -2.3px;font-weight: 700">Missha</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-left: 0px">
                                    <a href="#">
                                        <img src="../theme/images/brand/health05.jpg" style="height: 180px"/>
                                        <div class="row" style="position: relative;top: -105px;">
                                            <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h2 class="text-center" style="letter-spacing: -2.3px;font-weight: 700">Clarisonic</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><br/> 
                    </div>
                </div>
            </div> -->
            <!-- Content   End
            ============================================= -->
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
        <script type="text/javascript" src="../theme/js/jquery.js"></script>
        <script type="text/javascript" src="../theme/js/plugins.js"></script>
        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="../theme/js/functions.js"></script>
        <script type="text/javascript" src="./js/ajax.js"></script>
    </body>
</html>