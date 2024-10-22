<?php
    require "Fare.php";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="age">age</label>
            <input type="number" name="age" id="age" required>
            <br><br>
            <label for="distance">distance</label>
            <input type="number" name="distance" id="distance" required>
            <br><br>
            <input type="submit" value="Submit" name="btn_submit">
        </form>
        <?php
            if(isset($_POST["btn_submit"])){
                //INPUT
                $age = $_POST["age"];
                $distance = $_POST["distance"];
                
                //PROCCESS
                $fareObj = new Fare($age, $distance);

                $fareObj->setAge($_POST['age']);
                $fareObj->setDistance($_POST['distance']);
                $fareObj->setFare();

                //OUTPUT
                echo "Age :". $fareObj->getAge()," yeas old"."<br>";
                echo "Distance :".$fareObj->getDistance()," km"."<br>";
                echo "Fare :".$fareObj->getFare(),"<br>";
            }
        ?>
    </body>
    </html>


