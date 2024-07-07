<?php
    // switch = replacement to using many elseif statements
    //          more efficiente, less code to write.

    $grade = "A";

    // if($grade == "A"){
    //     echo "You did great";
    // }
    // elseif($grade == "B"){
    //     echo "You did good";
    // }
    // elseif($grade == "C"){
    //     echo "You did okay";
    // }
    // elseif($grade == "D"){
    //     echo "You did poorly";
    // }
    // elseif($grade == "F"){
    //     echo "You failed";
    // }
    // else{
    //     echo "{$grade} is not a valid grade";
    // }

    switch($grade){
        case "A":
            echo "You did great <br>";
            break; // 'break' is used to exit the switch statement. If you remove it, every case will be executed.
        case "B":
            echo "You did good <br>";
            break;
        case "C":
            echo "You did okay <br>";
            break;
        case "D":
            echo "You did poorly <br>";
            break;
        case "F":
            echo "You failed <br>";
            break;
        default: // response if there are no matching cases
            echo "{$grade} is not valid <br>";
    }

//--------------------------------------------------------------------------------------------

    $date = date("l"); // date function, "l" will give the day of the week.
    
    $date = "Sunday";

    switch($date){
        case "Monday":
            echo "I hate Mondays!";
            break;
        case "Tuesday":
            echo "It is Taco Tuesday!";
            break;
        case "Wednesday":
            echo "The work week is half over!";
            break;
        case "Thursday":
            echo "It's almost the weekend!";
            break;
        case "Friday":
            echo "The weekend is here!";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax!";
            break;
        default:
            echo "{$date} is not a date!";
    }
?>