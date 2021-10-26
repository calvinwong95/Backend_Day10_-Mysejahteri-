<?php
 session_start();
 include '../Models/db.sql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "Your TAC number is ".$_SESSION['tac'] ."<br>";
echo "Please key in the TAC number to confirm your registration";


    ?>
    <form action="../Controllers/tac.verify.php" method="post">
        <input type="text" name="tacNumber" placeholder="Key in here">
        <button type="submit" name="tac-submit">Submit</button>
    </form>
</body>
</html>