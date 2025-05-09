<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="admin_register.css">
    <title>Register - Maketh Salon</title>

</head>
<body>
    <div class="register-container">
        <h2>Register to Maketh Salon</h2>
        <?php
        // Include the database connection file
        include("admin_register.php"); // Ensure this path is correct

        // Initialize error and success message variables
        $error_message = "";
        $success_message = "";
        $is_admin = false; //added

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data and sanitize it
            $username = mysqli_real_escape_string($conn, $_POST["username"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
            $is_admin = isset($_POST['is_admin']) && $_POST['is_admin'] == '1'; //check if admin

            // Determine the table name based on user type
            $table_name = $is_admin ? 'admins' : 'users';

            // Check if username or email already exists
            $check_query = "SELECT * FROM $table_name WHERE username='$username' OR email='$email'";
            $check_result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($check_result) > 0) {
                $error_message = "Username or email already exists. Please choose different credentials.";
            } else {
                // Insert the data into the database
                $insert_query = "INSERT INTO $table_name (username, email, password) VALUES ('$username', '$email', '$password')";
                if (mysqli_query($conn, $insert_query)) {
                    $success_message = "Registration successful! Please <a href='salon_login.php'>login</a> to continue.";
                } else {
                    $error_message = "Error: " . mysqli_error($conn);
                }
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>

        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <?php if (!empty($success_message)): ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="is_admin">Register as Admin:</label>
                <input type="checkbox" id="is_admin" name="is_admin" value="1">
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="admin_loging.php">Login here</a></p>
        <p>
            <a href="admin_loging.php">Login as Admin</a>
        </p>
    </div>

     <script>
        // You can add JavaScript form validation here if needed
        // For example, to check if the password is strong enough
    </script>
</body>
</html>
