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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="alert_master/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="alert_master/dist/sweetalert.css">

        <script src="js/logicpro.js" type="text/javascript"></script>

        <script type="text/javascript">
            function loadtb()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "logic.php?val=loadtv", true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var resp = xmlhttp.responseText;
                        //alert(resp);
                        document.getElementById("ptvs").innerHTML = resp;
                    }
                }
                xmlhttp.send();
            }
            function loadtv()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "logic.php?val=loadtb", true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var resp = xmlhttp.responseText;
                        //alert(resp);
                        document.getElementById("ptables").innerHTML = resp;
                    }
                }
                xmlhttp.send();
            }
            function loadb()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "logic.php?val=loadb", true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var resp = xmlhttp.responseText;
                        //alert(resp);
                        document.getElementById("pbeds").innerHTML = resp;
                    }
                }
                xmlhttp.send();
                loadtv();
                loadtb();
            }
        </script>
    </head>
    <body onload="loadb()">
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
                        <?php include 'session_set.php'; ?>
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
                            <h3 class="m_1">New Beds</h3>
                            <div id="pbeds"></div>
                            <h3 class="m_2">New Tables</h3>
                            <div id="ptables"></div>
                            <br>
                            <h3 class="m_2">New TV Units</h3>
                            <div id="ptvs"></div>
                        </div>
                    </div>
                </div>
            </div>

           
        <?php include 'footer.php'; ?>
    </body>
</html>		
