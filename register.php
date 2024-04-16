<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the form data (e.g., check if passwords match, etc.)
    // For demonstration purposes, the validation is not included in this example

    // If validation passes, you can proceed to insert the data into the database
    // You should also hash the password before storing it in the database for security

    // Example of inserting data into a database using PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $stmt->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT)
        ));

        // Redirect to a success page or display a success message
        header('Location: success.html');
        exit();
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        exit();
    }
}
?>
