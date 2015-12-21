<?php
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
    <ul class="login">
        <li class="login_text"><a href="user_profile.php"><?php echo 'Welcome ' . $_SESSION['u_fname']; ?></a></li>
        <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
        <div class='clearfix'></div>
    </ul>
    <div class="cart_bg">
        <ul class="cart">
            <a href="cart.php">
                <h4><i class="cart_icon"> </i><p>Cart: Rs. <?php echo @$_SESSION['totamt'] ?></p><div class="clearfix"> </div></h4>
            </a>    
        </ul>
    </div>
    <ul class="login">
        <li class="login_text"><a href="about.php">About Us</a></li>
        <li class="wish"><a href="contact.php">Contact Us</a></li>
        <div class='clearfix'></div>
    </ul><?php } else { ?>
    <ul class="login">
        <li class="login_text"><a href="login.php">Login</a></li> 
        <li class="wish"><a href="register.php">Register</a></li>
        <div class='clearfix'></div>
    </ul>
    <ul class="quick_access">
        <li class="view_cart"><a href="about.php">About Us</a></li>
        <li class="check"><a href="contact.php">Contact Us</a></li>
        <div class='clearfix'></div>
    </ul>
<?php } ?>
<!-- <div class="search">
     <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                 this.value = 'Search';
             }">
     <input type="submit" value="">
 </div>-->