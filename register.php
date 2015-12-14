
<!DOCTYPE HTML>
<html>
    <head>
        <title>Register :: Sajavat Interiors</title>
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
        <script type="text/javascript">
            function checkfld(f)
            {
                //alert("th");
                var myfield = f;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "checkdata.php?" + myfield.id + "=" + myfield.value, true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var divname = "err" + myfield.id.substring(3);
                        var mydiv = document.getElementById(divname);
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }
                    document.getElementById("submitbtn").disabled = !submitchk();
                }
                xmlhttp.send();
            }
            function submitchk()
            {
                a1 = document.getElementById("errusername");
                a2 = document.getElementById("erremail");
                a3 = document.getElementById("errpassword");
                a4 = document.getElementById("errcpassword");
                return (a1.valid && a2.valid && a3.valid);
            }
            function checkPass()
            {


                var pass1 = document.getElementById('txtpassword');
                var pass2 = document.getElementById('txtcpassword');

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
                            <li><a href=""><i class="utube"> </i> </a></li>

                        </ul>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>  
                <div class="about_box">
                    <ul class="login">
                        <li class="login_text"><a href="login.php">Login</a></li>
                        <li class="wish"><a href="index.php">Home</a></li>
                        <div class='clearfix'></div>
                    </ul>

                    <div class="search">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Search';
                                }">
                        <input type="submit" value="">
                    </div>
                </div>
            </div>
        </div>
        <form name="register_form" action="logic.php?val=register" method="POST">
            <div class="main">
                <div class="container">
                    <div class="register">


                        <div class="register-bottom-grid">
                            <h3>PERSONAL INFORMATION</h3>

                            <div>

                                <span>First Name<label>*</label></span>
                                <input type="text"  required name="txtfname" id="txtfname"/>
                            </div>


                            <div>
                                <span>Last Name<label>*</label></span>
                                <input type="text" name="txtlname" required id="txtlname" /> 
                            </div>
                        </div>
                        <div class="register-top-grid">
                            <div>
                                <span>Username</span> 
                                <input type="text" required id="txtusername" name="txtusername" onblur="checkfld(this)"/>
                                <div id="errusername" class="alert-danger"></div>
                            </div>
                            <div> <span>Email Address<label>*</label></span>
                                <input required type="text" name="txtemail" id="txtemail" onblur="checkfld(this)"/>
                                <div id="erremail" class="alert-danger"></div>
                            </div>

                            <div>
                                <span>Address <font color="red">*</font></span>
                                <textarea required name="txtaddress"></textarea>
                            </div>

                            <div>
                                <span>Password<label>*</label></span>
                                <input type="password" id="txtpassword" required name="txtpassword" onblur="checkfld(this)"/>						 
                                <div id="errpassword" class="alert-danger"></div>
                            </div>

                            <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" id="txtcpassword" required name="txtcpassword" onblur="checkfld(this)" onkeyup="checkPass();
                                        return false;"/>						 
                                <div id="errcpassword" class="message-preview" width="50%"> </div>
                            </div>

                            <div>
                                <span>City</span>
                                <input type="text" name="txtcity" id="txtcity" readonly value="Vadodara" />
                            </div>

                            <div>
                                <span> State </span>
                                <input type="text" readonly value="Gujarat" name="txtstate" id="txtstate"/>
                            </div>

                            <div>
                                <span> Pincode </span>
                                <input type="number"  name="txtpincode" id="txtpincode" required maxlength="6"/>
                            </div>

                            <div>
                                <span> Contact No</span>
                                <input type="number"  name="txtphone" id="txtphone" maxlength="10" required/><br>
                            </div>
                        </div><br>
                        <input type="submit"  class="btn btn-default"value="Submit" id="submitbtn" disabled="true"/>

                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <div class="brands">
                <ul class="brand_icons">
                    <li><img src='images/icon1.png' class="img-responsive" alt=""/></li>
                    <li><img src='images/icon2.png' class="img-responsive" alt=""/></li>
                    <li><img src='images/icon3.png' class="img-responsive" alt=""/></li>
                    <li><img src='images/icon4.png' class="img-responsive" alt=""/></li>
                    <li class="last"><img src='images/icon5.png' class="img-responsive" alt=""/></li>
                </ul>
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
            <ul class="footer_social">
                <li><a href="#"><i class="tw"> </i> </a></li>
                <li><a href="#"> <i class="fb"> </i> </a></li>			
                <li><a href="#"><i class="pin"> </i> </a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-grid">
                <h3>Category</h3>
                <ul class="list1">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="about.php">Eshop</a></li>
                    <li><a href="about.php">Features</a></li>
                    <li><a href="about.php">New Collections</a></li>
                    <li><a href="typo.php">Typo</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-grid">
                <h3>Our Account</h3>
                <ul class="list1">
                    <li><a href="login.php">Your Account</a></li>
                    <li><a href="contact.php">Personal information</a></li>
                    <li><a href="contact.php">Addresses</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="checkout.php">Orders history</a></li>
                    <li><a href="about.php">Search Terms</a></li>
                </ul>
            </div>
            <div class="footer-grid">
                <h3>Our Support</h3>
                <ul class="list1">
                    <li><a href="contact.php">Site Map</a></li>
                    <li><a href="about.php">Search Terms</a></li>
                    <li><a href="about.php">Advanced Search</a></li>
                    <li><a href="about.php">Mobile</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="contact.php">Mobile</a></li>
                    <li><a href="contact.php">Addresses</a></li>
                </ul>
            </div>
            <div class="footer-grid">
                <h3>Newsletter</h3>
                <p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                <div class="search_footer">
                    <input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Your Email';
                            }">
                    <input type="submit" value="Submit">
                </div>
                <img src="images/payment.png" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="copy">
                <p>Copyright &copy; Sajavat Interiors. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>		