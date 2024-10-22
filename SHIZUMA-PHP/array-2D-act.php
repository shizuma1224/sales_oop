<h1>2D Associative Array</h1>
<style>
    table,th,td {
        border:1px solid black;
        border-collapse:collapse;
    }
</style>
<?php
    $region = [
        "hokkaido" =>array("Hokkaido"=>"Sapporo"),
        "chubu"=>array("Ishikawa"=>"Kanazawa","Shizuoka"=>"fuji","Toyama"=>"Toyama","Aichi"=>"Nagoya"),
        "chugoku"=>array("Yamaguchi"=>"Shimonoseki","Tottori"=>"Tottori")
    ];

    //foreach()
    foreach($region as $sub_array => $value_arr)  //outer loop (key is sub_arrays)
    {
        echo "<h1>$sub_array</h1>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Prefecture</th>";
                echo "<th>City</th>";
            echo "</tr>";
                foreach($value_arr as $key => $city)  //inner loop
                {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$city</td>";
                    echo "</tr>";
                }
        echo"</table>";
    }

?>