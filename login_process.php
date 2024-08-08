<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galaxyCare";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hash);
    $stmt->fetch();

    if (password_verify($password, $hash)) {
        $_SESSION['admin_id'] = $id;
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>
