<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "location";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    $con = mysqli_connect('localhost', 'root','','location');
    
    $email    = "";
    $password  = "";
    $errors = array(); 

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>