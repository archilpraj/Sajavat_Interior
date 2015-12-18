<?php

$type = $_GET['tab'];

$up_connect = mysqli_connect("localhost", "root", "", "sj_database");
if ($up_connect->errno) {
    echo "Error connecting to the database";
}
if ($type = "bed") {
    $up_id = $_POST['product_id'];
    $up_name = $_POST['product_name'];
    $up_price = $_POST['product_price'];
    $up_desc = $_POST['product_desc'];
    $up_stock = $_POST['product_stock'];
    $up_h = $_POST['product_h'];
    $up_w = $_POST['product_w'];
    $up_d = $_POST['product_d'];
    $up_color = $_POST['product_color'];
    $up_warranty = $_POST['product_warranty'];
    $up_assembly = $_POST['assembly'];
    $up_material = $_POST['material'];
    $up_storage = $_POST['storage'];
    $up_bed_type = $_POST['bed_type'];



    $target_dir = "../Pr_Images/Bed/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
    $target_file4 = $target_dir . basename($_FILES["image4"]["name"]);
    $target_file5 = $target_dir . basename($_FILES["image5"]["name"]);
    $target_file6 = $target_dir . basename($_FILES["image6"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5);
    move_uploaded_file($_FILES["image6"]["tmp_name"], $target_file6);

    echo "Successfully Added Data To The Database";


    $up_qry = "Insert Into product_bed values ('$up_id','$up_name','$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$target_file6',$up_price,'$up_desc',$up_stock,$up_h,$up_w,'$up_color','$up_warranty',$up_d,'$up_assembly','$up_material','$up_storage','$up_bed_type')";
    $up_res = mysqli_query($up_connect, $up_qry);
} else if ($_GET['tab'] = "bksfunit") {
    $up_id = $_POST['product_id'];
    $up_name = $_POST['product_name'];
    $up_price = $_POST['product_price'];
    $up_stock = $_POST['product_stock'];
    $up_shape = $_POST['shape'];
    $up_material = $_POST['material'];
    $up_desc = $_POST['product_desc'];
    $up_assembly = $_POST['assembly'];
    $up_floor_standing = $_POST['floor_standing'];
    $up_storage_type = $_POST['storage_type'];
    $up_with_storage = $_POST['with_storage'];
    $up_size = $_POST['size'];



    $target_dir = "../Pr_Images/Bookshelf_dis_unit/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
    $target_file4 = $target_dir . basename($_FILES["image4"]["name"]);
    $target_file5 = $target_dir . basename($_FILES["image5"]["name"]);
    $target_file6 = $target_dir . basename($_FILES["image6"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5);
    move_uploaded_file($_FILES["image6"]["tmp_name"], $target_file6);

    echo "Successfully Added Data To The Database";


    $up_qry = "Insert Into product_bookshelf_display_unit values ('$up_id','$up_name',$up_price,$up_stock,'$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$target_file6',$up_shape,'$up_material',$up_desc,$up_assembly,$up_floor_standing,'$up_storage_type','$up_with_storage',$up_size)";
    $up_res = mysqli_query($up_connect, $up_qry);
} else if ($_GET['tab'] = "sofa") {
    $up_id = $_POST['product_id'];
    $up_name = $_POST['product_name'];
    $up_price = $_POST['product_price'];
    $up_stock = $_POST['product_stock'];
    $up_shape = $_POST['shape'];
    $up_material = $_POST['material'];
    $up_desc = $_POST['product_desc'];
    $up_assembly = $_POST['assembly'];
    $up_floor_standing = $_POST['floor_standing'];
    $up_storage_type = $_POST['storage_type'];
    $up_with_storage = $_POST['with_storage'];
    $up_size = $_POST['size'];



    $target_dir = "../Pr_Images/Bookshelf_dis_unit/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
    $target_file4 = $target_dir . basename($_FILES["image4"]["name"]);
    $target_file5 = $target_dir . basename($_FILES["image5"]["name"]);
    $target_file6 = $target_dir . basename($_FILES["image6"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5);
    move_uploaded_file($_FILES["image6"]["tmp_name"], $target_file6);

    echo "Successfully Added Data To The Database";


    $up_qry = "Insert Into product_bookshelf_display_unit values ('$up_id','$up_name',$up_price,$up_stock,'$target_file1','$target_file2','$target_file3','$target_file4','$target_file5','$target_file6',$up_shape,'$up_material',$up_desc,$up_assembly,$up_floor_standing,'$up_storage_type','$up_with_storage',$up_size)";
    $up_res = mysqli_query($up_connect, $up_qry);
}
?>