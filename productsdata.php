<?php

if ($_GET['tb'] == "product_bed") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $pcolor = $row['product_color'];
    $pwarranty = $row['product_warranty'];
    $assembly = $row['product_assembly'];
    $material = $row['product_material'];
    $storage = $row['storage'];
    $desc = $row['product_desc'];
    $btype = $row['bed_type'];
    $h = $row['product_h'];
    $w = $row['product_w'];
    $d = $row['product_d'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata = "<tr><th>Availability</th><th>Dimensions</th><th>Color</th><th>Warranty</th><th>Assembly</th><th>Product Material</th><th>Storage</th><th>Bed Type</th></tr><tr><td>$stckval</td><td>H=$h+ W=$w+ D=$d</td><td>$pcolor</td><td>$pwarranty</td><td>$assembly</td><td>$material</td><td>$storage</td><td>$btype</td></tr>";
}
else if ($_GET['tb'] == "product_sofa") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $pcolor = $row['colour'];
    $pwarranty = $row['warranty'];
    $assembly = $row['assembly'];
    $material = $row['primary_material'];
    $desc = $row['product_desc'];
    $btype = $row['room_type'];
    $h = $row['product_h'];
    $w = $row['product_w'];
    $d = $row['product_d'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata = "<tr><th>Availability</th><th>Dimensions</th><th>Color</th><th>Warranty</th><th>Assembly</th><th>Product Material</th><th>Room Type</th></tr><tr><td>$stckval</td><td>H=$h+ W=$w+ D=$d</td><td>$pcolor</td><td>$pwarranty</td><td>$assembly</td><td>$material</td><td>$btype</td></tr>";
}

else if ($_GET['tb'] == "bed_side_table") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $pstorage = $row['product_storage'];
    $ptts = $row['product_table_top_shape'];
    $pstyle= $row['product_style'];
    $pts = $row['product_table_shape'];
    $ptm = $row['product_table_material'];
    $pshape= $row['product_shape'];
    $ptt= $row['product_table_type'];
    $pcolor = $row['product_color'];
    $material = $row['product_material'];
    $desc = $row['product_description'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata = "<tr><th>Availability</th><th>Product Storage</th><th>Product Table Top Shape</th><th>Product Style</th><th>Product Table Shape</th><th>Product Table Material</th><th>Product Shape</th><th>Product Table Type</th><th>Color</th><th>Product Material</th></tr><tr><td>$stckval</td><td>$pstorage</td><td>$ptts</td><td>$pstyle</td><td>$pts</td><td>$ptm</td><td>$pshape</td><td>$ptt</td><td>$pcolor</td><td>$material</td></tr>";
}

else if ($_GET['tb'] == "product_dinning_table") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $pts = $row['table_storage'];
    $pr = $row['primary_room'];
    $tshape= $row['table_shape'];
    $assembly= $row['assembly'];
    $tss= $row['table_sitting_space'];
    $tm= $row['table_material'];
    $um= $row['upholstery_material'];
    $ct= $row['chair_type'];
    $material= $row['material'];
    $cm= $row['chair_material'];
    $cust= $row['cushain_type'];
    $desc = $row['product_desc'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata= "<tr><th>Availibility</th><th>Table Storage</th><th>Primary Room</th><th>Table Shape</th><th>Assembly</th><th>Table Sitting Space</th><th>Table Material</th><th>Upholstery Material</th><th>Chair Type</th><th>Material</th><th>Chair Material</th><th>Cushain Type</th></tr><tr><td>$stckval</td><td>$pts</td><td>$pr</td><td>$tshape</td><td>$assembly</td><td>$tss</td><td>$tm</td><td>$um</td><td>$ct</td><td>$material</td><td>$cm</td><td>$cust</td></tr>";
}

else if ($_GET['tb'] == "product_tv_unit") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $wm = $row['wall_mount'];
    $fs = $row['floor_standing'];
    $pr= $row['primary_room'];
    $desc = $row['product_desc'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata="<tr><th>Availibility</th><th>Wall Mount</th><th>Floor Standing</th><th>Primary Room</th></tr><tr><td>$stckval</td><td>$wm</td><td>$fs</td><td>$pr</td></tr>";
}

else if ($_GET['tb'] == "product_dresser_mirror") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $fm= $row['frame_material'];
    $st= $row['storage_type'];
    $type= $row['type'];
    $desc = $row['product_desc'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata="<tr><th>Availibility</th><th>Frame Material</th><th>Storage Type</th><th>Type</th></tr><tr><td>$stckval</td><td>$fm</td><td>$st</td><td>$type</td></tr>";
}

else if ($_GET['tb'] == "product_bookshelf_display_unit") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $shape= $row['shape'];
    $material= $row['material'];
    $assembly= $row['assembly'];
    $fs= $row['floor_standing'];
    $st= $row['storage_type'];
    $ws= $row['with_storage'];
    $size= $row['size'];
    $desc = $row['product_desc'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata="<tr><th>Availibility</th><th>Shape</th><th>Material</th><th>Assembly</th><th>Floor Standing</th><th>Storage Type</th><th>With Storage</th><th>Size</th></tr><tr><td>$stckval</td><td>$shape</td><td>$material</td><td>$assembly</td><td>$fs</td><td>$st</td><td>$ws</td><td>$size</td></tr>";
}

else if ($_GET['tb'] == "product_table") {
    $sql = "select * from $p_tb where product_id='$p_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $pstock = $row['product_stock'];
    $color= $row['colour'];
    $st= $row['storage_type'];
    $sc= $row['sitting_capacity'];
    $material= $row['material'];
    $shape= $row['shape'];
    $size= $row['size'];
    $style= $row['style'];
    $ts= $row['table_shape'];
    $tm= $row['table_material'];
    $as= $row['assembly_type'];
    $desc = $row['product_desc'];
    if ($pstock > 0) {
        $stckval = '<font color=green>In Stock</font>';
    } else {
        $stckval = '<font color=red>Out Of Stock</font>';
    }
    $tdata="<tr><th>Availibility</th><th>Color</th><th>Storage Type</th><th>Sitting Capacity</th><th>Material</th><th>Shape</th><th>Size</th><th>Style</th><th>Table Shape</th><th>Table Material</th><th>Assembly</th></tr><tr><td>$stckval</td><td>$color</td><td>$st</td>$sc<td>$material</td><td>$shape</td><td>$size</td><td>$style</td><td>$ts</td><td>$tm</td><td>$as</td></tr>";
}