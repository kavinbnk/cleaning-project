<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Your Details</title>
    <link href="deatils.css" rel="stylesheet"/>
</head>
<body>
    <form action="insertdetails.php" method="post">
    <div id="container">
        <h1>ENTER YOUR DETAILS</h1>
        <div>NAME :</div>
        <input type="text" placeholder="enter a name" name="text1"/>
        <div>CLEANING DATE :</div>
        <input type="date" name="text2"/>
        <div>SELECT THE SERVICE :</div>
        <select name="text3">
            <option value="Residences">Residences</option>
            <option value="Offices">Offices</option>
            <option value="Institutions">Institutions</option>
            <option value="Industries">Industries</option>
            <option value="Restaurants">Restaurants</option>
        </select>
        <div>TOTAL SQ FEET :</div>
        <input type="text" placeholder="total sq feet" name="text4"/>
        <div>DISTRICT :</div>
        <input type="text" placeholder="enter the district" name="text5"/>
        <div>ADDRESS :</div>
        <input type="text" placeholder="address" name="text6"/>
        <div>PHONE NUMBER :</div>
        <input type="number" placeholder="mobile number" name="text7"/><br>
        <div><input id="ok" type="submit" name="submit"/></div>
    </div>
    </form>
</body>
</html>