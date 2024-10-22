<?php
//you canNOT access directory this page
session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

require "connection.php";

$id = $_GET['id'];
$product = getProduct($id);
// $products is an associative array

function getProduct($id){
    $conn = connection();
    $sql = "SELECT * FROM products WHERE id = $id";

    if($result = $conn->query($sql)){
        return $result->fetch_assoc();
        // return an associative array
        // Since we are expectiong 1 row only
    } else {
        die("Error retrieving all products: ". $conn->error);
    }
}

function getAllSections(){
    $conn = connection();
    $sql = "SELECT * FROM sections";

    if($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all sections: ". $conn->error);
    }
}

if(isset($_POST['btn_update'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $section_id = $_POST['section_id'];

    updateProduct($id, $name, $description, $price, $section_id);
}

function updateProduct($id, $name, $description, $price, $section_id) {
    $conn = connection();
    $sql = "UPDATE products SET `name` = '$name',
                                `description` = '$description',
                                `price` = $price,
                                `section_id` = $section_id
                          WHERE id = $id
           ";
           if($conn->query($sql)) {
            header ('location: products.php');
            exit;
           } else {
            die("Error updating product: ". $conn->error);
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

    <title>Edit Product</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <h2 class="fw-light mb-3">Edit Product</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label small fw-bold">Name</label>
                        <input type="text" name="name" class="form-control" value="<?=$product['name']?>" max="50" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label small fw-bold">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control" required><?=$product['description']?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label small fw-bold">Price</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" id="price" class="form-control" value="<?=$product['price']?>" stop="any" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="section_id" class="form-label small fw-bold">Section</label>
                        <select name="section_id" id="section_id" class="form-select" required>
                            <option value="" hidden>Select Section</option>
                            <?php
                            $all_sections = getAllSections();
                            
                            while($section = $all_sections->fetch_assoc()){
                                if($section['id'] == $product['section_id']){
                                    echo "<option selected value='" . $section['id']."'>".$section['name']."</option>";
                                } else {
                                    echo "<option value='" . $section['id']."'>".$section['name']."</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <a href="../minimart-catalog/products.php" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" name="btn_update" class="btn btn-secondary fw-bold px-5">
                        <i class="fa-solid fa-check"></i> Save changes
                    </button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>