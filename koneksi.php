<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "membership";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (!$conn) {
        die("Failed Connecting");
    }
?>