<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label>username:</label>
        <input type="text" name="username"> <br>
        <label>password:</label>
        <input type="text" name="password"> <br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""
    
    
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    // return of the associative array in the POST superglobal variable:
    
    // username = Michel
    // password = 1234
    // login = Log in

    /*
    Here we can use the isset or the empty function to confirm if the user gave the username and password.
    
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Username is missing";
        }elseif(empty($password)){
            echo"Password is missing";
        }
        else{
            echo"Hello {$username}";
        }
    }
    */

?>