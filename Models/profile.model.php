<?php


function display_details($existingUser,$conn) {

    $sql = "SELECT * FROM customers WHERE customer_name = '$existingUser';";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['datecreated'] = $user['date_created'];
        
    }
}

?>