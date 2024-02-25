<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $service = $_POST["service"];
    $sqfeet = $_POST["sqfeet"];
    $district = $_POST["district"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $con = new mysqli($hostname, $username, $password, $database);

    $query = "UPDATE booking SET 
              DATE = '$date',
              SERVICE = '$service',
              SQFEET = '$sqfeet',
              DISTRICE = '$district',
              ADDRESS = '$address',
              PHONENO = '$phone'
              WHERE NAME = '$name'";

    if ($con->query($query) === TRUE) {
        header("location: bookingdetails.php");
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();
} else {
    echo "Invalid request!";
}
?>
