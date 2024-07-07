<?php
    // array = "variable" which can hold more than one value at a time
    // work with a index to each element

    $foods = array("apple", "orange", "banana", "coconut");
    //               [0]       [1]       [2]       [3]


    // echo $foods[0] . "<br>"; // . is used to concatenate
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // To change the value of one Item of the array:

    $foods[0] = "pineapple";

    // You can use a foreach to show all the items in the array

    foreach ($foods as $food){ 
        echo $food . "<br>";
    }

    // array_push is a function that allow to add items to the array
    // array_push($foods, "pineapple", "kiwi");

    // array_pop will remove the last item from the array
    // array_pop($foods);

    // array_shif removes the first item from the array
    // array_shift($foods);

    // array_reverse reverses the array (this function returns a new array)
    $reversed_foods = array_reverse($foods);

    // there are more array functions to learn, here is a list of them
    // https://www.php.net/manual/en/ref.array.php

    foreach ($reversed_foods as $food){ 
        echo $food . "<br>";
    }
    
?>