<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <!-- display name -->
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="yourname">
        <button type="submit" name="btn_submit">Submit</button>
    </form>
   

    <?php
   
    if (isset($_POST['btn_submit'])) {
        $name = $_POST['yourname'];
        echo "<p> $name </p>";
    }
   
    ?>

    <!-- display number -->
    <!-- <form action="" method="post">
        <label for="name">Name: </label>
        <input type="number" name="num1">
        <input type="number" name="num2">
        <button type="submit" name="btn_submit">Submit</button>
    </form> -->

    <?php
    /*
    if (isset($_POST['btn_submit'])) {

        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2'];
        echo "<p> $num1 </p>";
        echo "<p> $num2 </p>";
    }
    */
    ?>

</body>
</html>