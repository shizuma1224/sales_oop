<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>ROW-COL Activity</title>
</head>
<body>
    <div class="container">
        <div class="fst-italic text-center">
            <?php
                if (isset($_POST['btn_submit'])) {
                    $rownum = $_POST['rownum'];
                    $colnum = $_POST['colnum'];

                    echo "<table border = 1>";
                    for($row = 1; $row <= $rownum; $row++) {
                        echo "<tr>";
                        for($col = 1; $col <= $colnum; $col++) {
                            echo "<td>**</td>";
                        }
                        echo "</tr>";
                    }
                    echo "<table>";
                }
            ?>
        </div>
        <form action="" method="post" class="row w-50 mx-auto">
            <!-- rownum -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="number" class="form-label">Enter number of rows</label>
                    <input type="number" name="rownum" id="" class="form-control border border-secondary">
                </div>
            </div>
            <!-- colnum -->
            <div class="row mx-auto">
                <div class="col">
                    <label for="number" class="form-label">Enter number of columns</label>
                    <input type="number" name="colnum" id="" class="form-control border border-secondary">
                </div>
            </div>
            <!-- submit button -->
            <div class="row mx-auto">
                <div class="col">
                    <button type="submit" name="btn_submit" class="mt-2 w-100 bg-primary text-white border bordered-none rounded">Generate</button>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>




<!-- http://localhost/shizuma-php/pg-arithmetic-act.php -->