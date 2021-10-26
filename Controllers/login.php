
<?php
// session_start();


if (isset($_POST['submit-login'])) {
    require '../Models/db.sql.php';

    // make variables
    $customerName = mysqli_real_escape_string($conn,$_POST['customer_name']);
    $customerContact =  mysqli_real_escape_string($conn,$_POST['customer_contact']);

    //check if user missed out anything in the field
    if (empty($customerName) || empty($customerContact)) {
        header("Location: Views/index.php?error=emptyfields");
        exit();
    }

    else {
        // $sql = "SELECT * FROM customers WHERE customer_name = '$customerName';";
        // $result = mysqli_query($conn,$sql);
        // if (mysqli_num_rows($result) == 1) {
        //     $_SESSION['username'] = $customerName;
        //     $_SESSION['success'] = "You are now logged in";
        //     header('Location: scanner.php');
        //     exit();
        // }

        // else {
        //     header('Location: index.php?error=nouser');
        //     exit();
        // }
        include "../Models/login.model.php";
        verify_customer($customerName,$conn);
        
    }


}
else {
    header("Location: Views/index.php");
    exit();
};