<?php
//you canNOT access directory this page
session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

require "connection.php";

function getAllSections(){
    $conn = connection();
    $sql = "SELECT * FROM sections";

    if($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all sections: ". $conn->error);
    }
}

function createProduct($name, $description, $price, $section_id){
    $conn = connection();
    $sql = "INSERT INTO products
                      (name, description, price, section_id) 
                VALUE ('$name','$description','$price','$section_id')
            ";
    if ($conn->query($sql)) {
        header('refresh: 0');
    } else {
        die('Error adding products: '. $conn->error);
    }
}

if(isset($_POST['btn_add'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $section_id = $_POST['section_id'];
    createProduct($name, $description, $price, $section_id);
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
    <title>Add Products</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <h2 class="fw-light mb-3">New Products</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label small fw-bold">Name</label>
                        <input type="text" name="name" class="form-control" max="50" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label small fw-bold">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label small fw-bold">Price</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" id="price" class="form-control" stop="any" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="section_id" class="form-label small fw-bold">Section</label>
                        <select name="section_id" id="section_id" class="form-select" required>
                            <option value="" hidden>Select Section</option>
                            <?php
                            $all_sections = getAllSections();
                            
                            while($section = $all_sections->fetch_assoc()){
                                echo $section['name'];
                                echo "<option value='".$section["id"]."' >".$section["name"]."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <a href="../minimart-catalog/products.php" class="btn btn-outline-success">Cancel</a>
                    <button type="submit" name="btn_add" class="btn btn-success fw-bold px-5">
                        <i class="fa-solid fa-plus"></i> Add
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>