<?php
/*
    Name: Princess Ellis
    File: catalog.php
    Description: Displays products from the database and allows users to add,
    remove, increase, or decrease product quantities in the cart.
*/

include "includes/db.php";

// Add product
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $conn->query("UPDATE products SET QuantityInCart = 1 WHERE ProductId = '$id'");
}

// Increase quantity
if (isset($_GET['increase'])) {
    $id = $_GET['increase'];
    $conn->query("UPDATE products SET QuantityInCart = QuantityInCart + 1 WHERE ProductId = '$id'");
}

// Decrease quantity
if (isset($_GET['decrease'])) {
    $id = $_GET['decrease'];
    $conn->query("UPDATE products SET QuantityInCart = GREATEST(QuantityInCart - 1, 0) WHERE ProductId = '$id'");
}

// Remove product
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    $conn->query("UPDATE products SET QuantityInCart = 0 WHERE ProductId = '$id'");
}

// Read products from database
$result = $conn->query("SELECT * FROM products");

include_once "includes/header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>

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

    <?php while ($row = $result->fetch_assoc()) { ?>
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

<?php
include_once "includes/footer.php";
$conn->close();
?>

</body>
</html>