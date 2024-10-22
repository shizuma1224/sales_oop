<?php
echo "This is a PHP statement";
echo "<p>This is a paragraph</p>";
echo "Mary", "John";
// <br/>で改行される
echo "Some string <br/>"."another string";

// $：変数定義
$hello = "My name is Shizuma. <br/>";
$Hello = "My name is Kredo <br/>";
echo $hello.$Hello;

$this_is_number = 3;

var_dump($hello);
var_dump($this_is_number);

$a = 1;
$b = 2;
$d = 1;
$e = 5;
$f = 4;
$c = (($a + $b) - $d)*($e-$f);
echo $c."<br/>";
echo $a / $b."<br/>";
echo $a % $b."<br/>";

// P - parenthesis
// E - exponent
// M - multiplication
// d - division
// a - addition
// s - subtraction

$a = $a + $b;
echo '<p> $a = $a + $b = '.$a.'</p>';
echo '<p> $a += $b = '.$a += $b.'</p>';



?>