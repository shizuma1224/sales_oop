<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>School Activity</title>
</head>
<body>
    <div class="container">
        <form action="" class="mx-auto w-50 mb-3" method="post">
            <h1 class="font-monospace text-center mb-3">REGISTRATION</h1>
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">

            <!-- YEAR LEVEL -->
            <label for="" class="form-label mt-2">Your Level</label>
            <select name="yearlevel" name="yearlevel" id="yearlevel" class="form-control" >
                <option value="" hidden>Choose your level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            
            <!-- UNITS -->
            <label for="" class="form-label mt-2">Total Units</label>
            <input type="select" name="unit" id="unit" class="form-control" max=23 placeholder="Maximum of 23">
            
            <!-- LAB -->
            <div class="row ">
                <div class="form-check form-check-inline col">
                    <input type="radio" name="lab" value="1" class="form-check-input">
                    <label for="" class="form-check-label">With Lab</label>
                </div>
                <div class="form-check form-check-inline col">
                    <input type="radio" name="lab" value="0" class="form-check-input">
                    <label for="" class="form-check-label">Without Lab</label>
                </div>
            </div>
            <!-- submit button -->
             <div>
                <button type="submit" class="btn btn-dark mt-3 w-100 text-white" name="btn_submit" value="ADD">SUBMIT</button>
             </div>
        </form>
    </div>

    <?php
        require "School.php";

        if(isset($_POST["btn_submit"])){
            //INPUT
            $name = $_POST["name"];
            $yearlevel = $_POST["yearlevel"];
            $unit = $_POST["unit"];
            $withlab = $_POST["lab"];
            
            //PROCCESS
            $priceObj = new School($name, $yearlevel, $unit, $withlab);

            //OUTPUT
            echo "Name :". $priceObj->getName()," "."<br>";
            echo "YearLevel :".$priceObj->getYearLevel(),""."<br>";
            echo "No. of units :".$priceObj->getUnit(),"<br>";
            echo "Total Price :".$priceObj->getPrice(),"<br>";
        }
    ?>
</body>
</html>