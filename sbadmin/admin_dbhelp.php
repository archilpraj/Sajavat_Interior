<?php
session_start();
if (!isset($_SESSION['admin_uname'])) {
    header("location:admin_login.php");
} else if (isset($_SESSION['admin_uname'])) {
    header("location:admin_dashboard.php");
}


$con = mysqli_connect("localhost", "root", "", "sj_database");
if ($con->errno) {
    echo "Error connecting to the database";
}