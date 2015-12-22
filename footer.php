 <div class="footer">
            <div class="container">

                <div class="footer-grid">
                    <h3>Our Account</h3>
                    <ul class="list1">
                        <li><a href="index.php">Home</a></li>
                        <?php if (isset($_SESSION['user'])) {?>
                        <li><a href="login.php">Your Account</a></li>
                            
                        <li><a href="order_history.php">Order History</a></li><?php }?>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Our Support</h3>
                    <ul class="list1">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="contact.php">Addresses</a></li>
                        <li><a href="about.php">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="copy">
                        <p>Copyright &copy; Sajavat Interiors. All Rights Reserved.</p>
                    </div>
                </div>
            </div>