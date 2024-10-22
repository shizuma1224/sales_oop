<?php

// Indexed array
$fruits = ['Apple', 'Banana','Orange'];

// Add value in array
$fruits[3] = 'Mango';

// How to display arrays
print_r($fruits);
echo '<br>';

echo 'Number of fruits ; ' . count($fruits);
echo '<br>';

//Display individual value
echo $fruits[2];
echo '<br>';

echo '<hr>';
//Display all avalue in an array
foreach($fruits as $a) {
    echo "The fuit is $a";
    echo "<br>";
}

?>