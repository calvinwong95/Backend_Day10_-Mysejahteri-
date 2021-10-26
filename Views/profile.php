<?php
session_start();
include "../Models/db.sql.php";
include "header.php";

$existingUser = $_SESSION['username'];

// $sql = "SELECT * FROM customers WHERE customer_name = '$existingUser';";
//         $result = mysqli_query($conn,$sql);
//         $user = mysqli_fetch_assoc($result);
//         if (mysqli_num_rows($result) == 1) {
//             $_SESSION['datecreated'] = $user['date_created'];
            
//         }

include '../Models/profile.model.php';
display_details($existingUser,$conn);

// $sql = "SELECT * FROM customers WHERE customer_name = '$existingUser';";
//         $result = mysqli_query($conn,$sql);
//         $user = mysqli_fetch_assoc($result);
//         if (mysqli_num_rows($result) == 1) {
//             $_SESSION['datecreated'] = $user['date_created'];
            
//         }

echo "Name: ".$_SESSION['username'] ."<form action='edit.php' method = 'post'> <input type='submit' name='edit' value='Edit'> </form><br>"; 
echo "Date created: ".$_SESSION['datecreated'] ."<br>";




include "footer.php";
?>