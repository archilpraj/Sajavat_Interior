<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Sajavat :: Checkout</title>
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
                                <li><a href=""> <i class="fb"> </i> </a></li>
                                <li><a href=""><i class="tw"> </i> </a></li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>  
                    <div class="about_box">
                        <ul class="login">
                            <li class="login_text"><a href="checkout.php"><?php echo 'Welcome ' . $_SESSION['user']; ?></a></li>
                            <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="index.php"><b>!!Shop More!!</b></a></li>
                            <li class="check"><a href="contact.php"><b>Contact Us</b></a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <!-- <div class="search">
                             <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                         this.value = 'Search';
                                     }">
                             <input type="submit" value="">
                         </div> -->
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="container">
                    <div class="check_box">	 
                        <div class="col-md-9 cart-items">
                            <h1>My Shopping Bag (2)</h1>
                            <script>$(document).ready(function (c) {
                                    $('.close1').on('click', function (c) {
                                        $('.cart-header').fadeOut('slow', function (c) {
                                            $('.cart-header').remove();
                                        });
                                    });
                                });
                            </script>
                            <div class="cart-header">
                                <div class="close1"> </div>
                                <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="images/pic1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="cart-item-info">
                                        <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
                                        <ul class="qty">
                                            <li><p>Size : 5</p></li>
                                            <li><p>Qty : 1</p></li>
                                        </ul>
                                        <div class="delivery">
                                            <p>Service Charges : Rs.100.00</p>
                                            <span>Delivered in 2-3 bussiness days</span>
                                            <div class="clearfix"></div>
                                        </div>	
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <script>$(document).ready(function (c) {
                                    $('.close2').on('click', function (c) {
                                        $('.cart-header2').fadeOut('slow', function (c) {
                                            $('.cart-header2').remove();
                                        });
                                    });
                                });
                            </script>
                            <div class="cart-header2">
                                <div class="close2"> </div>
                                <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="images/pic2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="cart-item-info">
                                        <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
                                        <ul class="qty">
                                            <li><p>Size : 5</p></li>
                                            <li><p>Qty : 1</p></li>
                                        </ul>
                                        <div class="delivery">
                                            <p>Service Charges : Rs.100.00</p>
                                            <span>Delivered in 2-3 bussiness days</span>
                                            <div class="clearfix"></div>
                                        </div>	
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>		
                        </div>
                        <div class="col-md-3 cart-total">
                            <a class="continue" href="#">Continue to basket</a>
                            <div class="price-details">
                                <h3>Price Details</h3>
                                <span>Total</span>
                                <span class="total1">6200.00</span>
                                <span>Discount</span>
                                <span class="total1">---</span>
                                <span>Delivery Charges</span>
                                <span class="total1">150.00</span>
                                <div class="clearfix"></div>				 
                            </div>	
                            <ul class="total_price">
                                <li class="last_price"> <h4>TOTAL</h4></li>	
                                <li class="last_price"><span>6350.00</span></li>
                                <div class="clearfix"> </div>
                            </ul>


                            <div class="clearfix"></div>
                            <a class="order" href="#">Place Order</a>
                            <div class="total-item">
                                <h3>OPTIONS</h3>
                                <h4>COUPONS</h4>
                                <a class="cpns" href="#">Apply Coupons</a>
                                <p><a href="login.php">Log In</a> to use accounts - linked coupons</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
<?php
} else {
    header("location:404.php");
}
?>