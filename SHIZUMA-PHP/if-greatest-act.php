<?php

//if condition
    $a = 10;
    $b = 10;
    $c = 20;

    if($a > $b && $a > $c) {
        echo "Greatest Number is 'a': $a";
    }
    elseif($b > $a && $b > $c) {
        echo "Greatest Number is 'b' :  $b";
    }
    elseif($c > $a && $c > $b) {
        echo "Greatest Number is 'c' : $c";
    }
    else {
        echo "There are some equal Greatest Numbers";
    }

?>