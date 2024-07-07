<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
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
    if(isset($_POST["login"])){

        // If the input isn't a number, the string will be a null value.
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "e-mail", FILTER_VALIDATE_EMAIL);
        // Checking if the variable is empty.
        if(empty($age)){
            echo"That number wasn't valid <br>";
        }else{
            echo"You are {$age} years old <br>";
        }

        if(empty($email)){
            echo"That e-mail wasn't valid <br>";
        }else{
            echo"Your e-mail is: {$email} <br>";
        }



    }


?>