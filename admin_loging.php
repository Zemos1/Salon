<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <title>Admin Login - Maketh Salon</title>
    <link rel="stylesheet" href="admin_login.css"> </head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <form action="admin_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>
            <a href="salon_login.php">Login as Customer</a>
        </p>
        <p>
            <a href="admin_registers.php">Register as Admin</a>
        </p>
    </div>
</body>
</html>
