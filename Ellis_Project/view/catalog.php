<?php
/*
    Name: Princess Ellis
    File: catalog.php
    Description: Displays products using MVC structure.
*/

require_once('../controller/product_controller.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<h1>Princess Electronic Store</h1>
<hr>

<h2>Product Catalog</h2>

<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Cost</th>
        <th>Quantity in Cart</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $products->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['ProductId']; ?></td>
            <td><?php echo $row['ProductName']; ?></td>
            <td><?php echo $row['ProductDescription']; ?></td>
            <td>$<?php echo number_format($row['ProductCost'], 2); ?></td>
            <td><?php echo $row['QuantityInCart']; ?></td>
            <td>
                <a href="catalog.php?add=<?php echo $row['ProductId']; ?>">Add</a> |
                <a href="catalog.php?increase=<?php echo $row['ProductId']; ?>">+</a> |
                <a href="catalog.php?decrease=<?php echo $row['ProductId']; ?>">-</a> |
                <a href="catalog.php?remove=<?php echo $row['ProductId']; ?>">Remove</a>
            </td>
        </tr>
    <?php } ?>
</table>

<br>

<a href="cart.php">Go to Shopping Cart</a>

<hr>
<p>&copy; 2026 Princess Electronic Store</p>

</body>
</html>