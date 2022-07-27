<?php
if(isset($_post["Name"]))
{
    $SERVER="localhost";
    $username="root";
    $password="";

    $connection=mysqli_connect($SERVER,$username,$password,"cep");
}
if($connection)
{
    echo "connection successfully";
}
else
    echo "connection failed"
?>