<?php
include 'array-age-discount-function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kredo Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="w-50 text-center mx-auto mb-5">
            <form method="post">
                <label class="form-label display-4">How many people are going to eat?</label>
                <input type="number" name="number_of_people" class="form-control form-control-lg text-center border-primary" min="1" required>

                <input type="submit" name="submit" value="Submit" class="btn btn-success text-uppercase w-50 mt-4">
            </form>
        </div>

        <?php
        if(isset($_POST['submit'])) {
            $number_of_people = $_POST['number_of_people'];
        ?>
        <hr>
        <div class="w-50 text-center mx-auto">
            <form method="post">
                <label class="display-4 mb-4">Ages of the people attending:</label>
                <?php
                for ($i = 0; $i < $number_of_people; $i++) {
                ?>
                    <input type="number" name="age[]" class="form-control form-control-lg text-center mb-3" min="0" placeholder="Enter age here">
                <?php
                }
                ?>
                <input type="submit" name="save" value="Save" class="btn btn-primary text-uppercase w-50">
            </form>
        </div>
        <?php
        } elseif(isset($_POST['save'])) {
            $age_array = $_POST['age'];
            $age_counter = count($age_array);
        ?>
        <div class="w-25 mx-auto">
            <table class="table table-bordered border-dark">
                <thead class="table-dark text-center">
                    <tr>
                        <th>AGE</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($age_array as $age){
                    $discounted_price[] = checkPrice($age);
                ?>
                    <tr>
                        <td class="text-center"><?php echo $age?></td>
                        <td class="text-end"><?php echo checkPrice($age)?></td>
                    </tr>
                <?php
                }
                ?>
                    <tr class="bg-danger text-white border-danger">
                        <td>Total Price</td>
                        <td class="text-end fw-bold"><?php echo total($discounted_price); ?></td>
                    </tr>
                    <tr class="bg-primary text-white border-primary">
                        <td>Number of People</td>
                        <td class="text-end fw-bold"><?php echo $age_counter ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>

