<!DOCTYPE html>
<?php

session_start();
include('../connection.php');
include('../userlocation.php');





?>
<html dir="ltr" lang="en-US">
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
        <title>Sign up | Joy</title>       
        <style>
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
            #footer .footer-widgets-wrap {
                padding: 0px 0px 60px 0px;
            }
            /***   End   ***/
            label {
                text-transform: inherit;
            }
            .button {
                text-transform: inherit;
            }
        </style>
    </head>
    <body class="stretched">
        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <!-- Header
            ============================================= -->
            <!-- Content
            ============================================= -->
            <section id="content">
                <div class="content-wrap" style="padding-top: 22px">
                    <div class="container clearfix">
                        <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px">
                            <div class="row center">
                                <a href="#">
                                    <h2 style="margin-bottom: 12px">Let's create your account</h2>
                                </a>
                            </div>
                            <div class="panel panel-default nobottommargin">
                                <div class="panel-body" style="padding: 40px">
                                    <form id="register-form" name="register-form" class="nobottommargin" action="registeruser.php" method="post" onsubmit="return validateform()">
                                        <div class="col_full">
                                            <label for="register-form-name">Name</label>
                                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" required/>
                                        </div>
                                        <div class="col_full">
                                            <label for="register-form-email">Email Address</label>
                                            <input type="email" id="register-form-email" name="register-form-email" value="" class="form-control" required/>
                                        </div>
                                        

                                        <?php 
                                        
                                        echo("<input type='hidden' name='register-form-location' value='".$_SESSION['user_location']."' />");
                                        ?>
                                        <!-- <div class="col_full">
                                            <label for="register-form-email">Country</label>

                                             
                                            <input type="text" id="register-display-name" name="register-display-country" value="" class="form-control" />
                                        </div> -->
                                        <div class="col_full">
                                            <label for="register-form-password">Password</label>
                                            <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" required/>
                                        </div>
                                        <div class="col_full">
                                            <label for="register-form-repassword">Re-enter Password</label>
                                            <input type="password" id="register-form-repassword" name="register-form-repassword" class="form-control" required/><br/>
                                            <span id="span" style="color:red;"></span>
                                        </div>
                                        <div class="col_full nobottommargin">
                                            <button type="submit"  class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><br/><br/>
        <!-- Content   End
        ============================================= -->
        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
<!--             Copyrights
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
            </div> 
        <!--#copyrights end--> 
        </footer>
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
        <script type="text/javascript" src="./js/validate.js"></script>
</body>
</html>