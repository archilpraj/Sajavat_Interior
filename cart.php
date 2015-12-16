<?php
ob_start();
session_start();
require 'dbhelp.php';
require 'item.php';
if (isset($_GET['product_id']) && !isset($_POST['update'])) {
    $result = mysqli_query($con, "select product_id,product_name,product_price,product_img from product_bed where product_id='" . $_GET['product_id'] . "'");
    $product = mysqli_fetch_object($result);
    $item = new item();
    $item->id = $product->product_id;
    $item->name = $product->product_name;
    $item->price = $product->product_price;
    $item->images = $product->product_img;
    $item->quantity = 1;
    // Check Product is existing in Cart
    $index = -1;
    if (isset($_SESSION['cart'])) {
        $cart = unserialize(serialize($_SESSION['cart']));
        for ($i = 0; $i < count($cart); $i++)
            if ($cart[$i]->id == $_GET['product_id']) {
                $index = $i;
                break;
            }
    }
    if ($index == -1)
        $_SESSION['cart'][] = $item;
    else {
        $cart[$index]->quantity++;
        $_SESSION['cart'] = $cart;
    }
}

//Delete Product in Cart
if (isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}

//Update Quantity in Cart
if (isset($_POST['update'])) {
    $arrQuantity = $_POST['quantity'];

    //Check Valid Quantity Number
    $valid = 1;
    for ($i = 0; $i < count($arrQuantity); $i++)
        if (!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
            $valid = 0;
            break;
        }
    if ($valid == 1) {
        $cart = unserialize(serialize($_SESSION['cart']));
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]->quantity = $arrQuantity[$i];
        }
        $_SESSION['cart'] = $cart;
    } else
        $error = 'Quantity is InValid';
}
if (isset($_GET['v'])) {
    if ($_GET['v'] == "empty") {
        unset($_SESSION['cart']);
    }
}
?>

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
                        <li class="login_text"><a href="cart.php">Welcome <?php echo $_SESSION['user'];?></a></li>
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
                                <table border="1" >
                                    <tr>
                                        <th align="center">Images</th>
                                        <th align="center">Name</th>
                                        <th align="center">price</th>
                                        <th align="center">quantity <input type="image" src="images/ie-icon-refresh.png" height="15" width="15"> <input type="hidden" name="update"> </th>
                                        <th align="center">Sub Total </th>
                                        <th align="center"></th>
                                    </tr>
                                    <?php
                                    $cart = unserialize(serialize($_SESSION['cart']));
                                    $s = 0;
                                    $index = 0;
                                    for ($i = 0; $i < count($cart); $i++) {
                                        $s += $cart[$i]->price * $cart[$i]->quantity;
                                        ?>
                                        <tr>
                                            <td align="center"><image src="<?php echo $cart[$i]->images; ?>" height="100" width="100"></td>
                                            <td align="center"><?php echo $cart[$i]->name; ?></td>
                                            <td align="center"><?php echo $cart[$i]->price; ?></td>
                                            <td align="center"><input type="text" value="<?php echo $cart[$i]->quantity; ?>" style=" width: 50px;" name="quantity[]"></td>
                                            <td align="center"><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
                                            <td align="center"><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')"><img src="images/close_1.png"></a></td>
                                        </tr>
                                        <?php
                                        $index++;
                                    }
                                    ?>
                                </table>
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
                    <a class="order" href="#">Place Order</a>
                    <a class="order" href="cart.php?v=empty" onclick="return confirm('Are you sure?')">Empty Cart</a>
                </div>
                <div class="clearfix"></div>
            </div>
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
    <?php include 'footer.php'; ?>
</body>
</html>
<?php
if (isset($_GET["product_id"]) || isset($_GET["index"])) {
    header('Location: cart.php');
}
if(!isset($_SESSION['user']))
{
    header("location:404.php");
}
ob_end_flush();
?>