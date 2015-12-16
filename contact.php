<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sajavat :: Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
        <!----details-product-slider--->
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
                            <li><a href=""> <i class="fb"> </i> </a></li>
                            <li><a href=""><i class="tw"> </i> </a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>  
                <div class="about_box">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <ul class="login">
                            <li class="login_text"><a href="checkout.php"><?php echo 'Welcome ' . $_SESSION['user']; ?></a></li>
                            <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <div class="cart_bg">
                            <ul class="cart">
                                <a href="checkout.php">
                                    <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
                                </a>    
                            </ul>
                        </div>
                        <ul class="login">
                            <li class="login_text"><a href="index.php">Home</a></li>
                            <li class="wish"><a href="checkout.php">Checkout</a></li>
                            <div class='clearfix'></div>
                        </ul><?php } else { ?>
                        <ul class="login">
                            <li class="login_text"><a href="login.php">Login</a></li> 
                            <li class="wish"><a href="register.php">Register</a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="index.php">Home</a></li>
                            <li class="check"><a href="about.php">About Us</a></li>
                            <div class='clearfix'></div>
                        </ul>
                    <?php } ?>
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
                    <div class="row">
                        <div class="col-md-3">
                            <div class="menu_box">
                                <h3 class="menu_head">Products</h3>
                                <ul class="nav">
                                    <li><a href="about.php">Beds</a></li>
                                    <li><a href="about.php">Bed Side Tables</a></li>
                                    <li><a href="about.php">Dining Tables</a></li>
                                    <li><a href="about.php">TV Sets</a></li>
                                    <li><a href="about.php">Sofas</a></li>
                                    <li><a href="about.php">Dressers</a></li>
                                    <li><a href="about.php">Bookshelf And Display Units</a></li>
                                    <li><a href="typo.php">Tables</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">

                            <div class="singel_right">
                                <div class="lcontact span_1_of_contact">
                                    <div class="contact-form">
                                        <form>
                                            <h2><font color="df4782"><b>Contact us</b></font></h2><br>
                                            <p class="comment-form-author"><label for="author">Your Name:</label>
                                                <input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Enter your name here...';
                                                        }">
                                            </p>
                                            <p class="comment-form-author"><label for="author">Email:</label>
                                                <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Email';
                                                        }">
                                            </p>
                                            <p class="comment-form-author"><label for="author">Message:</label>
                                                <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Message';
                                                        }">Enter your message here...</textarea>
                                            </p>
                                            <input name="submit" type="submit" id="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                                <div class="contact_grid span_2_of_contact_right">
                                    <h3>Address</h3>
                                    <div class="address">
                                        <i class="pin_icon"></i>
                                        <div class="contact_address">
                                            Vinoba Bhave Rd, Anandpura, Vadodara, Gujarat 390001.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="address">
                                        <i class="phone"></i>
                                        <div class="contact_address">
                                            <a href="tel:080-67400200">080-67400200</a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="address">
                                        <i class="mail"></i>
                                        <div class="contact_email">

                                            <p>Email :<a href="mailto:info.sjinteriors@gmail.com">info.sjinteriors@gmail.com</a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="map">   	 
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892283.7991697702!2d71.71937063821186!3d22.131053914737006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf577ab76169%3A0x950eed39f7ff75e2!2sHasmukh+Furniture!5e0!3m2!1sen!2sin!4v1450174383480"></iframe><br><small><a href=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892283.7991697702!2d71.71937063821186!3d22.131053914737006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf577ab76169%3A0x950eed39f7ff75e2!2sHasmukh+Furniture!5e0!3m2!1sen!2sin!4v1450174383480" style="color:#666;text-align:left;font-size:12px"></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <?php include 'footer.php'; ?>
    </body>
</html>		