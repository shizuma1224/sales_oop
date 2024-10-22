<?php
session_start();

if (empty($_SESSION)) {
    header("location: ../views/");
    exit;
}

include "../classes/Product.php";

$product = new Product;
$buy_quantity = $_GET["buy_quantity"];
$product_id = $_GET["product_id"];
$productData = $product->getProduct($product_id);
$productPayment = $product->payProduct($product_id, $buy_quantity);
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
                    <h1 class="display-4 fw-bold text-success text-center"><i class="fa-solid fa-pen-to-square"></i> Payment</h1>

                    <form action="../actions/payment.php?product_id=<?= $product_id ?>" method="post" class="w-75 mx-auto pt-4 p-5">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="product-name" class="form-label small text-secondary">Product Name</label>
                                <h1 class="fw-bold"><?= $productData['product_name'] ?></h1>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label small text-secondary">Total Price</label>
                                <div class="input-group mb-3">
                                    <?php
                                    $total_price = $productData['price'] * $_POST['buy_quantity'];

                                    ?>
                                    <h1 class="fw-bold">$<?= $total_price ?></h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="buy_quantity" class="form-label small text-secondary">Buy Quantity</label>
                                <h1 class="fw-bold"><?= $_POST['buy_quantity'] ?></h1>
                                <span class="text-danger">Maximum of <?= $productData['quantity'] ?></span>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <label for="payment" class="form-label small text-secondary">Payment</label>
                                <div class="input-group mb-3 text-center">
                                    <span class="input-group-text" id="payment-tag">$</span>
                                    <input type="number" name="payment" min="<?= $total_price ?>" id="payment" class="form-control" aria-label="Price" aria-describedby="price-tag">
                                </div>
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