<?php
if (isset($_GET['product_id']) && !isset($_POST['update'])) {
    $table=$_GET['tb'];
    $result = mysqli_query($con, "select product_id,product_name,product_price,product_img from $table where product_id='" . $_GET['product_id'] . "'");
    $product = mysqli_fetch_object($result);
    $item = new item();
    $item->id = $product->product_id;
    $item->name = $product->product_name;
    $item->price = $product->product_price;
    $item->images = $product->product_img;
    $item->quantity = 1;
    // Check Product is existing in Cart
    $index = -1;
    if (isset($_SESSION['cart'])) {
        $cart = unserialize(serialize($_SESSION['cart']));
        for ($i = 0; $i < count($cart); $i++)
            if ($cart[$i]->id == $_GET['product_id']) {
                $index = $i;
                break;
            }
    }
    if ($index == -1)
        $_SESSION['cart'][] = $item;
    else {
        $cart[$index]->quantity++;
        $_SESSION['cart'] = $cart;
    }
}

//Delete Product in Cart
if (isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}

//Update Quantity in Cart
if (isset($_POST['update'])) {
    $arrQuantity = $_POST['quantity'];

    //Check Valid Quantity Number
    $valid = 1;
    for ($i = 0; $i < count($arrQuantity); $i++)
        if (!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
            $valid = 0;
            break;
        }
    if ($valid == 1) {
        $cart = unserialize(serialize($_SESSION['cart']));
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]->quantity = $arrQuantity[$i];
        }
        $_SESSION['cart'] = $cart;
    } else
        $error = 'Quantity is InValid';
}
if (isset($_GET['v'])) {
    if ($_GET['v'] == "empty") {
        unset($_SESSION['cart']);
    }
}
?>