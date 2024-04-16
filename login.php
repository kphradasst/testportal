<?php
$servername = "localhost";
$username = "kinglennin.bioprime@gmail.com";
$password = "king06";
$dbname = "employeeportallogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
