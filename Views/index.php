<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="../Controllers/login.php" method="post">
            <label>Name:</label>
            <input type='text' name='customer_name' placeholder='Insert Full Name'>
            <label>Contact Number:</label>
            <input type='text' name='customer_contact' placeholder='Insert Phone Number'>
            <button type='submit' name='submit-login'>Log In</button>
            <button type='submit' name='submit-signup'><a href="signup.php">Sign Up</a></button>
        </form>
    </div>
</body>
</html>
