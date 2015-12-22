<?php

if ($_GET['val'] == 'changestatus') {
    $st = $_GET['status'];
    if ($st == "Cancel") {
        $con = mysqli_connect("localhost", "root", "", "sj_database");
        $id = $_GET['id'];
        $sql = "select * from new_order where order_id=" . $id;
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        $pname = $row['product_name'];
        $uid = $row['user_id'];
        $totamt = $row['total_amt'];
        $pay = $row['payment_mode'];
        $os = "Cancelled By User";
        $od = $row['order_date'];
        $dt = '';
        $sql1 = "delete from new_order where order_id=" . $id;
        mysqli_query($con, $sql1);
        $sql2 = "insert into old_order(order_id,product_name,user_id,total_amt,payment_mode,order_status,order_date,delivery_date) values($id,'$pname','$uid',$totamt,'$pay','$os','$od','$dt')";
        mysqli_query($con, $sql2);
        echo "Done";
    } else if ($st == "Refund") {
        $con = mysqli_connect("localhost", "root", "", "sj_database");
        $id = $_GET['id'];
        $sql = "select * from old_order where order_id=" . $id;
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        $pname = $row['product_name'];
        $uid = $row['user_id'];
        $totamt = $row['total_amt'];
        $pay = $row['payment_mode'];
        $os = $row['order_status'];
        $reqfor = "Request For Refund";
        $od = $row['order_date'];
        $dt = $row['delivery_date'];
        $sql1 = "delete from old_order where order_id=" . $id;
        mysqli_query($con, $sql1);
        $sql2 = "insert into order_refund_return(order_id,product_name,user_id,order_del_date,status,request_for) values($id,'$pname','$uid','$dt','$os','$reqfor')";
        mysqli_query($con, $sql2);
        echo "Done";
    } else if ($st == "Replace") {
        $con = mysqli_connect("localhost", "root", "", "sj_database");
        $id = $_GET['id'];
        $sql = "select * from old_order where order_id=" . $id;
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        $pname = $row['product_name'];
        $uid = $row['user_id'];
        $totamt = $row['total_amt'];
        $pay = $row['payment_mode'];
        $os = $row['order_status'];
        $reqfor = "Request For Replace";
        $od = $row['order_date'];
        $dt = $row['delivery_date'];
        $sql1 = "delete from old_order where order_id=" . $id;
        mysqli_query($con, $sql1);
        $sql2 = "insert into order_refund_return(order_id,product_name,user_id,order_del_date,status,request_for) values($id,'$pname','$uid','$dt','$os','$reqfor')";
        mysqli_query($con, $sql2);
        echo "Done";
    }
}
?>