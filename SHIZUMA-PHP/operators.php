<?php

// . is like + on displaying strings

//確認 echo '<p>' $num1 + $num2 = $sum '</p>';
//確認 echo '<p>' . $num1 . + . $num2 . '=' . $sum . '</p>';
//確認 echo '<p>' . $num1 . - . $num2 . '=' . $sum . '</p>';



$num = 3;

if ($num < 3) {
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if ($num <= 3) {
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

$num = 3;
echo  ++$num; //add first before display
echo  ++$num;
echo  ++$num;
echo  ++$num;
echo  ++$num;

echo "<br>";

$num = 3;
echo  $num++;//display first before adding
echo  $num++;
echo  $num++;
echo  $num++;
echo  $num++;

echo"<br>";
// ============================
$num = 0;
if ($num) {
    echo "false";
} else {
    echo "true";
}

echo"<br>";

$num = 3.5;
if ($num > 3 && $num < 4) { //$$ mean "and"
    echo "TRUE";
} else {
    echo "FALSE";
}

echo"<br>";

$num = 2;
if ($num > 3 || $num < 4) {
    echo "TRUE";
} else {
    echo "FALSE";
}

echo"<br>";




// $password = "password";

// if ($password . hasUpperCase() && $password . hasSpecialChar()) {
//     echo "Valid password";
// } else {
//     echo "Invalid password";
// }

