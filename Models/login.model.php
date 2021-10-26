<?php
session_start();
require 'db.sql.php';

function verify_customer($customerName,$conn) {

    $sql = "SELECT * FROM customers WHERE customer_name = '$customerName';";
    $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $customerName;
            $_SESSION['success'] = "You are now logged in";
            header('Location: ../Views/scanner.php');
            exit();
        }

        else {
            header('Location: ../Views/index.php?error=nouser');
            exit();
        }
}
?>