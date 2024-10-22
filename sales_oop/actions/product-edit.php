<?php
include "../classes/Product.php";

$product_id = $_GET["product_id"];

//Create an obj
$product = new Product;

//Call the Method
$product->editProduct($_POST,$product_id);

?>