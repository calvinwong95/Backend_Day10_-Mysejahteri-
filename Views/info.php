<?php
session_start();
include "../Models/db.sql.php";
include "header.php";

$existingUser = $_SESSION['username'];
$checkinCounter = $_SESSION['checkinCount'];

// $sql = "SELECT * FROM customers WHERE customer_name = '$existingUser';";
//         $result = mysqli_query($conn,$sql);
//         $user = mysqli_fetch_assoc($result);
//         if (mysqli_num_rows($result) == 1) {
//             $_SESSION['datecreated'] = $user['date_created'];
            
//         }
include '../Models/info.model.php';
display_details($existingUser,$conn);
checkin_counter($checkinCounter,$conn);


        

echo "Name: ".$_SESSION['username'] ."<br>";
echo "Number of check-ins: ".$checkinCounter."<br>";
echo "Date created: ".$_SESSION['datecreated'] ."<br>";




include "footer.php";
?>