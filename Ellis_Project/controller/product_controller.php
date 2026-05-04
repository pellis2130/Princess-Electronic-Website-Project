<?php
require_once('../model/product_model.php');

if (isset($_GET['add'])) {
    addProduct($_GET['add']);
}

if (isset($_GET['increase'])) {
    increaseProduct($_GET['increase']);
}

if (isset($_GET['decrease'])) {
    decreaseProduct($_GET['decrease']);
}

if (isset($_GET['remove'])) {
    removeProduct($_GET['remove']);
}

$products = getProducts();
?>