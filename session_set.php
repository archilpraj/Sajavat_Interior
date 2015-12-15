  <?php if (isset($_SESSION['user'])) { ?>
                            <ul class="login">
                                <li class="login_text"><a href="checkout.php"><?php echo 'Welcome '.$_SESSION['user'];?></a></li>
                                <li class="wish"><a href="logic.php?val=logout">Logout</a></a></li>
                                <div class='clearfix'></div>
                            </ul>
                            <div class="cart_bg">
                                <ul class="cart">
                                    <a href="checkout.php">
                                        <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
                                    </a>    
                                </ul>
                            </div>
                            <ul class="login">
                                <li class="login_text"><a href="checkout.php">View Cart</a></li>
                                <li class="wish"><a href="checkout.php">Checkout</a></li>
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