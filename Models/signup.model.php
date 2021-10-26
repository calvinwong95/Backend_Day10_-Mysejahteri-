<?php


function insert_customerName($customerName,$conn) {

    $sql = "INSERT INTO customers (customer_name) VALUES ('$customerName');";
            mysqli_query($conn,$sql);
}

function insert_customerPhone($customerContact,$conn) {

    $sql = "INSERT INTO checkin (checkin_phone) VALUES ('$customerContact');";
            mysqli_query($conn,$sql);
}

function insert_tacNumber($tac,$conn) {

    $sql = "INSERT INTO tac (tac_tac) VALUES ('$tac');";
            mysqli_query($conn,$sql);
}


function verify_existing($customerName,$customerContact,$tac,$conn){
    // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM customers WHERE customer_name='$customerName';";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
  
        // if user exists
        if ($user['customer_name'] === $customerName) {
        header("location: ../Views/signup.php?error=userexists");
            
        }
    
        else  {
            // insert variables into database
            // $sql = "INSERT INTO customers (customer_name) VALUES ('$customerName');";
            // mysqli_query($conn,$sql);
            insert_customerName($customerName,$conn);

            // $sql = "INSERT INTO checkin (checkin_phone) VALUES ('$customerContact');";
            // mysqli_query($conn,$sql);
            insert_customerPhone($customerContact,$conn);

            // $sql = "INSERT INTO tac (tac_tac) VALUES ('$tac');";
            // mysqli_query($conn,$sql);
            insert_tacNumber($tac,$conn);
        
            header('Location: ../Views/tac.php?signup=success');
        }
}

?>