<?php
include "../classes/Product.php";

//Create an obj
$product = new Product;

//Call the Method
$product->deleteProduct($_GET['product_id']);


?>