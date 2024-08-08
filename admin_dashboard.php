<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Your admin dashboard content goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Manage your site content here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
