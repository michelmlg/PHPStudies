<?php
    // if statements = if some condition is true, do something
    //                 if condition is false, don't do it
    $age = 101;

    if($age >= 100){
        echo "You are too old to enter this site <br>";
    }
    elseif($age >= 18){
        echo "You may enter this site <br>";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age <br>";     // if the first condition is true, you can't get to the other else statements
    }                                     
    else{
        echo "You must be 18+ to enter <br>";
    }   

//--------------------------------------------------------

    // With boolean values:

    $adult = true;

    if($adult){
        echo "You may enter this site <br>";
    }
    else{
        echo "You must be an adult to enter <br>";
    }

//--------------------------------------------------------

    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){ 
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week <br>";
?>