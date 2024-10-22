<?php
    $sum = 0;
    for($number = 2; $number < 30; $number += 2) {
        echo $number. " + " ;
        $sum = $sum + $number;
    }
    echo " = ". $sum;
?>