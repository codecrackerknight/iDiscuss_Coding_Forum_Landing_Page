<?php
    // Script to connect to Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "idiscuss";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Failed to connect to DB!" . mysqli_connect_error());
    }
?>