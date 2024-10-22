<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>
</head>
<style>

</style>
<body>
    <form action="" method="post">
        <button type="submit" name="btn_mon">Monday</button>
        <button type="submit" name="btn_tue">Tuesday</button>
        <button type="submit" name="btn_wed">Wednesday</button>
        <button type="submit" name="btn_thu">Thursday</button>
        <button type="submit" name="btn_fri">Friday</button>
    </form>

    <?php
        if (isset($_POST['btn_mon'])) {
            $day = "Monday";
        }
        elseif (isset($_POST['btn_tue'])) {
            $day = "Tuesday";
        }
        elseif (isset($_POST['btn_wed'])) {
            $day = "Wednesday";
        }
        elseif (isset($_POST['btn_thu'])) {
            $day = "Thursday";
        }
        elseif (isset($_POST['btn_fri'])) {
            $day = "Frisday";
        }

        echo "<p> You Clicked $day. </p>";
    ?>
</body>
</html>


<!-- http://localhost/shizuma-php/pg-day-act.php -->