<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x); 
    //returns the number in positive.
    
    //$total = round($x); 
    //rounds the number
    
    //$total = floor($x); 
    //rounds the number down.
    
    //$total = ceil($x);
    //rounds the number up.
    
    //$total = sqrt($x);
    //square root function.
    
    //$total = pow($x, $y); 
    //power function. What is x raised to the power of y?
    
    //$total = max($x, $y, $z);
    //returns the highest number in the function.
    
    //$total = min($x, $y, $z);
    // returns the lowest number.

    //$total = pi();
    //prints pi number

    $total = rand();
    //returns a random number between 0 and 2147483647 (by default). You can use like: rand(1,6), gets a random number from 1 to 6.

    echo $total;
?>