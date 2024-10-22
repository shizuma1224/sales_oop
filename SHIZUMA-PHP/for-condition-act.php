<?php
    for($num = 1; $num <= 10; $num++) {
        if($num != 10 ){
            if($num % 2 == 0){
                echo $num.".";
            }    
            else{
                echo $num."-";
            }
        }
        else {
            echo $num;
         }    
    }
?>