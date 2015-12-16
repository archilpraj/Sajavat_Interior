<?php
session_start();
include 'dbhelp.php'
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sajavat Interiors | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/simpleCart.min.js"></script>
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
                <div class="banner_wrap">
                    <div class="bannertop_box">
                      <?php include 'session_set.php';?>
                        <div class="welcome_box">
                            <h3>Welcome to Sajavat Interior</h3>
                            <p>This Is How We Do It. Bringing Furniture You Love With Love</p>
                        </div>
                    </div>
                    <div class="banner_right">


                        <h1>Happy Furniture to You!<br></h1><br>
                        <p><h3><font color="FFFFFF">Unlimited Choices. Unbeatable Prices. Free Shipping.</font></h3></p>
                    </div>
                    <div class='clearfix'></div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="content_box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="menu_box">
                                <h3 class="menu_head"><a href="products.php"> Products</a></h3>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <h3 class="m_1">New Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic1.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$2300.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>		
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$1500.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic3.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$2000.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic4.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$1700.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic5.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$800.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic6.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$199.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <h3 class="m_2">Top Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic7.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>		
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$4500.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic8.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>		
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$1050.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic13.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$2000.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <h3 class="m_2">Sale Products</h3>
                            <div class="content_grid">
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic10.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>		
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$99.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic11.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$60.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
                                    <a href="single.php">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/pic12.jpg" class="img-responsive" alt=""/>
                                                <a href="" class="button item_add item_1"> </a>	
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title">Lorem Ipsum 2015</p>
                                                    </div>
                                                    <span class="amount item_price">$900.00</span>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
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
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>		
