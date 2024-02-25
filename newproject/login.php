<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "users";

$link = new mysqli($hostname, $username, $password, $database);

$name    =$_POST["name"];
$password=$_POST["password"];

$query = "select * from login where name = '$name' and password = '$password'";

$result = $link->query($query);

if($result -> num_rows>0 )
{
    header("location:home.php");
}
else
{
    echo ("invalid user");
}

$link->close();

?>