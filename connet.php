<?php

// Database connection parameters
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "67-03-501";

// Create a database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>	
