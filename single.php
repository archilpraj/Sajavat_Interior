<?php
session_start();
require 'dbhelp.php';
$sql = "select * from user where user_id='" . @$_SESSION['user'] . "'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
$_SESSION['u_email'] = $row['user_email'];
$_SESSION['u_fname'] = $row['user_firstname'];
$_SESSION['u_lname'] = $row['user_lastname'];
$_SESSION['u_address'] = $row['user_address'];
$_SESSION['u_city'] = $row['user_city'];
$_SESSION['u_state'] = $row['user_state'];
$_SESSION['u_pincode'] = $row['user_pincode'];
$_SESSION['u_phone'] = $row['user_phone'];

$pcat = $_GET['pcat'];
$ppid = $_GET['ppid'];
$pdat = $_GET['pdat'];

$sql = "select * from $pcat where product_id='$ppid'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
$img = $row['product_img'];
$img2 = $row['product_img2'];
$img3 = $row['product_img3'];
$img4 = $row['product_img4'];
$pname = $row['product_name'];
$pprice = $row['product_price'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Single Product :: Sajavat</title>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
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
                    <?php if (isset($_SESSION['user'])) { ?>
                        <ul class="login">
                            <li class="login_text"><a href="user_profile.php"><?php echo 'Welcome ' . $_SESSION['u_fname']; ?></a></li>
                            <li class="wish"><a href="logic.php?val=logout">Logout</a></li>
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
                            <li class="login_text"><a href="checkout.php">Checkout</a></li>
                            <li class="wish"><a href="contact.php">Contact Us</a></li>
                            <div class='clearfix'></div>
                        </ul><?php } else { ?>
                        <ul class="login">
                            <li class="login_text"><a href="login.php">Login</a></li> 
                            <li class="wish"><a href="register.php">Register</a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="about.php">About Us</a></li>
                            <li class="check"><a href="contact.php">Contact Us</a></li>
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
                                <div class="labout span_1_of_a1">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li data-thumb=<?php echo $img; ?>>
                                                <img src=<?php echo $img; ?>/>
                                            </li>
                                            <li data-thumb=<?php echo $img2; ?>>
                                                <img src=<?php echo $img2; ?>/>
                                            </li>
                                            <li data-thumb=<?php echo $img3; ?>>
                                                <img src=<?php echo $img3; ?>/>
                                            </li>
                                            <li data-thumb=<?php echo $img4; ?>>
                                                <img src=<?php echo $img4; ?>/>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont1 span_2_of_a1 simpleCart_shelfItem">
                                    <h1><?php echo $pname; ?></h1>
                                    <br>   <span><font color="df4782" size="5"><b>Price : <i class="fa fa-inr"></i><?php echo $pprice; ?></b></font></span>

                                    <br> <br> <br> 
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" id="mt">
                                        <?php echo $pdat; ?>
                                        </table>
                                    </div>
                                    
                                    <br> <br> <br> <br> <br> <br> <br>
                                    <div class="btn_form button item_add item_1">
                                        <form>
                                            <input type="submit" value="Add to Cart" title="">
                                        </form>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sap_tabs">	
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <ul class="resp-tabs-list">
                                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>

                                        <div class="clear"></div>
                                    </ul>				  	 
                                    <div class="resp-tabs-container">
                                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                            <div class="facts">
                                                <ul class="tab_list">
                                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
                                                    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
                                                    <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
                                                    <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
                                                </ul>           
                                            </div>
                                        </div>	
                                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                            <div class="facts">
                                                <ul class="tab_list">
                                                    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
                                                    <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
                                                    <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
                                                </ul>           
                                            </div>
                                        </div>	

                                    </div>
                                </div>
                            </div>	
                            <h3 class="like">You Might Also Like</h3>        			
                            <ul id="flexiselDemo3">
                                <li><img src="images/pic11.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
                                <li><img src="images/pic10.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
                                <li><img src="images/pic4.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
                                <li><img src="images/pic8.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
                                <li><img src="images/pic7.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
                            </ul>
                            <script type="text/javascript">
                                $(window).load(function () {
                                    $("#flexiselDemo3").flexisel({
                                        visibleItems: 3,
                                        animationSpeed: 1000,
                                        autoPlay: true,
                                        autoPlaySpeed: 3000,
                                        pauseOnHover: true,
                                        enableResponsiveBreakpoints: true,
                                        responsiveBreakpoints: {
                                            portrait: {
                                                changePoint: 480,
                                                visibleItems: 1
                                            },
                                            landscape: {
                                                changePoint: 640,
                                                visibleItems: 2
                                            },
                                            tablet: {
                                                changePoint: 768,
                                                visibleItems: 3
                                            }
                                        }
                                    });

                                });
                            </script>
                            <script type="text/javascript" src="js/jquery.flexisel.js"></script>

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
        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

        <script>
// Can also be used with $(document).ready()
                                $(window).load(function () {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
        </script>

    </body>
</html>		