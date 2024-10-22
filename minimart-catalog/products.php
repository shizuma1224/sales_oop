<?php
//you canNOT access directory this page
session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

require "connection.php";

function getAllProducts(){
    $conn = connection();
    $sql = "SELECT * FROM products";

    if($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all products: ". $conn->error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Products</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="fw-light b-3 float-left">Products</h2>
            </div>
            <div class="col text-end">
                <button type="submit" name="btn_new_product" class="btn btn-success fw-bold px-5">
                    <a href="../minimart-catalog/add-products.php" class="text-decoration-none text-white"><i class="fa-solid fa-circle-plus"></i> New Product</a>
                </button>
            </div>
        </div>
        <table class="table table-sm align-middle text-center">
            <thead class="table-success">
                <tr>
                    <th class="scope-50">ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>SECTION</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-light table-group-divider">
                <?php
                    $all_products = getAllProducts();
                    
                    while($product = $all_products->fetch_assoc()){
                ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['section_id'] ?></td>
                        <td>
                            <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-secondary btn-sm" title="Edit">
                                <i class="fa-solid fa-pencil-alt"></i>
                            </a>
                            <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger btn-sm" title="Delete">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>