<?php
// Retrieve the email and password from the request
$email = $_POST['email'];
$password = $_POST['password'];

// Perform the authentication (e.g., check against a database)
// For demonstration purposes, let's assume the password is "password"
if ($email == 'example@example.com' && $password == 'password') {
    http_response_code(200); // OK status
} else {
    http_response_code(401); // Unauthorized status
}
?>
