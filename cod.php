<?php
ob_start();
session_start();
require 'dbhelp.php';
require 'item.php';
require 'cartlogic.php';
if (isset($_SESSION['user'])) {
    require 'dbhelp.php';
    $sql = "select * from user where user_id='" . $_SESSION['user'] . "'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $_SESSION['u_id'] = $row['user_id'];
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
            <title>Sajavat Interiors | Order History</title>
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

                    </div>
                </div>
            </div>
            <div class="main">
                <div class="container">
                    <div class="check_box">	 
                        <div class="col-md-9 cart-items">
                            <center>
                                <div><font color="df4782"><h2><b>Thank You For Buying!</b></h2></font></div><br><br><br>
                                <font color="df4782"><h2><b>Your Order Summary</b></h2></font><br>
                            </center>
                            <?php
                            echo isset($error) ? $error : '';
                            if (@ $_SESSION['cart']) {
                                $_SESSION['ccart'] = unserialize(serialize($_SESSION['cart']));
                                $_SESSION['s'] = 0;
                                $index = 0;
                                for ($i = 0; $i < count($_SESSION['ccart']); $i++) {
                                    $_SESSION['s'] += $_SESSION['ccart'][$i]->price * $_SESSION['ccart'][$i]->quantity;
                                    ?>
                                    <div class="cart-header">
                                        <div class="cart-sec simpleCart_shelfItem">
                                            <div class="cart-item cyc">
                                                <img src="<?php echo $_SESSION['ccart'][$i]->images; ?>" height="100" width="100" class="img-responsive" alt="">
                                            </div>
                                            <div class="cart-item-info">
                                                <?php $productid = $_SESSION['ccart'][$i]->id; ?>
                                                <h3><a href="#"><?php echo $_SESSION['ccart'][$i]->name; ?></a></h3>
                                                <p></p>
                                                <ul class="qty">
                                                    <li><p>Price : <?php echo $_SESSION['ccart'][$i]->price; ?></p></li>
                                                    <li><p>Qty : <?php echo $_SESSION['ccart'][$i]->quantity; ?></p></li>
                                                    <li><p>Sub Total : <?php echo $_SESSION['ccart'][$i]->price * $_SESSION['ccart'][$i]->quantity; ?></p></li>
                                                </ul>
                                                <div class="delivery">
                                                    <span><b><font color="red">Delivered in 2-3 bussiness days</font></b></span>
                                                    <div class="clearfix"></div>
                                                </div>	
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <?php
                                    $index++;
                                }
                                ?>
                                </form>
                                <?php
                            }
                            ?>
                            <center>
                                
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 cart-total">
                        <div><font color="df4782"><h2><b>Invoice</b></h2></font></div><br>                           
                                    <span>FullName: </span><?php echo '' . $_SESSION['u_fname'] . ' ' . $_SESSION['u_lname']; ?><br>
                                    <span>Contact No: </span><?php echo '' . $_SESSION['u_phone']; ?><br>
                                    <span>Shipping Address: </span><?php echo '' . $_SESSION['u_address']; ?><br>
                                    <span>Pincode : </span><?php echo '' . $_SESSION['u_pincode']; ?><br>
                                    <span>To Pay:</span><b><?php echo @$_SESSION['totamt'] ?></b><br><br><br>
                        <a class="continue" href="index.php">Continue Shopping</a>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
    </html>		
    <?php
}
// Save New Order
$userid = $_SESSION['u_id'];
$amount = $_SESSION['totamt'];
mysqli_query($con, 'insert into new_order(product_id,user_id,total_amt,payment_mode,order_status,order_date)
    values("'.$productid.'","' . $userid . '","' . $amount . '","COD","Under Process","' . date('Y-m-d') . '")');
$ordersid = mysqli_insert_id($con);
unset($_SESSION['cart']);
unset($_SESSION['totamt']);
if(!isset($_SESSION['user'])){
     header("location:404.php");
}
?>