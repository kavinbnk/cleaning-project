<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $hostname="localhost";
       $username="root";
       $password="";
       $database="users";

       $link= new mysqli($hostname,$username,$password,$database);

       $name=$_POST["name1"];
       $password=$_POST["password1"];

       $merge="insert into login values('$name', '$password')";

       $link->query($merge);

       header("location:loginpage.php");
   
       $link->close();
    ?>
</body>
</html>