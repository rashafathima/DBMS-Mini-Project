<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dummy";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    $con = mysqli_connect('localhost', 'root','','dummy');

    $email    = "";
    $password  = "";
    $errors = array();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
