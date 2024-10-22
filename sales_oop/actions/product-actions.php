<?php
include "../classes/Product.php";

//Create an obj
$product = new Product;

//Call the Method
$product->addProduct($_POST);

//Call the Method
$product->editProduct($_POST);


?>