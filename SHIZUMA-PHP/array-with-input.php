<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Activity</title>
</head>
<body>
    <form action="" method="post">
        <label for="num-countries">How many countries have you been to?</label><br>
        <input type="number" name="number_of_countries" id="number-of-countries">
        <button type="submit" name="btn_set">Set!</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['btn_set'])) {
        $number_of_countries =  $_POST['number_of_countries'];

        echo "<form method='post'>";
            for ($i = 1; $i <= $number_of_countries; $i++) {
                echo "Country $i : <input type='text' name='countries[]'><br>";
            }
            echo "<button type='submit' name='btn_save'>Save!</button>";
        echo "<?form>";
    }


    if(isset($_POST['btn_save'])) {
        $countries = $_POST['countries'];

        foreach($countries as $country) {
            echo "<p> $country </P>";
        }
    }

?>

