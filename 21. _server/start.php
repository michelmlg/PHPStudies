<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- This is how we can use PHP_SELF to get the current file name. PHP_SELF is vulnerable to Cross-site script.  -->
<!-- You can use the function htmlspecialchars($_SERVER["PHP_SELF"]) instead of $_SERVER["PHP_SELF"]  -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username: <br>
        <input type="text" name="username">
        <input type="submit">
</body>
</html>

<?php
    // $_SERVER = SGB that contains headers, paths, and script locations.
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page enviroment.

    /*
    foreach($_SERVER as $key => $value){
        echo"{$key} = {$value} <br>";

    }
    */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"HELLO";
    }
?>