<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Arithmetic-Function</title>
</head>
<body>
    <div class="container">
        <div class="fst-italic text-center">
            <?php
                if (isset($_POST['btn_submit'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    add($num1, $num2);
                }

                    function add($x, $y)
                    {
                        //addition
                        $sum = $x + $y;
                        echo "<p> The sum of $x and $y is : $sum </p>";
                        //subtraction
                        $sub = $x - $y;
                        echo "<p> The difference of $x and $y is : $sub </p>";
                        //multiplication
                        $mul = $x * $y;
                        echo "<p> The product of $x and $y is : $mul </p>";
                        //division
                        $div = $x / $y;
                        echo "<p> The quotient of $x and $y is : $div </p>";
                    }
            ?>
        </div>
        <form action="" method="post" class="row w-50 mx-auto">
            <!-- num1 -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="num1" class="form-label">Number 1 </label>
                    <input type="number" name="num1" id="" class="form-control border border-secondary">
                </div>
            </div>
            <!-- num2 -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="num2" class="form-label">Number 2 </label>
                    <input type="number" name="num2" id="" class="form-control border border-secondary">
                </div>
            </div>
            <!-- submit button -->
            <div class="row mx-auto">
                <div class="col">
                    <button type="submit" name="btn_submit" class="mt-2 w-100 bg-primary text-white border bordered-none rounded">Submit</button>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>




<!-- http://localhost/shizuma-php/pg-arithmetic-act.php -->