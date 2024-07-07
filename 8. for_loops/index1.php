<?php
    // for loop = repeat some code a certain # of times

    // Initialization: This part is executed once at the beginning. It typically initializes a counter variable.
    // Condition: The loop continues executing as long as this condition is true.
    // Update: This is usually an operation that modifies the loop control variable (incrementing or decrementing it).

    // (initialization; condition; update)
    
    for($i = 1; $i <= 10; $i++){  // Uses a counter variable to determine the number of times the code will repeat.
        echo "{$i} <br>";
    }

    for($o = 1; $o < 100; $o += 8){
        echo "{$o} <br>";
    }

    // examples:

    // ($i = 10; $i > 0; $i--)
    // ($i = 20; $i > 0; $i-=2)/

?>