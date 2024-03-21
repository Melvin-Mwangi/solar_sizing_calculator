<!-- validate.php -->

<?php

// Database connection (replace with your actual credentials)
include 'admindb.php';

// Validate admin login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if credentials are valid
    // (use prepared statements to prevent SQL injection)
    // Example: SELECT * FROM adminlogin WHERE username = :username AND password = :password

    // If valid, set session variable and redirect to admin dashboard
    if ($valid_credentials) {
        $_SESSION['admin_username'] = $username;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password.";
    }
}
?>
