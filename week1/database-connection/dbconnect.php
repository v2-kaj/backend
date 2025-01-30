<?php
    // Database connection details
$host = 'localhost';      
$dbname = 'tria';       
$username = 'root';       
$password = '';           

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!<br>";
?>