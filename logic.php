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
        session_start();
        $_SESSION['user'] = $username;
        echo "Registration Successful";
        //header("location:reg_pass.php");
    } else {
        echo "Registration Failed";
        //header("location:reg_fail.php");
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
        header("location:retrieve.php");
    } else {
        header("location:activate.php");
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
} else if ($_GET['val'] == 'p_beds' || $_GET['val'] == 'p_bstables' || $_GET['val'] == 'p_dtables' || $_GET['val'] == 'p_tvsets' || $_GET['val'] == 'p_sofas' || $_GET['val'] == 'p_dressers' || $_GET['val'] == 'p_badunits' || $_GET['val'] == 'p_tables') {
    if ($_GET['val'] == 'p_beds') {
        $pcat = "product_bed";
    } else if ($_GET['val'] == 'p_bstables') {
        $pcat = "bed_side_table";
    } else if ($_GET['val'] == 'p_dtables') {
        $pcat = "product_dinning_table";
    } else if ($_GET['val'] == 'p_tvsets') {
        $pcat = "product_tv_unit";
    } else if ($_GET['val'] == 'p_sofas') {
        $pcat = "product_sofa";
    } else if ($_GET['val'] == 'p_dressers') {
        $pcat = "product_dresser_mirror";
    } else if ($_GET['val'] == 'p_badunits') {
        $pcat = "product_bookshelf_display_unit";
    } else if ($_GET['val'] == 'p_tables') {
        $pcat = "product_table";
    }
    session_start();
    $sql = "select * from $pcat";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($res)) {
        $pname = $row['product_name'];
        $pprice = $row['product_price'];
        $pimg = $row['product_img'];
        $pstock = $row['product_stock'];
        $pid = $row['product_id'];
        if ($pstock > 0) {
            $stckval = '<font color=green>In Stock</font>';
        } else {
            $stckval = '<font color=red>Out Of Stock</font>';
        }
        //$pdat= "<tr><th>Availability</th><th>Dimensions</th><th>Color</th><th>Warranty</th><th>Assembly</th><th>Product Material</th><th>Storage</th><th>Bed Type</th></tr><tr><td>$stckval</td><td>H=$h+ W=$w+ D=$d</td><td>$pcolor</td><td>$pwarranty</td><td>$assembly</td><td>$material</td><td>$storage</td><td>$btype</td></tr>";
        echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>";
        echo "<a href='single.php?id=$pid&tb=$pcat'>";
        echo "<div class='inner_content clearfix'>";
        echo "<div class='product_image'>";
        echo "<img src='$pimg' class='img-responsive' height='700px' width='350px'/>";
        //echo "<a href='cart.php' class='button item_add item_1'></a>";
        echo "<div class='product_container'>";
        echo "<div class='cart-left'>";
        echo "<p class='title'>$pname</p>";
        echo "</div><br/>";
        echo "<span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>";
        echo "</a>";
        if (isset($_SESSION['user'])) {
            echo "<center><p><button type='button' class='btn btn-primary' name='$pcat' value='$pid' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
        }
        echo "<div class='clearfix'></div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        //echo "</a>";
        echo "</div>";
    }
} else if ($_GET['val'] == 'loadb') {
    $bsql = "select * from product_bed order by RAND() LIMIT 3";
    $res = mysqli_query($con, $bsql);
    $pcat = "product_bed";
    session_start();
    while ($row = mysqli_fetch_array($res)) {
        $pid = $row['product_id'];
        $pname = $row['product_name'];
        $pimg = $row['product_img'];
        $pprice = $row['product_price'];
        echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>";
        echo "<a href='single.php?id=$pid&tb=$pcat'>";
        echo "<div class='inner_content clearfix'>";
        echo "<div class='product_image'>";
        echo "<img src='$pimg' class='img-responsive' height='700px' width='350px'/>";
        echo "<div class='product_container'>";
        echo "<div class='cart-left'>";
        echo "<p class='title'>$pname</p>";
        echo "</div><br/>";
        echo "<span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>";
        echo "</a>";
        if (isset($_SESSION['user'])) {
            echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
        }
        echo "<div class='clearfix'></div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else if ($_GET['val'] == 'loadtv') {
    $bsql = "select * from product_tv_unit order by RAND() LIMIT 3";
    $res = mysqli_query($con, $bsql);
    $pcat = "product_tv_unit";
    session_start();
    while ($row = mysqli_fetch_array($res)) {
        $pid = $row['product_id'];
        $pname = $row['product_name'];
        $pimg = $row['product_img'];
        $pprice = $row['product_price'];
        echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>";
        echo "<a href='single.php?id=$pid&tb=$pcat'>";
        echo "<div class='inner_content clearfix'>";
        echo "<div class='product_image'>";
        echo "<img src='$pimg' class='img-responsive' height='700px' width='350px'/>";
        echo "<div class='product_container'>";
        echo "<div class='cart-left'>";
        echo "<p class='title'>$pname</p>";
        echo "</div><br/>";
        echo "<span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>";
        echo "</a>";
        if (isset($_SESSION['user'])) {
            echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
        }
        echo "<div class='clearfix'></div>
        </div>
        </div>
        </div>
        
        </div>";
    }
} else if ($_GET['val'] == 'loadtb') {
    $bsql = "select * from product_table order by RAND() LIMIT 3,3";
    $res = mysqli_query($con, $bsql);
    $pcat = "product_table";
    session_start();
    while ($row = mysqli_fetch_array($res)) {
        $pid = $row['product_id'];
        $pname = $row['product_name'];
        $pimg = $row['product_img'];
        $pprice = $row['product_price'];
        echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>
        <a href='single.php?id=$pid&tb=$pcat'>
        <div class='inner_content clearfix'>
        <div class='product_image'>
        <img src='$pimg' class='img-responsive' height='700px' width='350px'/>
        <div class='product_container'>
        <div class='cart-left'>
        <p class='title'>$pname</p>
        </div><br/>
        <span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>
        </a>";
        if (isset($_SESSION['user'])) {
            echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
        }
        echo "<div class='clearfix'></div>
        </div>
        </div>
        </div>
        
        </div>";
    }
} else if ($_GET['val'] == 'ranb') {
    $sql = "select * from product_bed order by RAND()";
    $res = mysqli_query($con, $sql);
    session_start();
    $row = mysqli_fetch_array($res);
    $pid = $row['product_id'];
    $pcat = "product_bed";
    $pname = $row['product_name'];
    $pimg = $row['product_img'];
    $pprice = $row['product_price'];
    echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>
        <a href='single.php?id=$pid&tb=$pcat'>
        <div class='inner_content clearfix'>
        <div class='product_image'>
        <img src='$pimg' class='img-responsive' height='700px' width='350px'/>
        <div class='product_container'>
        <div class='cart-left'>
        <p class='title'>$pname</p>
        </div><br/>
        <span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>
        </a>";
    if (isset($_SESSION['user'])) {
        echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
    }
    echo "<div class='clearfix'></div>
        </div>
        </div>
        </div>
        
        </div>";
} else if ($_GET['val'] == 'rantv') {
    $sql = "select * from product_tv_unit order by RAND()";
    $res = mysqli_query($con, $sql);
    session_start();
    $row = mysqli_fetch_array($res);
    $pid = $row['product_id'];
    $pcat = "product_tv_unit";
    $pname = $row['product_name'];
    $pimg = $row['product_img'];
    $pprice = $row['product_price'];
    echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>
        <a href='single.php?id=$pid&tb=$pcat'>
        <div class='inner_content clearfix'>
        <div class='product_image'>
        <img src='$pimg' class='img-responsive' height='700px' width='350px'/>
        <div class='product_container'>
        <div class='cart-left'>
        <p class='title'>$pname</p>
        </div><br/>
        <span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>
        </a>";
    if (isset($_SESSION['user'])) {
        echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
    }
    echo "<div class='clearfix'></div>
        </div>
        </div>
        </div>
        
        </div>";
} else if ($_GET['val'] == 'ransofa') {
    $sql = "select * from product_sofa order by RAND()";
    $res = mysqli_query($con, $sql);
    session_start();
    $row = mysqli_fetch_array($res);
    $pid = $row['product_id'];
    $pcat = "product_sofa";
    $pname = $row['product_name'];
    $pimg = $row['product_img'];
    $pprice = $row['product_price'];
    echo "<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>
        <a href='single.php?id=$pid&tb=$pcat'>
        <div class='inner_content clearfix'>
        <div class='product_image'>
        <img src='$pimg' class='img-responsive' height='700px' width='350px'/>
        <div class='product_container'>
        <div class='cart-left'>
        <p class='title'>$pname</p>
        </div><br/>
        <span class='amount item_price'><i class='fa fa-inr'></i>$pprice</span>
        </a>";
    if (isset($_SESSION['user'])) {
        echo "<center><p><button type='button' class='btn btn-primary' value='$pid' name='$pcat' onclick='cartpdate(this)';<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add To Cart</button></p></center>";
    }
    echo "<div class='clearfix'></div>
        </div>
        </div>
        </div>
        
        </div>";
} elseif ($_GET['val'] == 'bankredirect') {
    $a = $_POST['bank'];
    if ($a == "bob") {
        header("Location:https://www.bob.com");
    } elseif ($a == "sbi") {
        header("Location:https://www.sbi.com");
    } elseif ($a == "hdfc") {
        header("Location:https://www.hdfc.com");
    }
}
