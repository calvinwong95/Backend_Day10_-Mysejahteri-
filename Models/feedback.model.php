<?php


function update_details($existingUser,$newName,$conn) {

    $sql = "UPDATE customers SET customer_name = '$newName' WHERE customer_name = '$existingUser'";
    mysqli_query($conn, $sql);
    $_SESSION['username'] = $newName;
}

?>