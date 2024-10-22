<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<title>Kredo Cafe</title>

<body>
    <form action="" method="post">
        <div class="mx-auto w-50 text-center">
            <h2>How many people are going to eat ?</h2>
            <input type="number" name="number_of_people" class="form-control my-1" placeholder="Enter number of people">
            <button type="submit" name="btn_submit" class="btn btn-success w-50 my-3">SUBMIT</button>

        <?php
        if(isset($_POST['btn_submit'])){
            echo "<h2>Ages of the people attending</h2>";
            $number_of_people = $_POST['number_of_people'];

            echo "<form method='POST'>";
                for($i = 1;$i <= $number_of_people; $i++) {
                    echo "<input type='number' name='ages[]' class='form-control my-1' placeholder='Enter age here'>";
                }
                echo "<button type='submit' name='btn_save' class='btn btn-primary w-50 my-3'>SAVE</button>";
            echo"</form>";
        }

        if(isset($_POST['btn_save'])) {
            $ages = $_POST['ages'];
            $totalprice = 0;

            echo "<table class='table table-bordered border-solid'>";
                echo "<tr class='table-dark'>";
                    echo "<th>AGE</th>";
                    echo "<th>PRICE</th>";
                echo "</tr>"; 

                foreach($ages as $age) {
                    if(0 <= $age && $age <= 5) {
                        $price = 325 * 0;
                        $totalprice = $totalprice + $price;
                        echo"<tr>";
                            echo"<td>$age</td>";
                            echo"<td>$price</td>";
                        echo"</tr>";
                    }
                    elseif(6 <= $age && $age <= 10) {
                        $price = 325 * 0.9;
                        $totalprice = $totalprice + $price;
                        echo"<tr>";
                            echo"<td>$age</td>";
                            echo"<td>$price</td>";
                        echo"</tr>";
                    }
                    elseif(60 <= $age) {
                        $price = 325 * 0.95;
                        $totalprice = $totalprice + $price;
                       echo"<tr>";
                            echo"<td>$age</td>";
                            echo"<td>$price</td>";
                        echo"</tr>";
                    }
                    else {
                        $price = 325;
                        $totalprice = $totalprice + $price;
                       echo"<tr>";
                            echo"<td>$age</td>";
                            echo"<td>$price</td>";
                        echo"</tr>";
                    }
                }
                    $number_of_people_2 = count($ages);
                    echo "<tr class='table-danger'>";
                        echo "<td>Total Price</td>";
                        echo "<td>$totalprice</td>";
                    echo "<tr>";   
                    echo "<tr class='table-primary'>";
                        echo "<td>Number of Peple</td>";
                        echo "<td>$number_of_people_2</td>";
                    echo "<tr>"; 
            echo "</table>";
        }
        ?>

        </div>
    </form>

</body>

</html>