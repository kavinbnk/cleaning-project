<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="login.css" rel="stylesheet"/>
</head>
<body>
    <form action="login.php" method="post">
    <div id="container">
        <div><img src="https://tse1.mm.bing.net/th?id=OIP.LG6UqvINZmEBMrUzrhADJAHaHa&pid=Api&P=0&h=180" alt="error" class="rounded-circle"/></div>
        <div>USER NAME :</div>
        <div><input type="text" placeholder="enter your name" name="name" required/></div>
        <div>PASSWORD :</div>
        <div><input id="input" type="password" placeholder="enter your password" name="password" required/></div>
        <input type="submit" style="width: 246px;height: 30px;margin-top: 20px;background-color: blue;color: white;" value="login"/>
        <hr>
        <h3>create new user ? <a href="signinpage.php">signin</a></h3>
    </div>
    </form>
</body>
</html>