<?php
    // hashing = transforming sensitive data(password)
    //           into letters, numbers, and/or symbols
    //           via a mathematical process. (similar to
    //           encrypting) Hides the original data from 3rd parties.

    $password = "pizza123";

    // PASSWORD_DEFAULT uses the bcrypt algorithm.
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    
    echo $hash . "<br>";

    // This compare the result hash of the first argument with the password hash of the variable above.
    // If they're the same, it means you entered the same password stored in the database.
    if(password_verify("pizza123", $hash)){
        echo"You are logged in!";
    }else{
        echo"Incorrect password!";
    }

?>