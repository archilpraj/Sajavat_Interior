<?php

include 'admin_logic.php';

if ($_GET['val'] == "add_bed") {
    //add_bed($_POST['p_id'], $_POST['p_name'], $_POST['p_img'], $_POST['p_img2'], $_POST['p_img3'], $_POST['p_img4'], $_POST['p_img5'], $_POST['p_img6'], $_POST['p_price'], $_POST['p_desc'], $_POST['p_stock'], $_POST['p_h'], $_POST['p_w'], $_POST['p_color'], $_POST['p_warranty'], $_POST['p_d'], $_POST['p_assembly'], $_POST['p_material'], $_POST['p_storage'], $_POST['p_type']);
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $sql = mysqli_query($connection_obj, "INSERT INTO product_bed VALUES('" . $p_id . "','" . $P_name . "','" . $p_img . "','" . $p_img2 . "','" . $p_img3 . "','" . $p_img4 . "','" . $p_img5 . "','" . $p_img6 . "'," . $p_price . ",'" . $p_desc . "'," . $p_stock . "," . $p_h . "," . $p_w . ",'" . $p_color . "','" . $p_warranty . "'," . $p_d . ",'" . $p_assembly . "','" . $p_material . "','" . $p_storage . "','" . $p_type . "')");
    if (!$sql) {
        echo mysql_error();
    } else {
        echo "Data Sucessfully Inserted!";
    }
} else if ($_GET['val'] == "disp_bed") {
    //disp_beds();
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $sql = "select * from product_bed";
    if (isset($_GET['type'])) {
        if ($_GET['type'] == 'pid') {
            $sql = $sql . " order by product_name";
        }
    }
    $qry = mysqli_query($connection_obj, $sql);

    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_color'] . "</center></td>";
        echo "<td><center>" . $row['product_material'] . "</center></td>";
        echo "<td><center>" . $row['bed_type'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_bed_side_table") {
    //disp_bed_side_table();
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $qry = mysqli_query($connection_obj, "select * from bed_side_table");

    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_color'] . "</center></td>";
        echo "<td><center>" . $row['product_material'] . "</center></td>";
        echo "<td><center>" . $row['product_table_type'] . "</center></td>";
        echo "<td><center>" . $row['product_style'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_bookshlf_disp_unit") {
    //disp_bookshlf_disp_unit();
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $qry = mysqli_query($connection_obj, "select * from product_bookshelf_display_unit");

    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['shape'] . "</center></td>";
        echo "<td><center>" . $row['material'] . "</center></td>";
        echo "<td><center>" . $row['storage_type'] . "</center></td>";
        echo "<td><center>" . $row['floor_standing'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_d_table") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from product_dinning_table";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['table_shape'] . "</center></td>";
        echo "<td><center>" . $row['table_material'] . "</center></td>";
        echo "<td><center>" . $row['material'] . "</center></td>";
        echo "<td><center>" . $row['cushain_type'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_dressors") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from product_dresser_mirror";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_desc'] . "</center></td>";
        echo "<td><center>" . $row['frame_material'] . "</center></td>";
        echo "<td><center>" . $row['storage_type'] . "</center></td>";
        echo "<td><center>" . $row['primary_room'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_sofa") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from product_sofa";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_desc'] . "</center></td>";
        echo "<td><center>" . $row['primary_material'] . "</center></td>";
        echo "<td><center>" . $row['room_type'] . "</center></td>";
        echo "<td><center>" . $row['colour'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_table") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from product_table";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_desc'] . "</center></td>";
        echo "<td><center>" . $row['material'] . "</center></td>";
        echo "<td><center>" . $row['shape'] . "</center></td>";
        echo "<td><center>" . $row['size'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "disp_tv_unit") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from product_tv_unit";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_desc'] . "</center></td>";
        echo "<td><center>" . $row['wall_mount'] . "</center></td>";
        echo "<td><center>" . $row['floor_standing'] . "</center></td>";
        echo "<td><center>" . $row['primary_room'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "new_order") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from new_order";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        $id = $row['order_id'];
        echo "<tr>";
        echo "<td><center>" . $row['order_id'] . "</center></td>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['user_id'] . "</center></td>";
        echo "<td><center>" . $row['payment_mode'] . "</center></td>";
        echo "<td><center>" . $row['order_date'] . "</center></td>";
        echo "<td><center>" . $row['total_amt'] . "</center></td>";
        echo "<td><center><select id='order2' name='$id' onchange='changestatus(this)'><option>" . $row['order_status'] . "</option><option>Completed</option></select>";
        //echo "<td><center>" . $row['order_status'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == "old_order") {
    $con = mysqli_connect("localhost", "root", "", "sj_database");
    $sql = "select * from old_order";
    $qry = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['order_id'] . "</center></td>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['user_id'] . "</center></td>";
        echo "<td><center>" . $row['payment_mode'] . "</center></td>";
        echo "<td><center>" . $row['order_date'] . "</center></td>";
        echo "<td><center>" . $row['total_amt'] . "</center></td>";
        echo "<td><center>" . $row['order_status'] . "</center></td>";
        echo "<td><center>" . $row['delivery_date'] . "</center></td>";
        echo "</tr>";
    }
} else if ($_GET['val'] == 'changestatus') {
    $con= mysqli_connect("localhost","root","","sj_database");
    $id = $_GET['id'];
    $sql = "select * from new_order where order_id=" . $id;
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $pname = $row['product_id'];
    $uid = $row['user_id'];
    $totamt = $row['total_amt'];
    $pay = $row['payment_mode'];
    $os = "Completed";
    $od = $row['order_date'];
    $dt=date('Y-m-d');
    $sql1 = "delete from new_order where order_id=" . $id;
    mysqli_query($con, $sql1);
    $sql2 = "insert into old_order(order_id,product_id,user_id,total_amt,payment_mode,order_status,order_date,delivery_date) values($id,'$pname','$uid',$totamt,'$pay','$os','$od','$dt')";
    mysqli_query($con, $sql2);
    echo "Done";
} else if ($_GET['val'] == "update") {
    update($_POST['U_ID'], $_POST['U_NAME'], $_POST['U_CNCT'], $_POST['U_DOB'], $_POST['U_GENDER'], $_POST['U_ADD'], $_POST['U_DATEOC'], $_POST['U_DIS'], $_POST['U_MED'], $_POST['U_CFEES'], $_POST['U_TFEES']);
} else if ($_GET['val'] == "delete") {
    delete($_GET['id']);
} else if ($_GET['val'] == "menu") {
    menu();
} else if ($_GET['val'] == "display") {
    //editmenu();
    $qry = mysql_query("select * from sta_archil");

    echo '
    <center>
    <table border="1">
        <tr>
            <th><center>ID</center></th>
            <th><center>NAME</center></th>
            <th><center>CONTACT</center></th>
            <th><center>DOB</center></th>
            <th><center>AGE</center></th>
            <th><center>GENDER</center></th>
            <th><center>ADDRESS</center></th>
            <th><center>DATE OF CONSULTATION</center></th>
            <th><center>DISEASE</center></th>
            <th><center>MEDICINE</center></th>
            <th><center>CONSULTATION FEES</center></th>
            <th><center>TOTAL FEES</center></th>
        </tr>
    ';

    while ($row = mysql_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['ID'] . "</center></td>";
        echo "<td><center>" . $row['NAME'] . "</center></td>";
        echo "<td><center>" . $row['CONTACT'] . "</center></td>";
        echo "<td><center>" . $row['DOB'] . "</center></td>";
        echo "<td><center>" . $row['AGE'] . "</center></td>";
        echo "<td><center>" . $row['GENDER'] . "</center></td>";
        echo "<td><center>" . $row['ADDRESS'] . "</center></td>";
        echo "<td><center>" . $row['DATEOC'] . "</center></td>";
        echo "<td><center>" . $row['DISEASE'] . "</center></td>";
        echo "<td><center>" . $row['MEDICINE'] . "</center></td>";
        echo "<td><center>" . $row['CFEES'] . "</center></td>";
        echo "<td><center>" . $row['TFEES'] . "</center></td>";
        echo "<td><center><a href='update.php?id=" . $row['ID'] . "&name=" . $row['NAME'] . "&contact=" . $row['CONTACT'] . "&dob=" . $row['DOB'] . "&gender=" . $row['GENDER'] . "&address=" . $row['ADDRESS'] . "&dateoc=" . $row['DATEOC'] . "&disease=" . $row['DISEASE'] . "&medicine=" . $row['MEDICINE'] . "&cfees=" . $row['CFEES'] . "&tfees=" . $row['TFEES'] . "'>EDIT<center></a></td>";
        echo "<td><center><a href='funcheck.php?val=delete&id=" . $row['ID'] . "'>DELETE<center></a></td>";
        echo "</tr>";
    }

    echo '
    </center>
    </table>
    ';
} else if ($_GET['val'] == "logout") {
    logout();
}
?>
