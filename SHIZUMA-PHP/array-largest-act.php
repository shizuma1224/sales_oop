<?php
$num_list = [10.9, 19, 35.2, 18.1, 21, 5, 20, 15];
$largestnum = 0;
foreach($num_list as $num) {
    echo $num. " |";

    if($num > $largestnum) {
        $largestnum = $num;
    }
}
    echo "<br>";
    echo "The largest number is $largestnum";

?>