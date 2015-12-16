<?php

//session_start();

include 'dbhelp.php';
if ($_GET['val'] == 'register') {
    $username = $_POST['txtusername'];

    $password = $_POST['txtpassword'];
    $email = $_POST['txtemail'];
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];

    $state = $_POST['txtstate'];
    $city = $_POST['txtcity'];
    $pincode = $_POST['txtpincode'];
    $address = $_POST['txtaddress'];
    $phone = $_POST['txtphone'];

    $sql = "INSERT INTO user (user_id, user_password, user_email, user_firstname, user_lastname,user_address,user_city,user_state ,user_pincode, user_phone) VALUES ('$username','$password','$email','$fname','$lname','$address','$city','$state','$pincode','$phone')";
    // $sql="INSERT INTO user (user_id, user_password, user_email) VALUES ('$username','$password','$email')";
    if (mysqli_query($con, $sql)) {

        $_SESSION['user'] = $username;
        header("location:reg_pass.php");
    } else {
        header("location:reg_fail.php");
    }
} elseif ($_GET['val'] == 'login') {
    $username = $_POST['txtuser'];

    $password = $_POST['txtpass'];

    $sql = "select user_password from user where user_id='" . $username . "'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if ($row['user_password'] == $password) {
        session_start();
        $_SESSION['user'] = $username;
        header("Location: index.php");
    } else {
        header("location:login_fail.php");
    }
} elseif ($_GET['val'] == 'retrieve') {
    $email = $_POST['txtemail'];
    require 'class.phpmailer.php';
    require 'class.smtp.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Mailer = 'smtp';
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = "info.sjinteriors@gmail.com";
    $mail->Password = "catalysm_info";
    $mail->From = "info_sjinteriors@gmail.com";
    $mail->FromName = "noReply";
    $mail->addAddress($email);
    $mail->Subject = "Activation Code";
    $code = rand(0, 9999999999);
    $mail->Body = "Your Acivation code is: " . $code;
    if (!$mail->send()) {
        echo "Error not sent " + $mail->ErrorInfo;
    } else {
        echo "sent";
    }
    $sql = "update user set user_vcode='" . $code . "' where user_email='" . $email . "'";
    mysqli_query($con, $sql);
} elseif ($_GET['val'] == 'logout') {
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
} elseif ($_GET['val'] == 'activate') {
    $email = $_POST['txtemail'];
    $code = $_POST['txtcode'];
    $pass = $_POST['txtpass'];
    $sql = "select * from user where user_email='" . $email . "'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if ($row['user_vcode'] == $code) {
        $sql1 = "update user set user_password='" . $pass . "' where user_email='" . $email . "'";
        if (mysqli_query($con, $sql1)) {
            echo "Password updated";
            echo "<a href=login.php>Click here</a> to Login";
        } else {
            echo "Failed";
        }
    } else {
        echo "Activation code doesnt match";
    }
} else if ($_GET['val'] == 'update_user') {
    session_start();
    $uid = $_SESSION['user'];
    $u_email1 = $_POST['txtemail'];
    $u_address1 = $_POST['txtaddress'];
    $u_pincode1 = $_POST['txtpincode'];
    $u_phone1 = $_POST['txtphone'];
    $sql = "update user set user_email='$u_email1',user_address='$u_address1',user_pincode=$u_pincode1,user_phone='$u_phone1' where user_id='$uid'";
    if (mysqli_query($con, $sql)) {
        echo "Update successful";
    } else {
        echo "Update failed";
    }
} else if ($_GET['val'] == 'p_beds') {
    $pcat="product_bed";
    $sql = "select * from product_bed";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($res)) {
        $img = $row['product_img'];
        $pname = $row['product_name'];
        $pprice = $row['product_price'];
        $ppid = $row['product_id'];
        $pstock=$row['product_stock'];
        $pcolor=$row['product_color'];
        $pwarranty=$row['product_warranty'];
        $assembly=$row['product_assembly'];
        $material=$row['product_material'];
        $storage=$row['storage'];
        $btype=$row['bed_type'];
        $h=$row['product_h'];
        $w=$row['product_w'];
        $d=$row['product_d'];
        if($pstock>0)
        {
            $stckval='<font color=green>In Stock</font>';
        }
        else
        {
            $stckval='<font color=red>Out Of Stock</font>';
        }
        $pdat= "<tr><th>Availability</th><th>Dimensions</th><th>Color</th><th>Warranty</th><th>Assembly</th><th>Product Material</th><th>Storage</th><th>Bed Type</th></tr><tr><td>$stckval</td><td>H=$h+ W=$w+ D=$d</td><td>$pcolor</td><td>$pwarranty</td><td>$assembly</td><td>$material</td><td>$storage</td><td>$btype</td></tr>";
        echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>";
        echo "<a href='single.php?ppid=$ppid&pcat=$pcat&pdat=$pdat'>";
        echo "<div class='inner_content clearfix'>";
        echo "<div class='product_image'>";
        echo "<img src='$img' class='img-responsive' height='700px' width='350px'/>";
        //echo "<a href='cart.php' class='button item_add item_1'></a>";
        echo "<div class='product_container'>";
        echo "<div class='cart-left'>";
        echo "<p class='title'>$pname</p>";
        echo "</div><br/>";
        echo "<span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>";
        echo "<center><p><button type='button' class='btn btn-primary' value='$ppid' onclick='updcart(this.value)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
        echo "<div class='clearfix'></div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
    }
}