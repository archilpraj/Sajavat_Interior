<?php
session_start();
require 'dbhelp.php';
$sql="select * from user where user_id='".$_SESSION['user']."'";
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
if (!isset($_SESSION['user'])) {
    header("location:404.php");
} else {
    


    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Sajavat Interiors | <?php
                echo $_SESSION['user'];
                Profile
                ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="alert_master/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="alert_master/dist/sweetalert.css">
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
                function salert(status)
                {
                    if(status == "Update successful")
                    {
                        swal({
                            title: "User Details",
                            text: status,
                            type: "success",
                            confirmButtonColor: "#  00ff00",
                            confirmButtonText: "Continue",
                            closeOnConfirm: false
                        },
                        function () {
                            window.location.href = 'user_profile.php';
                        });
                    }
                    else if(status == "Update failed")
                    {
                        swal({
                            title: "User Details",
                            text: stat,
                            type: "error",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Try Again",
                            closeOnConfirm: true
                        });
                    }
                    else
                    {
                        swal({
                            title: "User Details",
                            text: 'Invalid Response!',
                            type: "error",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Try Again",
                            closeOnConfirm: true
                        });
                    }
                }
                function chk()
                {
                    var xmlhttp = new XMLHttpRequest();
                    var email1 = document.getElementById("txtemail").value;
                    var address1= document.getElementById("txtaddress").value;
                    var pincode1 = document.getElementById("txtpincode").value;
                    var phone1 = document.getElementById("txtphone").value;
                    xmlhttp.open("POST","logic.php?val=update_user",true);
                    xmlhttp.onreadystatechange=function()
                    {
                        if(xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            var status=xmlhttp.responseText;
                            salert(status);
                        }
                    }
                    xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
                    xmlhttp.send("txtemail="+ email1 +"&txtaddress=" + address1 +"&txtpincode=" + pincode1 +"&txtphone=" + phone1);
                }
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
                    //a1 = document.getElementById("errusername");
                    a2 = document.getElementById("erremail");
                    //a3 = document.getElementById("errpassword");
                    //a4 = document.getElementById("errcpassword");
                    return (a2.valid);
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
                            <li class="login_text"><a href="index.php">Home</a></li>
                            <li class="wish"><a href="checkout.php">Checkout</a></li>
                            <div class='clearfix'></div>
                        </ul>
                        <ul class="quick_access">
                            <li class="view_cart"><a href="contact.php">Contact us</a></li>
                            <li class="check"><a href="about.php">About Us</a></li>
                            <div class='clearfix'></div>
                        </ul>

                        <!-- <div class="search">
                             <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                         this.value = 'Search';
                                     }">
                             <input type="submit" value="">
                         </div> -->
                    </div>
                </div>
            </div>
            <form name="profile_form" action="#" method="POST">
                <div class="main">
                    <div class="container">
                        <div class="register">
                            <div class="register-bottom-grid">
                                <h3>PERSONAL INFORMATION</h3>
                                <div>
                                    <span>First Name<label>*</label></span>
                                    <input type="text" readonly name="txtfname" id="txtfname" value="<?php echo $_SESSION['u_fname'] ?>"/>
                                </div>
                                <div>
                                    <span>Last Name<label>*</label></span>
                                    <input type="text" name="txtlname" id="txtlname" required value="<?php echo $_SESSION['u_lname'] ?>"/> 
                                </div>
                            </div>
                            <div class="register-top-grid">
                                <div>
                                    <span>Username</span> 
                                    <input type="text" readonly id="txtusername" name="txtusername" value="<?php echo $_SESSION['user'] ?>"/>
                                </div>
                                <div> <span>Email Address</span>
                                    <input required type="text" name="txtemail" id="txtemail" onblur="checkfld(this)" value="<?php echo $_SESSION['u_email'] ?>"/>
                                    <div id="erremail" class="alert-danger"></div>
                                </div>

                                <div>
                                    <span>Shipping Address</span>
                                    <textarea required name="txtaddress" id="txtaddress" maxlength="100"><?php echo $_SESSION['u_address'] ?></textarea>
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
                                    <input type="text"  name="txtpincode" id="txtpincode" maxlength="6" min="390000" max="391330" required value="<?php echo $_SESSION['u_pincode'] ?>"/>
                                </div>
                                <div>
                                    <span> Contact No</span>
                                    <input type="text"  name="txtphone" id="txtphone" maxlength="10" required value="<?php echo $_SESSION['u_phone'] ?>"/><br>
                                </div>
                            </div><br>
                            <input type="button"  class="btn btn-default"value="Submit" id="submitbtn" disabled="true" onclick="chk()"/>
                        </div>
                    </div>
                </div>
            </form>

            
    <?php include 'footer.php'; ?>
    </body>
    </html>	
<?php } ?>
