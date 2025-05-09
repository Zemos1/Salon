<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: " . ($_SESSION['role'] == 'admin' ? 'admin_dashboard.html' : 'homepagee (1).php'));
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

    $found_user = false; // Flag to track if user is found in either table

    // Prepare and bind for users table
    $stmt = $conn->prepare("SELECT id, password, 'customer' AS role FROM users WHERE username = ?"); //changed 'user' to 'customer'
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists in users table
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password, $role);
        $stmt->fetch();
        $found_user = true;
    } else {
        // Prepare and bind for admins table
        $stmt->close(); // Close previous statement
        $stmt = $conn->prepare("SELECT id, password, 'admin' AS role FROM admins WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists in admins table
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password, $role);
            $stmt->fetch();
            $found_user = true;
        }
    }

    // Verify the password if user was found
    if ($found_user && password_verify($pass, $hashed_password)) { // Combine the conditions
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $user;
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = $role;

        header("Location: " . ($role == 'admin' ? 'admin_dashboard.html' : 'homepagee (1).php'));
        exit();
    } else {
        $error_message = "Invalid username or password."; //same error message for both
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="salon_login.css">
    <title>Login - Maketh Salon</title>
</head>
<body>
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <form action="salon_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.html">Register here</a></p>
        <?php
        // Display buttons for admin (only if logged in as admin)
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo '<div style="margin-top: 20px;">';
            echo '<button onclick="window.location.href=\'admin_dashboard.html\'">Admin Page</button>';
            echo '<button onclick="window.location.href=\'homepagee (1).php\'">Customer Page</button>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
