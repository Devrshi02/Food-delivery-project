<?php
    echo "this is our php to conect to our database";
    // ways to connect mySqli database
    // mysqli extention (object oriented)
    // PDO (php data object)  -->>to work with all database 

    // conecting to the database
    $server_name ="localhost";
    $username ="root";
    $password ="";

    // create a connection
    $connection= mysqli_connect($server_name,$username,$password);

    echo "connection was succesful"
?>
