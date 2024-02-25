<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "users";

$con = new mysqli($hostname, $username, $password, $database);

$query = "select * from booking";
$result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link href="bookingdetails.css" rel="stylesheet"/>
</head>
<body>
    <div id="container">
    <table border="2px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Service</th>
                <th>Sqfeet</th>
                <th>District</th>
                <th>Address</th>
                <th>Phone No</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr> ";
                    echo "<td>" . $row['NAME'] . "</td> <td>" . $row['DATE'] . "</td> <td>" . $row['SERVICE'] . "</td> <td>" . $row['SQFEET'] . "</td><td>" . $row['DISTRICE'] . "</td><td>" . $row['ADDRESS'] . "</td><td>" . $row['PHONENO'] . "</td>";
                    echo "<td>";
                    echo "<form method='post' action='edit.php'>";
                    echo "<input type='hidden' name='name' value='" . $row['NAME'] . "'/>";
                    echo "<input type='hidden' name='date' value='" . $row['DATE'] . "'/>";
                    echo "<input type='hidden' name='service' value='" . $row['SERVICE'] . "'/>";
                    echo "<input type='hidden' name='sqfeet' value='" . $row['SQFEET'] . "'/>";
                    echo "<input type='hidden' name='district' value='" . $row['DISTRICE'] . "'/>";
                    echo "<input type='hidden' name='address' value='" . $row['ADDRESS'] . "'/>";
                    echo "<input type='hidden' name='phone' value='" . $row['PHONENO'] . "'/>";
                    echo "<input type='submit' value='Update'/>";
                    echo "</form>";

                    echo "<form method='post' action='delete.php'>"; 
                    echo "<input type='hidden' name='name' value='" . $row['NAME'] . "'/>";
                    echo "<input type='submit' value='cancel'/>";
                    echo "</form>";

                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found</td></tr>";
            }
            $con->close();
            ?>
        </tbody>
    </table>
    </div>
    <div>
        <a href="home.php"><button id="footer">GO TO HOME PAGE</button></a>  
    </div>
</body>
</html>
