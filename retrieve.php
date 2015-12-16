<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:404.php");
} else {
    ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Retrive Account | Sajavat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <script type="text/javascript">
            function chkmail()
            {
                var xmlhttp = new XMLHttpRequest();
                var mail = document.getElementById("txtemail").value;
                xmlhttp.open("GET", "checkdata.php?retrieveemail=" + mail, true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var mydiv = document.getElementById("erremail");
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }
                    document.getElementById("submitbtn").disabled = !btn()
                }
                xmlhttp.send();
            }
            function btn()
            {
                return document.getElementById("erremail").valid;
            }
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
                            <li class="wish"><a href="login.php">Login</a></li>
                            <li class="login_text"><a href="register.php">Register</a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="index.php">Home</a></li>
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
            <form name="retrieve_form" action="logic.php?val=retrieve" method="POST">
                <div class="container">
                    <div class="register">

                        <div class="register-top-grid">
                            <h3>Recover your account</h3>

                            <div>
                                <span>Email:</span> <input type="text" name="txtemail" id="txtemail" onchange="chkmail()" required placeholder="xyz@god.com"  />
                            </div>
                            <div id="erremail" class="alert-danger"></div>

                        </div>
                        <input type="submit" name="submitbtn" id="submitbtn" class="btn btn-default" value="Submit" disabled="true"/><br>
                    </div>

                </div> 

            </form>       
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
<?php } ?>