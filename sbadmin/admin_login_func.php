<?php

$connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
$uname = $_POST['user'];
$pw = $_POST['password'];

$qry = "SELECT email , password from sbadmin";
$result = mysqli_query($connection_obj, $qry);
if (!$result) {
    echo 'Invalid Credentials!';
} else {
    while ($row = mysqli_fetch_array($result)) {
        $admin_uname = $row['email'];
        $admin_pass = $row['password'];
        if ($admin_uname == $uname && $pw == $admin_pass) {
            session_start();
            $_SESSION['admin_uname'] = $admin_uname;
            echo 'Login Sucessfull';
        } else {
            echo 'Invalid Credentials!';
        }
    }
}
?>