<?php
session_start();
include "../Models/db.sql.php";


$cusContact = $_SESSION['cusContact'];
$companyLocal = $_SESSION['companyName'];


include '../Models/scanner.model.php';
display_company($conn);

checkin_company($cusContact,$companyLocal,$conn);

display_checkin_count($cusContact,$companyLocal,$conn);

        

echo "Company Name: ".$_SESSION['companyName'] ."<br>";
echo "Number of check-ins: ".$_SESSION['checkinCount'] ."<br>";

// echo "Date created: ".$_SESSION['datecreated'] ."<br>";




include "../Views/footer.php";
?>