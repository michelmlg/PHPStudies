<?php
    // associative array = An array made of key => value pairs

    // example of key value pairs:
    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA" => "Washington D.C.",
                      "Japan" => "Kyoto",
                      "South Korea" => "Seoul",
                      "Brazil" => "Brasília");

    //echo "{$capitals["USA"]} <br>"; // returns the associative value


    // to alter the value:
    // $capitals["USA"] = "Las Vegas";

    // Add a new value:
    // $capitals["China"] = "Beijing";

    // Remove the last keys
    //array_pop($capitals);

    // Remove the first key
    //array_shift($capitals);

    // Return a new array with the keys
    // $keys = array_keys($capitals);

    // Return a new array with the values
    //$values = array_values($capitals);

    // Flips the keys with the values, returns a new array
    // $capitals = array_flip($capitals);

    // Reverse the array order:
    // $capitals = array_reverse($capitals);

    // Count the amount of pairs:
    // echo count($capitals);

    // to list every Key and Value in the associative array:

    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }

?>