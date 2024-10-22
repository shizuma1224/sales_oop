<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

//argument==========================
$num1 = 5;
$num2 = 3;
$num3 = 4;

add1($num1, $num2, $num3);

function add1($x, $y, $z) 
{
    echo $x + $y + $z;
}

echo "<br>";

//returning values==========================
$num1 = 5;
$num2 = 3;

echo "The Answer is in the return : " . add2($num1, $num2);

function add2($x, $y) 
{
    $sum = $x + $y;

    return $sum;
}

echo "<br>";

    function demo() {
        return "hi";
    }

    $message =  demo();

    echo "$message";

echo "<br>";

?>

<!-- Input Proccess Output ========================== -->

<form action="" method="post">
    <input type="text" name="num1" id="">
    <input type="text" name="num2" id="">
    <input type="submit" name="btn" value="send">
</form>

<?php
    if(isset($_POST['btn'])) {
        // input - collect data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // proccess
        $sum = addNumbers($num1, $num2);

        // output
        echo displaySum($sum);
    }

    function addNumbers($num1, $num2){
        $total = $num1 + $num2;
        return $total;
    }

    function displaySum($sum) {
        return
            "
            <div class='card w-25 mx-auto'>
                <div class='card-header'>
                    <h2>Sum : $sum </h2>
                </div>
            </div>
            ";

    }
?>
