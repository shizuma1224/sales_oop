<!-- WHILE LOOP -->
<h1>While Loop</h1>
<?php
$num = 1;

    while( $num < 5 )  //(condition)
    {
        //while-block or loop body
        //the code here only runs if the condition is TRUE
        //the loop stops if the condition evaluates to FALSE
        echo "<p>$num is less than 5<?p>";
        $num++;
    }
?>

<hr>
<!-- DO-WHILE LOOP -->
<h1>Do-While Loop</h1>
<?php
    $num = 1;

    do{
        //do-block or loop body
        echo"<p>$num is less than 5</p>";
        $num++;
    }while( $num < 5 )
?>

<hr>
<!-- FOR LOOP -->
<h1>For Loop</h1>
<?php
    for($counter = 1; $counter < 5; $counter++) //for(initialize_counter; condition; update_counter)
    {
        //for-block or loop body
        echo "<p>$counter is less than 5<?p>";
    }
?>

