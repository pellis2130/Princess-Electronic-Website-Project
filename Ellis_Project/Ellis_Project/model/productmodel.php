<?php
require_once('database.php');

function getProducts() {
    $conn = getDB();
    return $conn->query("SELECT * FROM products");
}

function addProduct($id) {
    $conn = getDB();
    $conn->query("UPDATE products SET QuantityInCart = 1 WHERE ProductId = '$id'");
}

function increaseProduct($id) {
    $conn = getDB();
    $conn->query("UPDATE products SET QuantityInCart = QuantityInCart + 1 WHERE ProductId = '$id'");
}

function decreaseProduct($id) {
    $conn = getDB();
    $conn->query("UPDATE products SET QuantityInCart = GREATEST(QuantityInCart - 1, 0) WHERE ProductId = '$id'");
}

function removeProduct($id) {
    $conn = getDB();
    $conn->query("UPDATE products SET QuantityInCart = 0 WHERE ProductId = '$id'");
}
?>