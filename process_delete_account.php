<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: salon_login.php"); // Redirect to login if not logged in
    exit();
}

// Database connection parameters
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "maketh_salon"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Prepare and execute the delete statement
$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);

if ($stmt->execute()) {
    // Account deleted successfully
    session_destroy(); // Destroy the session
    header("Location: homepagee (1).php"); // Redirect to the homepage after deletion
    exit();
} else {
    echo "Error deleting account: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>