<?php
    function is_even($number){
        return $number % 2;
    }

    echo is_even(11) . "<br>";

    // You can especify datatypes in the function argument
    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4,5) . "<br>";
?>