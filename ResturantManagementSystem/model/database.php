<?php
function dbConnection() {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "resturant_management_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>

