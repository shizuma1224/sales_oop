<?php
    echo "<table border=1>";
    for($num1 = 1; $num1 <= 10; $num1++) {
        echo "<tr>";
        for($num2 = 1; $num2 <= 10; $num2++) {
            $mul = $num1 * $num2;
            echo "<td>$mul</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>