<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_id'])) {
    // Redirect to the admin dashboard if already logged in
    header("Location: admin_dashboard.php");
    exit();
}

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maketh_salon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Query the admins table
    $table_name = 'admins';
    $role = 'admin';

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM $table_name WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists in admins table
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($pass, $hashed_password)) {
            // Password is correct, start a session for admin
            $_SESSION['admin_id'] = $id;
            $_SESSION['username'] = $user;
            $_SESSION['loggedin'] = true;
            $_SESSION['role'] = $role; //set role

            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error_message = "Invalid password for admin.";
        }
    } else {
        $error_message = "No admin user found with that username.";
    }

    $stmt->close();
}

$conn->close();
?>
