<!-- admin_dashboard.php -->

<?php
session_start(); // Start the session

// Check if the admin is logged in
if (!isset($_SESSION['admin_username'])) {
    header("Location: admin.php"); // Redirect to the login page if not logged in
    exit;
}

// Display the admin dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['admin_username']; ?></h1>
    <ul>
        <li><a href="add_supplier.php">Add Supplier</a></li>
        <li><a href="display_supplier.php">View Suppliers</a></li>
        <li><a href="display_customer.php">View Customers</a></li>
        <!-- Add more dashboard links as needed -->
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
