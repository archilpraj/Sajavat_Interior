<?php
session_start();
   if (isset($_SESSION['user'])) { 
        header("location:404.php");
  }
  else{
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sajavat Interiors | Registration Fail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/simpleCart.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/component.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!--//webfont-->
        <script src="js/jquery.easydropdown.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php"><h3>Sajavat</h3><h2>Interiors</h2></a>
                    </div>
                    <div class="header_right">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/sjintfurniture"> <i class="fb"> </i> </a></li>
                            <li><a href=""><i class="tw"> </i> </a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>  
                <div class="about_box">
                   
                             <ul class="login">
                                 <li class="login_text"><a href="index.php">Home</a></li>
                             <li class="wish"><a href="register.php">Register</a></li>
                                <div class='clearfix'></div>
                            </ul>
                         <ul class="quick_access">
                             <li class="view_cart"><a href="about.php">About Us</a></li>
                             <li class="check"><a href="contact.php">Contact Us</a></li>
                                <div class='clearfix'></div>
                            </ul>
                     
                       <!-- <div class="search">
                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search';
                                    }">
                            <input type="submit" value="">
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content_box">
                    <div class="container">
                      <center>  <div><font color="df4782"><h2><b>Registration Failed Try Again</b></h2></font></div><br>
                          <img src="images/fail.png" width="100px" height="100px"></center><br>
                </div>
                <div class="container">
                    <div class="instagram_top">
                        <div class="instagram text-center">
                            <h3>Our Collections</h3>
                        </div>
                        <ul class="instagram_grid">
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i1.jpg" class="img-responsive"alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i2.jpg" class="img-responsive" alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i3.jpg" class="img-responsive" alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i4.jpg" class="img-responsive" alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i5.jpg" class="img-responsive" alt=""/></a></li>
                            <li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i6.jpg" class="img-responsive" alt=""/></a></li>
                            <div class="clearfix"></div>
                            <div id="small-dialog1" class="mfp-hide">
                                <div class="pop_up">
                                    <h4>A Sample Photo Stream</h4>
                                    <img src="images/i_zoom.jpg" class="img-responsive" alt=""/>
                                </div>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>
            <?php include 'footer.php'; ?>
    </body>
</html>
  <?php }?>
