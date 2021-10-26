<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
</head>
<body>
<h1>Sign Up</h1>
    <form action="../Controllers/signup.inc.php" method="post">
        <input type="text" name="customerName" placeholder="Insert Name">
        <br>
        <input type="text" name="customerNumber" placeholder="Key in your number">
        <br>
        <button type="submit" name="register-submit">Register</button>

    </form> 
</body>
</html>