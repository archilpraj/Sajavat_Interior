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
            <title>Sajavat Interiors | Order History</title>
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
                function aler(status)
                {
                    swal({
                        title: "Order Manupulation",
                        text: status,
                        type: "success",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ok!",
                        closeOnConfirm: false
                    },
                    function () {
                        window.location.reload(true);
                    });
                }
                function checkoption()
                {
                    var value = document.getElementById('opt').value;
                    var ord_element = document.getElementById('ord_status');
                    var ord_status = ord_element.textContent;
                    //alert(value);
                    if (ord_status == "Completed")
                    {
                        if (value == "Cancel Order")
                        {

                            swal({
                                title: "Order Cancel",
                                text: "You Cannot Cancel This Order.Its Already Delivered",
                                type: "error",
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Ok!",
                                closeOnConfirm: true
                            });
                        }
                        else if (value == "Refund")
                        {
                            var id = document.getElementById("rad").value;
                            //var id1 = a.name;
                            //var ord = document.getElementById("order2").value;
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "changestatus.php?val=changestatus&id=" + id + "&status=Refund", true);
                            xmlhttp.onreadystatechange = function ()
                            {
                                if (xmlhttp.readyState == 4 && status == 200)
                                {
                                    var status = xmlhttp.responseText;
                                    aler(status);
                                }
                            }
                            xmlhttp.send();
                        }
                        else if (value == "Replace Product")
                        {
                            var id = document.getElementById("rad").value;
                            //var id1 = a.name;
                            //var ord = document.getElementById("order2").value;
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "changestatus.php?val=changestatus&id=" + id + "&status=Replace", true);
                            xmlhttp.onreadystatechange = function ()
                            {
                                if (xmlhttp.readyState == 4 && status == 200)
                                {
                                    var status = xmlhttp.responseText;
                                    aler(status);
                                }
                            }
                            xmlhttp.send();
                        }
                    }
                    else if (ord_status == "Under Process")
                    {
                        if (value == "Cancel Order")
                        {

                            var id = document.getElementById("rad").value;
                            //alert(id);
                            //var id1 = a.name;
                            //var ord = document.getElementById("order2").value;
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "changestatus.php?val=changestatus&id=" + id + "&status=Cancel", true);
                            xmlhttp.onreadystatechange = function ()
                            {
                                //alert("1");
                                if (xmlhttp.readyState == 4 && status == 200)
                                {
                                    alert("2");
                                    var status = xmlhttp.responseText;
                                    aler(status);
                                    alert(status);
                                }
                            }
                            xmlhttp.send();
                        }

                        else if (value == "Refund")
                        {
                            swal({
                                title: "Order Refund",
                                text: "You Cannot Request For Refund Until It Is Delivered",
                                type: "error",
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Ok!",
                                closeOnConfirm: true
                            });
                        }
                        else if (value == "Replace Product")
                        {
                            swal({
                                title: "Order Replace",
                                text: "You Cannot Request For Replace Until It Is Delivered",
                                type: "error",
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Ok!",
                                closeOnConfirm: true
                            });
                        }
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
                        <center>
                            <div><font color="df4782"><h2><b>Order History</b></h2></font></div><br>
                            <?php
                            require 'dbhelp.php';
                            require 'item.php';
                            $result_new = mysqli_query($con, "select * from new_order where user_id='" . $_SESSION['user'] . "'");
                            $result_old = mysqli_query($con, "select * from old_order where user_id='" . $_SESSION['user'] . "'");
                            ?>
                            <form method="POST" action="#" >
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Option</th>
                                            <th>Product Name</th>
                                            <th>Payment Mode</th>
                                            <th>Total Amount</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <th>Delivery Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($new_order = mysqli_fetch_object($result_new)) { ?>
                                            <tr>
                                                <td><input type="radio" id="rad" value="<?php echo $new_order->order_id; ?>"></td>
                                                <td><?php echo $new_order->product_name; ?></td>
                                                <td><?php echo $new_order->payment_mode; ?></td>
                                                <td><?php echo $new_order->total_amt; ?></td>
                                                <td><?php echo $new_order->order_date; ?></td>
                                                <td id="ord_status"><?php echo $new_order->order_status; ?></td>
                                                <td></td>
                                            </tr>    
                                        <?php } ?>
                                        <?php while ($old_order = mysqli_fetch_object($result_old)) { ?>
                                            <tr>
                                                <td><input type="radio" id="rad" value="<?php echo $old_order->order_id; ?>"></td>
                                                <td><?php echo $old_order->product_name; ?></td>
                                                <td><?php echo $old_order->payment_mode; ?></td>
                                                <td><?php echo $old_order->total_amt; ?></td>
                                                <td><?php echo $old_order->order_date; ?></td>
                                                <td id="ord_status"><?php echo $old_order->order_status; ?></td>
                                                <td><?php echo $old_order->delivery_date; ?></td>
                                            </tr>    
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <br><br>
                                <div>
                                    <label>Select Action:</label>
                                    <select id="opt" >
                                        <option>Cancel Order</option>
                                        <option>Refund</option>
                                        <option>Replace Product</option>
                                    </select></div>
                                <br>

                                <input type="button" class="btn btn-success" value="Submit" id="reqbtn" onclick="checkoption()"><br><br><br>
                            </form>
                        </center> 
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </body>
    </html>		
    <?php
} else {
    header("location:404.php");
}
?>
