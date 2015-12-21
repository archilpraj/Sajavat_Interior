<?php
session_start();
if (isset($_GET['id']) && $_GET['tb']) {
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
    $p_id = $_GET['id'];
    $p_tb = $_GET['tb'];
    include 'productsdata.php';
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
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="alert_master/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="alert_master/dist/sweetalert.css">

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
            <script src="js/logicpro.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
            </script>
            <script type="text/javascript">

            </script>    
            <style>
                .flexslider {
                    width: 300px;
                    height: 300px;
                }

                .flex-container ul {
                    margin: 0px;
                    padding: 0px;
                }
                .flex-container li {
                    list-style: outside none none;
                    display: inline;
                }
                .flexslider .slides img {
                    width: inherit;
                    max-height: inherit;
                }
            </style>
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
                                    <a href="cart.php">
                                        <h4><i class="cart_icon"> </i><p>Cart: Rs. <?php echo @$_SESSION['totamt'] ?></p><div class="clearfix"> </div></h4>
                                    </a>    
                                </ul>
                            </div>
                            <ul class="login">
                                <li class="login_text"><a href="cart.php">Checkout</a></li>
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
                                        <li><a href="products.php">Beds</a></li>
                                        <li><a href="products.php">Bed Side Tables</a></li>
                                        <li><a href="products.php">Dining Tables</a></li>
                                        <li><a href="products.php">TV Sets</a></li>
                                        <li><a href="products.php">Sofas</a></li>
                                        <li><a href="products.php">Dressers</a></li>
                                        <li><a href="products.php">Bookshelf And Display Units</a></li>
                                        <li><a href="products.php">Tables</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-9">

                                <div class="singel_right">
                                    <div class="labout span_1_of_a1">
                                        <div class="flexslider">
                                            <ul class="slides">
                                                <li data-thumb='<?php echo $img; ?>'>
                                                    <img height="800px" width="400px" src='<?php echo $img; ?>' />
                                                </li>
                                                <li data-thumb='<?php echo $img2; ?>'>
                                                    <img height="800px" width="400px" src='<?php echo $img2; ?>' />
                                                </li>
                                                <li data-thumb='<?php echo $img3; ?>'>
                                                    <img height="800px" width="400px" src='<?php echo $img3; ?>' />
                                                </li>
                                                <li data-thumb='<?php echo $img4; ?>'>
                                                    <img height="800px" width="400px" src='<?php echo $img4; ?>' />
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
                                                <?php echo $tdata ?>
                                            </table>
                                        </div>


                                        <br> <br> <br> <br> <br> <br> <br>
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            echo "<center><p><button type='button' class='btn btn-primary' name='$p_tb' value='$p_id' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
                                        }
                                        ?>

                                        <div id="btncart">
                                            
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>


                                <div class="sap_tabs">	
                                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                        <ul class="resp-tabs-list">
                                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>

                                            <div class="clear"></div>
                                        </ul>				  	 
                                        <div class="resp-tabs-container">
                                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                                <div class="facts">
                                                    <ul class="tab_list">
                                                        <li> <?php echo $desc ?> </li>
                                                    </ul>           
                                                </div>
                                            </div>	


                                        </div>
                                    </div>
                                </div>	
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
    <?php
} else {
    header("location:404.php");
}