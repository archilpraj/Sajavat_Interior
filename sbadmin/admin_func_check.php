<?php

include 'admin_logic.php';

if ($_GET['val'] == "add_bed") {
    add_bed($_POST['p_id'], $_POST['p_name'], $_POST['p_img'], $_POST['p_img2'], $_POST['p_img3'], $_POST['p_img4'], $_POST['p_img5'], $_POST['p_img6'], $_POST['p_price'], $_POST['p_desc'], $_POST['p_stock'], $_POST['p_h'], $_POST['p_w'], $_POST['p_color'], $_POST['p_warranty'], $_POST['p_d'], $_POST['p_assembly'], $_POST['p_material'], $_POST['p_storage'], $_POST['p_type']);
} else if ($_GET['val'] == "disp_bed") {
    disp_beds();
} else if ($_GET['val'] == "disp_bed_side_table") {
    disp_bed_side_table();
}else if ($_GET['val'] == "disp_bookshlf_disp_unit") {
    disp_bookshlf_disp_unit();
} else if ($_GET['val'] == "update") {
    update($_POST['U_ID'], $_POST['U_NAME'], $_POST['U_CNCT'], $_POST['U_DOB'], $_POST['U_GENDER'], $_POST['U_ADD'], $_POST['U_DATEOC'], $_POST['U_DIS'], $_POST['U_MED'], $_POST['U_CFEES'], $_POST['U_TFEES']);
} else if ($_GET['val'] == "delete") {
    delete($_GET['id']);
} else if ($_GET['val'] == "menu") {
    menu();
} else if ($_GET['val'] == "display") {
    editmenu();
} else if ($_GET['val'] == "logout") {
    logout();
}
?>
