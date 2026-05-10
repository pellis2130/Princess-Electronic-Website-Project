<?php
/*
    Name: Princess Ellis
    File: cart.php
    Description: Displays cart items and totals using MVC structure.
*/

require_once('../model/database.php');

$conn = getDB();

$result = $conn->query("SELECT * FROM products WHERE QuantityInCart > 0");

$subtotal = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<h1>Princess Electronic Store</h1>
<hr>

<h2>Shopping Cart</h2>

<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Cost</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { 
        $itemTotal = $row['ProductCost'] * $row['QuantityInCart'];
        $subtotal += $itemTotal;
    ?>
        <tr>
            <td><?php echo $row['ProductId']; ?></td>
            <td><?php echo $row['ProductName']; ?></td>
            <td>$<?php echo number_format($row['ProductCost'], 2); ?></td>
            <td><?php echo $row['QuantityInCart']; ?></td>
            <td>$<?php echo number_format($itemTotal, 2); ?></td>
        </tr>
    <?php } ?>

</table>

<?php
$tax = $subtotal * 0.05;
$shipping = $subtotal * 0.10;
$total = $subtotal + $tax + $shipping;
?>

<h3>Subtotal: $<?php echo number_format($subtotal, 2); ?></h3>
<h3>Tax 5%: $<?php echo number_format($tax, 2); ?></h3>
<h3>Shipping 10%: $<?php echo number_format($shipping, 2); ?></h3>
<h2>Total: $<?php echo number_format($total, 2); ?></h2>

<br>

<a href="../controller/product_controller.php?checkout=true"
   onclick="return confirm('Checkout will clear your cart. Continue?');">
   Checkout
</a>

<br><br>

<a href="catalog.php">Back to Catalog</a>

<hr>
<p>&copy; 2026 Princess Electronic Store</p>

</body>
</html>

<?php
$conn->close();
?>
