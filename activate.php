<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:404.php");
} else {
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Sajavat Interiors | Activate</title>
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
                    var f1 = document.getElementById("erremail");
                    //var f2=document.getElementById("txtpass");
                    return f1.valid;
                }

                function checkPass()
                {


                    var pass1 = document.getElementById('txtpass');
                    var pass2 = document.getElementById('txtrepass');

                    var message = document.getElementById('errcpassword');

                    var goodColor = "#66cc66";
                    var badColor = "#ff6666";

                    if (pass1.value == pass2.value) {

                        pass2.style.backgroundColor = goodColor;
                        message.style.color = goodColor;
                        message.innerHTML = "Passwords Match!"
                    } else {

                        pass2.style.backgroundColor = badColor;
                        message.style.color = badColor;
                        message.innerHTML = "Passwords Do Not Match!"
                    }
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
                <div class="content_box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">

                                <div class="account_grid">
                                        
                                    <div class="col-md-6 login-right">
                                        <h3>Resend Code</h3>
                                        <a href="retrieve.php"><input type="submit" value="Resend" class="btn btn-default"/></a><br><br>
                                        <h3>Recovery Account</h3>
                                        <form name="retrieve_form" action="logic.php?val=activate" method="POST">
                                            <div>
                                                <span>Email Address</span>
                                                <input type="text" name="txtemail" id="txtemail" onchange="chkmail()" required />
                                                <font class="alert-danger"><div id="erremail"></div> </font>  
                                            </div>

                                            <div>
                                                <span>Code</span>
                                                <input type="text" name="txtcode" id="txtcode" required placeholder="Check Your Email For Code" />
                                            </div>

                                            <div>
                                                <span>Password: </span>
                                                <input type="password" name="txtpass" id="txtpass" required/>
                                                <font class="alert-danger"> <div id="errrepass"></div></font>
                                            </div>
                                            <div>
                                                <span>Confirm Password:</span>
                                                <input type="password" name="txtrepass" id="txtrepass" required onkeyup="checkPass();"/>
                                                <div id="errcpassword" class="message-preview"></div>
                                            </div>
                                            <input type="submit" value="Submit" name="submitbtn" id="submitbtn" class="btn btn-default" disabled="true"/>
                                        </form>
                                    </div>
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