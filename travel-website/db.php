<?php
$servername = "localhost";
$username = "root";  // MySQL username
$password = "";  // MySQL password
$dbname = "travel_website";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


