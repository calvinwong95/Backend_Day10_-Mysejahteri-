<?php


require 'db.sql.php';

function display_company($conn) {

    $sql = "SELECT * FROM company WHERE company_id = 1;";
    $result = mysqli_query($conn,$sql);
    $company = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['companyName'] = $company['company_name'];
            
        }

}

function checkin_company($cusContact,$companyLocal,$conn) {

    $sql = "INSERT INTO checkin(checkin_phone,checkin_location) VALUES ('$cusContact','$companyLocal') ;";
    $result = mysqli_query($conn,$sql);
    
}

function display_checkin_count($cusContact,$companyLocal,$conn) {
    $sql = "SELECT * FROM checkin WHERE checkin_phone = '$cusContact' && checkin_location = '$companyLocal';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['checkinCount'] = $row;
    }

    // if (mysqli_num_rows($result) > 0) {
    //     $_SESSION['checkinCount'] = $data['checkin_id'];
        
    // }
}
?>