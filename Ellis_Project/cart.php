<?php
/*
    Name: Princess Ellis
    File: cart.php
    Description: Displays products currently added to the shopping cart.
*/

include "includes/db.php";

$result = $conn->query("SELECT * FROM products WHERE QuantityInCart > 0");

include_once "includes/header.php";
?>

<h2>Shopping Cart</h2>

<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Cost</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>

    <?php
    $grandTotal = 0;

    while ($row = $result->fetch_assoc()) {
        $total = $row['ProductCost'] * $row['QuantityInCart'];
        $grandTotal += $total;
    ?>
        <tr>
            <td><?php echo $row['ProductId']; ?></td>
            <td><?php echo $row['ProductName']; ?></td>
            <td>$<?php echo number_format($row['ProductCost'], 2); ?></td>
            <td><?php echo $row['QuantityInCart']; ?></td>
            <td>$<?php echo number_format($total, 2); ?></td>
        </tr>
    <?php } ?>

    <tr>
        <td colspan="4"><strong>Grand Total</strong></td>
        <td><strong>$<?php echo number_format($grandTotal, 2); ?></strong></td>
    </tr>
</table>

<br>

<a href="catalog.php">Back to Catalog</a>

<?php
include_once "includes/footer.php";
$conn->close();
?>