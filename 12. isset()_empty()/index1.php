<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = null;

    //echo isset($username);

        if(isset($username)){
            echo"This variable is set";
        }
        else{
            echo"This variable is NOT set";
        }



        if(empty($username)){
            echo"This variable is empty";
        }
        else{
            echo"This variable is NOT empty";
        }



?>