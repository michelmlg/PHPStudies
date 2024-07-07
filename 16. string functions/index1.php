<?php
    $username = array("Bro", "The", "Code");
    $phone = "123-456-7890";
    //echo $username . "<br><br>";
    
    /*
    $username = strtolower($username);
    echo $username . "<br><br>";  

    $username = strtoupper($username);
    echo $username . "<br><br>";  

    $username = trim($username);
    echo $username . "<br><br>";

    $username = str_pad($username, 20, "0");
    echo $username . "<br><br>";

    $phone = str_replace("-", "", $phone);
    echo $phone . "<br><br>";

    $username = strrev($username);
    echo $username . "<br><br>";

    $compare = strcmp($username, "Bro Code");
    echo $compare . "<br><br>";

    $count = strlen($phone);
    echo $count . "<br><br>";

    $index = strpos($phone, "3");
    echo $index . "<br><br>";

    $firstname = substr($username, 0, 3);
    echo $firstname . "<br><br>";

    $lastname = substr($username, 4);
    echo $lastname . "<br><br>";

    $fullname = explode (" " , $username);
    foreach($fullname as $name){
        echo $name . "<br>";
    }
    */

    $username = implode("-",$username);
    echo $username;

?>