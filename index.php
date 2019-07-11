<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body style="font-family: 'Literata', serif;">
        <center>
        <h1>Admin Login</h1>
        <h5>Use the admin login according to the documentation</h5>
        <form action="mainpage.php" mathod="POST">
        <p>
        Userid: <input type="text" pattern="root" name="userid" id="userid" required>
        </p>
        <p>
        Password: <input type="password" pattern="root" name="password" id="password" required>
        <p>
        <input type="submit">
        </center>
    </form>

</body>
</html>