<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Num1: </label>
        <input type="number" name="num1">
        <label for="num2">Num2: </label>
        <input type="number" name="num2">
        <button type="submit" name="btn_submit">Submit:Sum</button>
    </form>

    <?php
    if (isset($_POST['btn_submit'])) {
        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2']; 

        $sum = $num1 + $num2;
        echo "<p> The sum of $num1 and $num2 is $sum </p>";
    }
    ?>
    
</body>
</html>



<!-- http://localhost/shizuma-php/pg-sum-act.php -->