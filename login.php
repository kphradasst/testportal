<?php
$servername = "localhost";
$username = "%king";
$password = "king06";
$dbname = "employeeportallogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User authenticated
    // Redirect to the index.html page
    header("Location: index.html");
    exit();
} else {
    // Invalid credentials
    echo "Invalid email or password. Please try again.";
}

$conn->close();
?>
