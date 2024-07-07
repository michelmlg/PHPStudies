<?php
    // Arithmetic operators
    // + - * / ** %

    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y; = 12
    // $z = $x - $y; = 8
    // $z = $x * $y; = 20
    // $z = $x / $y; = 5
    // $z = $x ** $y; = 100
    
    $z = $x % $y; // = 0
    
    echo "O resultado de \$z = \$x % \$y é {$z}. <br>";
    
    // The operator % is great for determining whether a number is odd or even. If it has a remainder, it is an odd number, and if the result is zero, it is an even number.

//--------------------------------------------------------------------------------------------

    // Increment / decrement operators
    // ++, --

    $counter = 0;

    //$counter = $counter + 1;
    //OR
    //$counter++; The number goes from zero to one. "++" increments the previous value.

    $counter--; // The inverse occurs with "--".
    echo "O resultado de \$counter-- é {$counter}. <br>";

    //+= increments based on a predetermined value.
    $counter+=2;
    echo "O resultado de \$counter+=2 é {$counter}. <br>";

//--------------------------------------------------------------------------------------------
    
    // Operators Predecence
    // ()
    // **
    // * / %
    // + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "O resultado da fração (\$total = 1 + 2 - 3 * 4 / 5 ** 6) é igual a: {$total}";

    // $total = 1 + 2 - 3 * 4 / 15625;
    // $total = 1 + 2 - 12 / 15625;
    // $total = 1 + 2 - 0.000768;
    // $total = 3 - 0.000768;
    // $total = 2.999232;


?>