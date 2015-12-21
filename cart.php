<?php
ob_start();
session_start();
require 'dbhelp.php';
require 'item.php';
require 'cartlogic.php';
?>
<script src="../alert_master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../alert_master/dist/sweetalert.css">
<script type="text/javascript">
    function inpl(status)
    {
        if (status == 'Login Sucessfull')
        {
            swal({
                title: "Login Status",
                text: status,
                type: "success",
                confirmButtonColor: "#  00ff00",
                confirmButtonText: "Continue",
                closeOnConfirm: false
            },
            function () {
                window.location.href = 'admin_dashboard.php';
            });
        }
        else if (status == 'Invalid Credentials!')
        {
            swal({
                title: "Login Status",
                text: status,
                type: "error",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Try Login Again?",
                closeOnConfirm: true
            });
        }
        else
        {
            swal({
                title: "Login Status",
                text: 'Invalid Response!',
                type: "error",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Try Login Again?",
                closeOnConfirm: true
            });
        }
    }
</script>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sajavat :: Checkout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="alert_master/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="alert_master/dist/sweetalert.css">

        <script type="text/javascript">

    function cempty()
    {
        swal({
            title: "Are you sure?",
            text: "Your Cart will be cleared!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Cart Cleared", "success");
                window.location.href = 'cart.php?v=empty';
            }
        });
    }
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
                    <ul class="login">
                        <li class="login_text"><a href="user_profile.php">Welcome <?php echo $_SESSION['u_fname']; ?></a></li>
                        <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
                        <div class='clearfix'></div>
                    </ul>
                    <ul class="quick_access">
                        <li class="view_cart"><a href="index.php"><b>!!Shop More!!</b></a></li>
                        <li class="check"><a href="contact.php"><b>Contact Us</b></a></li>
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
        <div class="main">
            <div class="container">
                <div class="check_box">	 
                    <div class="col-md-9 cart-items">
                        <h1>My Shopping Bag</h1>
                        <?php
                        echo isset($error) ? $error : '';
                        if (@ $_SESSION['cart']) {
                            ?>
                            <form method="POST">
                                <?php
                                $cart = unserialize(serialize($_SESSION['cart']));
                                $s = 0;

                                $index = 0;
                                for ($i = 0; $i < count($cart); $i++) {
                                    $s += $cart[$i]->price * $cart[$i]->quantity;
                                    ?>
                                    <div class="cart-header">

                                        <div class="cart-sec simpleCart_shelfItem">
                                            <div class="cart-item cyc">
                                                <img src="<?php echo $cart[$i]->images; ?>" height="100" width="100" class="img-responsive" alt="">

                                            </div>
                                            <div class="cart-item-info">
                                                <h3><a href="#"><?php echo $cart[$i]->name; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="cart.php?index=<?php echo $index; ?>"><img src="images/close_1.png"></a></h3>
                                                <p></p>
                                                <ul class="qty">
                                                    <li><p>Price : <?php echo $cart[$i]->price; ?></p></li>
                                                    <li><p>Qty : <input type="number" min="1" max="10" value="<?php echo $cart[$i]->quantity; ?>" style=" width: 50px;" name="quantity[]"> <input type="image" src="images/ie-icon-refresh.png" height="25" width="25"> <input type="hidden" name="update"></p></li>
                                                    <li><p>Sub Total : <?php echo $cart[$i]->price * $cart[$i]->quantity; ?></p></li>
                                                </ul>
                                                <div class="delivery">
                                                    <span>Delivered in 2-3 bussiness days</span>
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
                        } else {
                            echo "Cart Is Empty";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 cart-total">
                    <a class="continue" href="index.php">Continue Shopping</a>
                    <div class="price-details">
                        <h3>Price Details</h3>
                        <span>Total</span>
                        <span class="total1"><?php
                            if (isset($s)) {
                                echo @$s;
                            } else {
                                echo '0';
                            }
                            ?></span>
                        <span>Delivery Charges</span>
                        <span class="total1"><?php
                            if (isset($s)) {
                                echo '+ 150';
                            } else {
                                echo '+ 0';
                            }
                            ?></span>
                        <div class="clearfix"></div>				 
                    </div>	
                    <ul class="total_price">
                        <li class="last_price"> <h4>TOTAL</h4></li>	
                        <li class="last_price"><span><?php
                                if (isset($s)) {
                                    echo @$s + 150;
                                } else {
                                    echo '0';
                                }
                                ?></span></li>
                        <div class="clearfix"> </div>
                    </ul>


                    <div class="clearfix"></div>
                    <a class="order" href="payment.php">Place Order</a>
                    <a class="order" href="#" onclick="cempty()">Empty Cart</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

  
    <?php include'footer.php' ?>
</body>
</html>
<?php
@$_SESSION['totamt'] = $s;
@$_SESSION['totqty'] = $cart[$i]->quantity;
if (isset($_GET["product_id"]) || isset($_GET["index"])) {
    header('Location: cart.php');
}
if (!isset($_SESSION['user'])) {
    header("location:404.php");
}
ob_end_flush();
?>