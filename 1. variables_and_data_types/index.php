<?php
    echo"First PHP file";
    //Comentário
    /*comentario

    de varias linhas*/


    //Curso Bro code. URL: https://youtu.be/zZ6vybT1HQs?si=tRXfanof01FBww9z
    //Variable = a reusable container tht holds data
    //String,integer, float and bolean.


    //String:
    $name = "Michel Lisboa";
    $food = "Pizza";
    $email = "michel@fakemail.com";
    //echo $name;
    echo"<br>Hello my name is {$name}.<br>";
    echo"Eu gosto de {$food}.";
    echo"Email: ${email}";

    //Integer (int):

    $age = 18;
    $users = 2;
    $quantity = 3;

    echo"<br>You are {$age} years old.<br>";
    echo"There are {$users} online.<br>";
    echo"You would like to buy {$quantity} items<br>";

    //float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;
    //(grade point average)

    echo"Your gpa is: {$gpa}.<br>";
    echo"Your Pizza is \${$price}<br>"; //escape sequence
    echo"The sale tax rate is {$tax_rate}%.<br>";

    //boolean

    $employed = true;
    $online = true;
    $for_sale = true;

    echo"Online status: {$online} <br>"; //retorna nada caso seja falso, porém retorna 1 caso o valor seja true

    $total = null; //null = sem valor
    
    echo"You have ordered {$quantity} x {$food}s <br>";

    $total = $quantity * $price;

    echo"Your total is: \${$total}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order Pizza</button>
</body>
</html>