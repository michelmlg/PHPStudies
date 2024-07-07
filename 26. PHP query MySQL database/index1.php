<?php
    
    include("database1.php");
    
    // Search for a user Sandy in the Table
    $sql = "SELECT * FROM users WHERE user = 'Sandy'";

    // mysqli_query will return a object 
    // It will have a associative array
    
    $result = mysqli_query($conn, $sql); 

    if(mysqli_num_rows($result) > 0){
        // This function returns the next available row inside the obj 
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    else{
        echo"No user found.";
    }


?>
