<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $con = new mysqli($hostname, $username, $password, $database);

    $query = "DELETE FROM booking WHERE NAME = '$name'";

    if ($con->query($query) === TRUE) {
        header("location: bookingdetails.php");
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
} else {
    echo "Invalid request!";
}
?>
