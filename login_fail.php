<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:404.php");
} else {
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Sajavat Interiors | Login Fail</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                            <li class="view_cart"><a href="contact.php">Contact Us</a></li>
                            <li class="check"><a href="about.php">About Us</a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <!--     <div class="search">
                                 <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                 this.value = 'Search';
                                             }">
                                 <input type="submit" value="">
                             </div>  -->
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

                                <div class="account_grid">

                                    <div class="col-md-6 login-right">
                                        <h3 class="alert alert-danger"><font color="red">! Username OR Password Didn't Match Try Again !</font></h3>
                                        
                                        <form name="login_form" action="logic.php?val=login" method="POST">
                                            <div>
                                                <span>Username<label>*</label></span>
                                                <input type="text" placeholder="Name" name="txtuser" id="txtuser" required /> 
                                            </div>
                                            <div>
                                                <span>Password<label>*</label></span>
                                                <input type="password" placeholder="****" name="txtpass" id="txtpass" required/> 
                                            </div>
                                            <input type="submit" value="Login"><br>
                                            <br>
                                            <span>
                                                <a class="forgot" href="retrieve.php">Forgot Your Password?</a>
                                            </span>
                                        </form>
                                    </div>	
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <?php include 'footer.php'; ?>
        </body>
    </html>		
<?php } ?>