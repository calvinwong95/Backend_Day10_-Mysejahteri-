<?php
    $servername = "localhost";
    $serverUsername = "root";
    $serverPassword = "";
    $dBname = "mysejahteri";

    $conn = mysqli_connect($servername,$serverUsername,$serverPassword,$dBname);

    if (!$conn) {
       die("Connection Failed: ".mysqli_connect_error());
    }
