<h1>Associative Array</h1>
<?php
    //method 1 of creating an array []
    $person = ["name"=>"Nikko","age"=>24,"address"=>"Tagum City"];

    //method 2 - array()
    $countries = array("jp"=>"Japan","in"=>"India","th"=>"Thailand","sg"=>"Singapore");

    //Assigning individual calues to each index/key
    $age["Sakura"] = 25;
    $age["Tetsuro"] = 31;
    $age["Takuma"] = 17;

    //displaying individual values form the array
    echo $person["name"],"<br>";
    echo $person["age"],"<br>";
    echo $person["address"],"<br>";
    echo "<hr>";
    echo $countries["jp"],"<br>";
    echo $countries["in"],"<br>";
    echo $countries["th"],"<br>";
    echo $countries["sg"],"<br>";
    echo "<hr>";
    echo $age["Sakura"],"<br>";
    echo $age["Tetsuro"],"<br>";
    echo $age["Takuma"],"<br>";
    
    //foreach loop

    foreach($person as $key=>$value)
    {
        echo "<p>$key is $value</p>";
    }

    echo "<hr>";

    foreach($countries as $country_code=>$country_name)
    {
        echo "<p>$country_name ($country_code)</p>";
    }

    echo "<hr>";

    foreach($age as $name=>$age_value)
    {
        echo "<p>$name is $age_value years old.</p>";
    }

    echo "<hr>";

?>