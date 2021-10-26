<?php


function verify_tac($tacNumber,$conn) {

        $user_check_query = "SELECT * FROM tac WHERE tac_tac= '$tacNumber';";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user['tac_tac'] === $tacNumber) {
            header("location: ../Views/index.php?tacverified");
            
        }
        else {
            header("Location: ../Views/tac.php?error=incorrectTAC");
        }
}

?>