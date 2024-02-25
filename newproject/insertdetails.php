<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $link = new mysqli($hostname,$username,$password,$database);

    $name = $_POST["text1"];
    $date = $_POST["text2"];
    $service = $_POST["text3"];
    $sqfeet = $_POST["text4"];
    $district = $_POST["text5"];
    $address = $_POST["text6"];
    $phoneno = $_POST["text7"];


    $merge = "insert into booking(NAME,DATE,SERVICE,SQFEET,DISTRICE,ADDRESS,PHONENO) values ('$name', '$date', '$service', $sqfeet, '$district', '$address', '$phoneno' )";

    $link->query($merge);

     header("location:home.php");

    $link->close();


    ?>
</body>
</html>