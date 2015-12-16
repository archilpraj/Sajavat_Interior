<?php
require 'dbhelp.php';
$result =  mysqli_query($con,'select product_id,product_name,product_price,product_img from product_bed');
?>
<table border="1" style="width: 100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Images</th>
        <th>Buy</th>
    </tr>
    <?php while($product =  mysqli_fetch_object($result)){ ?>
    <tr>
        <td align="center"><?php echo $product->product_id; ?></td>
        <td align="center"><?php echo $product->product_name; ?></td>
        <td align="center"><?php echo $product->product_price; ?></td>
        <td align="center"><image src="<?php echo $product->product_img; ?>" height="100" width="100"></td>
        <td align="center"><a href="cart.php?product_id=<?php echo $product->product_id; ?>">Order Now</a></td>
    </tr>    
    <?php } ?>
</table>