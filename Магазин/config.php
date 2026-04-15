<?php $conn = new mysqli(
    "pma.mamedov.info", 
    "root",
    "0907",
    "shop"
);

$result = $conn -> query("SELECT * FROM products");

$products = $result->fetch_all(MYSQLI_ASSOC);

?>