<?php

$host = "localhost";
$username = "root";  
$password = "";    
$database = "payment";

try {
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Database connection unsuccessful: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

?>
