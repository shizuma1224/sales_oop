<?php
session_start();

if (empty($_SESSION)) {
    header("location: ../views/");
    exit;
}

include "../classes/Product.php";

$product = new Product;

$product_list = $product->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include 'nav-main.php';
    ?>

    <div class="container mt-5">
        <div class="card w-75 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <div class="row">
                    <div class="col text-start">
                        <h1 class="display-6 fw-bold">Product List</h1>
                    </div>
                    <div class="col text-end">
                        <i class="fa-solid fa-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#add-product" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php
                if ($product_list != Null) {        
                ?>
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($product_list as $product) {
                            ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= $product['product_name'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                    <td><?= $product['quantity'] ?></td>
                                    <td class="">
                                        <a href="edit-product.php?product_id=<?= $product['id'] ?>" class="btn btn-warning btn-sm" title="Edit Product"><i class="fa-solid fa-pen"></i></a>
                                        <a href="../actions/delete-product.php?product_id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" title="Delete Product"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                    <?php
                                    if ($product['quantity'] > 0) {
                                    ?>
                                        <td>
                                            <a href="../views/buy-product.php?product_id=<?= $product['id'] ?>" class="btn btn-success btn-sm" title="Buy Product"><i class="fa-solid fa-cash-register"></i></a>
                                        </td>
                                    <?php
                                    } else {
                                    ?>
                                        <td>
                                        </td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                      <div class="container-fluid bg-dark p-5 text-danger text-center">
                        <h1 class="display-6 fw-bold pt-5 pb-3">No Records Found</h1>
                        <i class="fa-regular fa-circle-xmark fa-8x pb-5"></i>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- ADD PRODUCT MODAL -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <h1 class="display-4 fw-bold text-info text-center"><i class="fa-solid fa-box"></i> Add Product</h1>

                    <form action="../actions/product-actions.php" method="post" class="w-75 mx-auto pt-4 p-5">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="product-name" class="form-label small text-secondary">Product Name</label>
                                <input type="text" name="product_name" id="product-name" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label small text-secondary">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="price-tag">$</span>
                                    <input type="number" name="price" id="price" class="form-control" aria-label="Price" aria-describedby="price-tag">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label small text-secondary">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <button type="submit" class="btn btn-info w-100" name="add_product">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>