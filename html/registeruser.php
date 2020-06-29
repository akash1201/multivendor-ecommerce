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
        <title>Account Registered | Joy</title>       
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
       
        <div id="wrapper" class="clearfix">
              
            <div style="text-align:center; margin-top:20%;">

                 <?php 
                 
                    if(!isset($_POST['register-form-submit'])){

                        echo("<h2><a href='../index.php'>Return to home</a></h2>");
                    }
                 
                 
                 else{

                   $name=$_POST['register-form-name'];
                   $email=$_POST['register-form-email'];
                   $country=$_POST['register-form-location'];
                   $password=$_POST['register-form-password'];


                   $query="select max(c_id) as c_id from customers";
                   $result=mysqli_query($conn,$query);

                   while($row=mysqli_fetch_array($result)){
                    
                    $id=$row['c_id'];

                   }
                    
                   $id=$id+1;


                   $insert="insert into customers (c_id,name,email,country,password) values('$id','$name','$email','$country','$password')";
                  

                   #sending confirmation email. 

                   $subject="Account activation";
                   $message="<p>To activate your account, <a href='./activate.php?c_id=".$id."&email='$email'>Click Here</a></p>";
                   $header="From: akashchtry@gmail.com";
                   mail($email,$subject,$message,$header);

                    if(mysqli_query($conn,$insert)){

                        echo("<h2>Account Registered</h2>");
                        echo("<p>An confirmation email has been sent to ".$email."</p>");
                        echo("<a href='../index.php'>Return to home</a>");

                    }
                   
                    else{
                          
                        echo("<h4>Something went wrong...!</h4>");
                        echo("<a href='../index.php'>Return to home</a>");

                    }

                 }
                 
                 ?>

            </div>
            
        </div><br/><br/>
       
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