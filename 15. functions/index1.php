<?php
    // function = write a code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()

    function happy_birthday($first_name, $age){

        echo"Happy birthday dear {$first_name}! <br>";
        echo"Happy birthday to you! <br>";
        echo"Happy birthday dear {$first_name}! <br>";
        echo"You are {$age} years old! <br> <br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);
?>