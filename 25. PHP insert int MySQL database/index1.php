<?php
    
    include("database1.php");
    
    // mysqli_close($conn); To close the connection with the database.
    //"INSERT INTO users (user, password) VALUES ('Spongebob','pineapple1')";

    $username = "Squidward";
    $password = "clarinet2";
    
    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$password')";
    
    try{
        mysqli_query($conn, $sql);
        echo"User is now registered";
    }
    catch(mysqli_sql_exception){
        echo"Could not register user";
    }


    mysqli_close($conn);
?>
