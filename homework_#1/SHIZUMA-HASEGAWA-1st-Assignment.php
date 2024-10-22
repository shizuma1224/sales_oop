<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Homework #1</title>
</head>

<body>

    <form action="" method="post">
        <!-- INPUT NUMBER OF PRODUCTS -->
        <div class="mx-auto mt-2 w-50 text-center bg-dark text-white">
            <h2 class="py-3">How many products do you want to buy?</h2>
            <input type="number" name="num_products" class="form-control mx-auto w-50 my-3" required min="1">
            <button type="submit" name="btn_submit" class="btn btn-primary w-25 my-3">Submit</button>
        </div>
    </form>
        <!-- DETAILS OF THE PRODUCTS -->
        <div class="mx-auto mt-2 px-4 w-50 text-center bg-dark text-white">
            <?php
            if(isset($_POST['btn_submit']))
            {
                $num_products = $_POST['num_products'];
            ?>
                <h2 class="py-4">Details of the Products</h2>
                <div class="row text-warning">
                    <div class="col text-start">
                        <h4>Product Name</h4>
                    </div>
                    <div class="col text-end">
                        <h4>Product Price</h4>
                    </div>
                </div>

                <form action="" method="post">
                    <?php
                    for($i = 1;$i <= $num_products; $i++) {
                        echo "<div class='row my-3'>";
                            echo "<div class='col'>";
                                echo "<input type='text' name='product_name[]' class='form-control' required placeholder='Product $i'>";
                            echo "</div>";
                            echo "<div class='col'>";
                                echo "<input type='number' name='product_price[]' class='form-control' required min='0' placeholder='Product $i Price'>";
                            echo "</div>";
                        echo "</div>";
                    }?>
                    <button type="submit" name="btn_save" class="btn btn-warning w-25 my-3">Save</button>
                </form>
            <?php
            }
            if(isset($_POST['btn_save'])) 
            {
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
             ?>
                <h2 class="py-4">Buy Quantity</h2>
                <div class="row text-danger">
                    <div class="col text-start">
                        <h4>Product Price</h4>
                    </div>
                    <div class="col text-end">
                        <h4>Product Quantity</h4>
                    </div>
                </div>

                <form action="" method='post'>
                    <?php
                    foreach(array_map(null,$product_name,$product_price) as [$product,$price])
                    {
                        echo "<div class='row my-3'>";
                            echo "<div class='col text-start'>";
                                echo "<label for='product_prices' class='form-label'>$product's Price</label>";
                                echo "<input type='text' name='product_prices[]' class='form-control' required value='$price'>";
                            echo "</div>";
                            echo "<div class='col text-end'>";
                                echo "<label for='buy_quantities' class='form-label'>$product's Quantity</label>";
                                echo "<input type='number' name='buy_quantities[]' class='form-control' required min='1''>";
                            echo "</div>";
                        echo "</div>";
                        echo "<input type='hidden' name='product_names[]' value='$product'>";
                    }
                    ?>
                    <div class="row bg-info w-50 mx-auto text-dark fst-italic rounded">
                        <span><i class="fa-solid fa-tag"></i> avail 10% discount for every 10pcs /</span>
                        <span>quantities EACH PRODUCT!</span>
                    </div>
                    <button type="submit" name="btn_compute" class="btn btn-danger w-100 my-4">Compute</button>
            <?php
            }
                if(isset($_POST['btn_compute']))
                {
                    $product_prices = $_POST['product_prices'];
                    $buy_quantities = $_POST['buy_quantities'];
                    $product_names = $_POST['product_names'];
                ?>
                <h2 class="py-4">Sales Summary</h2>
                <table class="table table-borderless table-dark table-striped">
                    <thead class="table text-warning">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody class="tabel text-white">
                <?php
                    $grand_total = 0;
                    foreach(array_map(null,$product_prices,$buy_quantities,$product_names) as [$product_price,$buy_quantity,$product_name])
                    {
                        if($buy_quantity < 10)
                        {
                            $discount = "no discount";
                            $total_price = $product_price * $buy_quantity;
                            echo"<tr>";
                                echo"<td>$product_name</td>";
                                echo"<td>$$product_price.00</td>";
                                echo"<td>$buy_quantity</td>";
                                echo"<td class='fst-italic'>$discount</td>";
                                echo"<td>$$total_price.00</td>";
                            echo"</tr>";
                            $grand_total += $total_price;
                        } else {
                            $discount = $product_price * intdiv($buy_quantity,10);
                            $total_price = $product_price * ($buy_quantity-intdiv($buy_quantity,10));
                            echo"<tr>";
                            echo"<td>$product_name</td>";
                            echo"<td>$$product_price.00</td>";
                            echo"<td>$buy_quantity</td>";
                            echo"<td>$$discount.00</td>";
                            echo"<td>$$total_price.00</td>";
                            echo"</tr>";
                            $grand_total += $total_price;
                        }
                    }
                ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-danger h3 fw-bold text-end" colspan="2">Grand Total : </td>
                            <td class="h3 fw-bold">$<?= $grand_total ?>.00</td>
                        </tr>
                    </tbody>
                </table>
                <a href="SHIZUMA-HASEGAWA-1st.php" class="btn btn-secondary my-4 w-50">Back to homepage</a>
            </form>     
                <?php
                }
                ?>
        </div>        
</body>
</html>