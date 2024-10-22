<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>If Else Activity</title>
</head>
<body>
    <div class="container">
        <div class="fst-italic text-center">
            <?php
                if (isset($_POST['btn_submit'])) {
                    $number = $_POST['number'];
 
                for($counter = 1; $counter <= $number; $counter++) 
                    echo "<p> $counter</p>";
                }
            ?>
        </div>
        <form action="" method="post" class="row w-50 mx-auto">
            <!-- number -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="number" class="form-label">Number </label>
                    <input type="number" name="number" id="" class="form-control border border-secondary">
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