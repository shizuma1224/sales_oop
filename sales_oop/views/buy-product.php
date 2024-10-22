<?php
session_start();

if (empty($_SESSION)) {
    header("location: ../views/");
    exit;
}

include "../classes/Product.php";

$product = new Product;
$product_id = $_GET["product_id"];
$productData = $product->getProduct($product_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    include 'nav-main.php';
    ?>

    <div class="container" id="edit-product" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
                <div class="mx-auto w-75 p-5">
                    <h1 class="display-4 fw-bold text-success text-center"><i class="fa-solid fa-pen-to-square"></i> Buy Product</h1>

                    <form action="../views/payment.php?product_id=<?= $product_id ?>" method="post" class="w-75 mx-auto pt-4 p-5">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="product-name" class="form-label small text-secondary">Product Name</label>
                                <h1 class="fw-bold"><?= $productData['product_name'] ?></h1>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label small text-secondary">Price</label>
                                <div class="input-group mb-3">
                                    <h1 class="fw-bold">$<?= $productData['price'] ?></h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label small text-secondary">Stocks Left</label>
                                <h1 class="fw-bold"><?= $productData['quantity'] ?></h1>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 mx-auto">
                                <label for="buy_quantity" class="form-label small text-secondary">Quantity</label>
                                <input type="number" name="buy_quantity" id="buy_quantity" class="form-control" max="<?= $productData['quantity'] ?>" require>
                            </div>

                        <div class="row text-center">
                            <div class="col-md">
                                <button type="submit" class="btn btn-success w-75" name="pay_product">Pay</button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</body>
</html>