<?php

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header("location:admin_login.php");
}

function add_bed($p_id, $p_name, $p_img, $p_img2, $p_img3, $p_img4, $p_img5, $p_img6, $p_price, $p_desc, $p_stock, $p_h, $p_w, $p_color, $p_warranty, $p_d, $p_assembly, $p_material, $p_storage, $p_type) {
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $sql = mysqli_query($connection_obj, "INSERT INTO product_bed VALUES('" . $p_id . "','" . $P_name . "','" . $p_img . "','" . $p_img2 . "','" . $p_img3 . "','" . $p_img4 . "','" . $p_img5 . "','" . $p_img6 . "'," . $p_price . ",'" . $p_desc . "'," . $p_stock . "," . $p_h . "," . $p_w . ",'" . $p_color . "','" . $p_warranty . "'," . $p_d . ",'" . $p_assembly . "','" . $p_material . "','" . $p_storage . "','" . $p_type . "')");
    if (!$sql) {
        echo mysql_error();
    } else {
        echo "Data Sucessfully Inserted!";
    }
}

;

function update($id, $name, $cnct, $dob, $gend, $add, $dateoc, $disdia, $med, $cfees, $tfees) {
    $age = date_diff(date_create($dob), date_create('today'))->y;
    $qry = mysql_query("update sta_archil set NAME='" . $name . "',CONTACT='" . $cnct . "',DOB='" . $dob . "',AGE='" . $age . "',GENDER='" . $gend . "',ADDRESS='" . $add . "',DATEOC='" . $dateoc . "',DISEASE='" . $disdia . "',MEDICINE='" . $med . "',CFEES='" . $cfees . "',TFEES='" . $tfees . "' where ID='" . $id . "'");
    menu();
}

;

function delete($id) {
    $qry = mysql_query("delete from sta_archil where ID=" . $id);
    menu();
}

;

function disp_beds() {
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $sql="select * from product_bed";
    $qry = mysqli_query($connection_obj,$sql);

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
}

;

function disp_bed_side_table() {
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
        echo "<td><center>" . $row['product_style   '] . "</center></td>";
        echo "</tr>";
    }
}

;
function disp_bookshlf_disp_unit() {
    $connection_obj = mysqli_connect("localhost", "root", "", "sj_database") or die(mysql_error());
    $qry = mysqli_query($connection_obj, "select * from product_bookshelf_display_unit");

    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><center>" . $row['product_id'] . "</center></td>";
        echo "<td><center>" . $row['product_name'] . "</center></td>";
        echo "<td><center><img height='75px' width='150px' src=../" . $row['product_img'] . "></center></td>";
        echo "<td><center>" . $row['product_price'] . "</center></td>";
        echo "<td><center>" . $row['product_stock'] . "</center></td>";
        echo "<td><center>" . $row['product_color'] . "</center></td>";
        echo "<td><center>" . $row['material'] . "</center></td>";
        echo "<td><center>" . $row['storage_type'] . "</center></td>";
        echo "<td><center>" . $row['size'] . "</center></td>";
        echo "</tr>";
    }
}

;

function editmenu() {
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
}

;
?>  