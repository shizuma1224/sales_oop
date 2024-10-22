<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="radius" class="form-label">Radius</label>
                <input type="number" name="radius" id="radius" class="form-control mb-3">
                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
            </form>
        </div>
        <?php
                if(isset($_POST["btn_submit"]))
                {
                    // INPUT
                    $radius = $_POST["radius"];

                    //PROCESS
                    $circumference = getCircumference($radius);
                    //sunction getCircumference($radius) will calculate the circumference of the circle. given the $radius. The function returns a value and that value is assigned to $circumference.

                    //OUTPUT
                    // displayOutput($radius, $circumference);
                    echo displayOutput($radius, $circumference);

                    //displayOutput($radius, $circumference) is used to diplay/show to the screen the OUTPUT.no need to use return
                }
            ?>
    </div>
    
</body>
</html>

<?php
    function getCircumference($radius){
        return 2 * pi() * $radius;
    }

    function displayOutput($radius, $circumference)
    {
        // echo "<div class='alert alert-primary w-50 mx-auto text-center mt-3'>The circumference of the circle, given the radius of <span class='fw-bold'>$radius</span>, is <span class='fw-bold'>$circumference</span> units.</div>";

        return "<div class='alert alert-primary w-50 mx-auto text-center mt-3'>The circumference of the circle, given the radius of <span class='fw-bold'>$radius</span>, is <span class='fw-bold'>$circumference</span> units.</div>";

    }
?>