<?php
session_start();
include '../Models/db.sql.php';

//make variable
$tacNumber = mysqli_real_escape_string($conn,$_POST['tacNumber']);

if (isset($_POST['tac-submit'])) {
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
        // $user_check_query = "SELECT * FROM tac WHERE tac_tac= '$tacNumber';";
        // $result = mysqli_query($conn, $user_check_query);
        // $user = mysqli_fetch_assoc($result);
        // if ($user['tac_tac'] === $tacNumber) {
        //     header("location: index.php?tacverified");
            
        // }
        // else {
        //     header("Location: tac.php?error=incorrectTAC");
        // }
        include '../Models/tac.model.php';
        verify_tac($tacNumber,$conn);
            
        
}
else {
    header("Location: ../Views/tac.php?error=invalidTAC");
    exit();
}
?>