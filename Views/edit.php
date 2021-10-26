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
    <form action="feedback.php" method="post">
        <label>Please insert new name</label>
        <input type="text" name="newName" placeholder="insert new name">
        <button type="submit" name="submit" value="complete">Complete</button>
    </form>
</body>
</html>