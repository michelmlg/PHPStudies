<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburguer" value="Hamburguer">
        Hamburguer<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>

        <input type="submit" name="submit"> <br>
    </forms>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo"You like Pizza! <br>";
        }
        if(isset($_POST["hamburguer"])){
            echo"You like Hamburguers! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo"You like Hotdogs! <br>";
        }
        if(isset($_POST["taco"])){
            echo"You like Tacos! <br>";
        }

        if(empty($_POST["pizza"])){
            echo"You don't like Pizza! <br>";
        }
        if(empty($_POST["hamburguer"])){
            echo"You don't like Hamburguers! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo"You don't like Hotdogs! <br>";
        }
        if(empty($_POST["taco"])){
            echo"You don't like Tacos! <br>";
        }
    }

?>