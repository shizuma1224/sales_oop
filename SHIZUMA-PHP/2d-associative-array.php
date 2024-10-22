<h1>2D Associative Array</h1>
<?php
    $market = [
        "round" =>array("fruit1"=>"Orange","fruit2"=>"Grapes"),
        "yellow"=>array("fruit3"=>"Banana","fruit4"=>"Mango")
    ];

    //market -> array name
    //round, yellow -> sub-arrays
    //marketはmain array, roundとyellowはkey
    //fruit1, fruit2, ..., fruit4 -> keys/index
    //Orange,Grapes,...,Mango -> values

    //$array_name[sub_array][index/key]
    echo $market["round"]["fruit1"],"<br>";  //output is "Orange"
    echo $market["round"]["fruit2"],"<br>";  //output is "Grapes"
    echo $market["yellow"]["fruit3"],"<br>"; //output is "Banana"
    echo $market["yellow"]["fruit4"],"<br>"; //output is "Mango"

    //foreach()
    foreach($market as $sub_array => $value_arr)  //outer loop (key is sub_arrays)
    {
        echo "<h1>$sub_array</h1>";
        echo "<ul>";
            foreach($value_arr as $key => $fruit)  //inner loop
            {
                echo "<li>$fruit</li>";
            }
        echo"</ul>";
    }

?>