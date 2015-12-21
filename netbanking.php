<?php
session_start();
if (isset($_SESSION['user'])) {
    require 'dbhelp.php';
    $sql = "select * from user where user_id='" . $_SESSION['user'] . "'";
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
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Sajavat Interiors | NetBanking</title>
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
                                <li><a href=""> <i class="fb"> </i> </a></li>
                                <li><a href=""><i class="tw"> </i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>  
                    <div class="about_box">
                        <ul class="login">
                            <li class="login_text"><a href="user_profile.php"><?php echo 'Welcome ' . $_SESSION['u_fname']; ?></a></li>
                            <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="index.php"><b>Home</b></a></li>
                            <li class="check"><a href="products.php"><b>!Shop More!</b></a></li>
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
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <br>
                                <div class="account_grid">

                                    <center> <div class="col-md-6 login-right">
                                            <h3>Pay using Net Banking</h3><br><br>
                                            <form method="POST" action="logic.php?val=bankredirect" >
                                                <select name="bank">
                                                    <option  value="bob">Bank of Baroda</option>
                                                    <option  value="sbi">State Bank of India</option>
                                                    <option  value="hdfc">HDFC Bank</option>
                                                   
                                                </select>
                                                <br><br>
                                                <input type="submit" value="Pay!" class="btn btn-default"/><br><br><br>
                                            </form>
                                        </div></center> 
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
    <?php
} else {
    header("location:404.php");
}?>