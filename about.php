<?php
session_start();
require 'dbhelp.php';
$sql="select * from user where user_id='".@$_SESSION['user']."'";
    $res= mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $_SESSION['u_email']=$row['user_email'];
    $_SESSION['u_fname']=$row['user_firstname'];
    $_SESSION['u_lname']=$row['user_lastname'];
    $_SESSION['u_address']=$row['user_address'];
    $_SESSION['u_city']=$row['user_city'];
    $_SESSION['u_state']=$row['user_state'];
    $_SESSION['u_pincode']=$row['user_pincode'];
    $_SESSION['u_phone']=$row['user_phone'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sajavat Interiors | About</title>
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
                                <li class="login_text"><a href="user_profile.php"><?php echo 'Welcome '.$_SESSION['u_fname'];?></a></li>
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
                                <li class="login_text"><a href="checkout.php">View Cart</a></li>
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
                        <div><font color="df4782"><h2><b>About Us</b></h2></font></div><br>
                        <div class="well"> ‘Home is where the heart is’, and who are we to disagree.
                            There is a big need for good quality, well-designed, competitively priced and dependable furniture. Indian home-makers are looking for a solution that could help them make beautiful homes, without too much hassle. Existing brands were either poor on quality and service or too highly priced.
                            <br><br>Wondering if there could be a better solution, the founders spent close to 6 months understanding the very basics of the furniture industry and the home décor space, from the raw materials stage through the entire manufacturing process to packaging and shipping the products across India. After some intense planning, trials and discussions with the best manufacturers across India and the world, and hundreds of consumer interviews, the founders narrowed down on a solution that could get distinctive products, manufactured well at prices that consumers would find practical.
                            And thus was born the journey of Urban Ladder. We present to you our solution which we will strive to improve every single day of our lives.Our vision is to set global benchmarks for distinctive products, consumer experiences and honest best practices.</div>

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