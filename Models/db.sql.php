<?php
    $servername = "localhost";
    $serverUsername = "Cheehoe";
    $serverPassword = "test123";
    $dBname = "mysejahteri";

    $conn = mysqli_connect($servername,$serverUsername,$serverPassword,$dBname);

    if (!$conn) {
       die("Connection Failed: ".mysqli_connect_error());
    }
