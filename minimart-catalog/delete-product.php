<?php
//you canNOT access directory this page
session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

require "connection.php";

if(isset($_POST['btn_delete'])){
    $id = $_GET['id'];
    deleteProduct($id);
}

function deleteProduct($id){
    $conn = connection();
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql)) {
        header('location: products.php');
        exit; //stop connection to the database
    } else {
        die('Error deleting products: '. $conn->error);
    }
}

$id = $_GET['id'];
$product = getProduct($id);
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
    <title>Delete Product</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="text-center mb-4">
                    <i class="fa-solid fa-triangle-exclamation text-warning display-4"></i>
                    <h2 class="fw-light mb-3 text-danger">Delete Product</h2>
                    <p class="fw-bold mb-0">Are you sure you want to delete "<?= $product['name'] ?>"?</p>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="products.php" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <form action="" method="post">
                            <button type="submit" class="btn btn-outline-secondary w-100" name="btn_delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>