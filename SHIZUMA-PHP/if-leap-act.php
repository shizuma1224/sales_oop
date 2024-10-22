<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Is Leap Year?</title>
</head>
<body>
    <div class="container">
        <div class="fst-italic text-center">
            <div class='row'>
                <?php
                    if (isset($_POST['btn_submit']))
                    {
                        $year = (int)$_POST['year'];

                        $modyear = $year % 4;
                        if ($modyear == 0) {
                            $mod100year = $modyear % 100;
                            if ($mod100year == 0) {
                                $mod100400year = $mod100year % 400;
                                if ($mod100400year == 0) {
                                    echo "<p class='text-center'> It is leap year </p>";
                                }
                                else {
                                    echo "<p class='text-center'> It is not a leap year </p>";
                                }
                            }
                            else {
                                echo "<p class='text-center'> It is leap year </p>";
                            }
                        }
                        else {
                            echo "<p class='text-center'> It is not a leap year </p>";
                        }
                    }

                ?>
            </div>
        </div>
        <form action="" method="post" class="row w-50 mx-auto">
            <!-- year -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="year" class="form-label">Year </label>
                    <input type="number" name="year" id="" class="form-control border border-secondary">
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