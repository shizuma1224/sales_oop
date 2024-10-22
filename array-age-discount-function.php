<?php
function checkPrice(int $age){
    $rate = 325;
    var_dump($age);
    if ($age >= 0 && $age <= 5) { // Free
        return 0;
    } elseif ($age >= 6 && $age <= 10) {
        $discount = $rate * 0.1; // 10% discount
        // return $rate - $discount;
        return $rate * 0.9;
    } elseif ($age >= 60) {
        $discount = $rate * 0.05; // 5% discount
        return $rate - $discount;
        // return $rate * 0.95;
    } elseif ($age >= 11 && $age <= 59) { // normal rate
        return $rate;
    }
}

function total($discounted_price){
    $total = 0;
    foreach($discounted_price as $price){
        $total += $price;
    }

    return $total;
}
?>