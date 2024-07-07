<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        username:<br>
        <input type="text" name="username"> <br>
        age:<br>
        <input type="text" name="age"> <br>
        e-mail:<br>
        <input type="text" name="e-mail"> <br>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php

    // Test: <script> alert("You have a Virus")</script> 
    // This is a malicious javaScript code, we wouldn't like seeing this type of code running in the aplication. 
    /*
    if(isset($_POST["login"])){
        $username = $_POST["username"];

        echo "Hello {$username}";
    }
    */

    if(isset($_POST["login"])){
        // INPUT_POST for post method and INPUT_GET for get method.
        // FILTER_SANITIZE_SPECIAL_CHARS is a filter that escape <>& and characters with ASCII value below 32.
            
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
            $email = filter_input(INPUT_POST, "e-mail", FILTER_SANITIZE_EMAIL);

            echo "Hello {$username} <br><br>";
            echo "You are {$age} years old. <br><br>";
            echo "E-mail: {$email} <br><br>";
    }

?>