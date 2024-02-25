<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $service = $_POST["service"];
    $sqfeet = $_POST["sqfeet"];
    $district = $_POST["district"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="edit.css" rel="stylesheet"/>
</head>
<body>
    <div id="container">
    <?php
    echo "<h2>EDIT THE DETAILS</h2>";
    echo "<form method='post' action='update.php'>";
    echo "Name:<br> <input type='text' name='name' value='$name' /><br />";
    echo "Date:<br> <input type='text' name='date' value='$date' /><br />";
    echo "Service:<br> <input type='text' name='service' value='$service' /><br />";
    echo "Sqfeet:<br> <input type='text' name='sqfeet' value='$sqfeet' /><br />";
    echo "District:<br> <input type='text' name='district' value='$district' /><br />";
    echo "Address:<br> <input type='text' name='address' value='$address' /><br />";
    echo "Phone:<br> <input type='text' name='phone' value='$phone' /><br />";
    echo "<input type='submit' id='button' value='Update' />";
    echo "</form>";
    
} else {
    echo "Invalid request!";
}
?>
</div>
</body>
</html>
   
