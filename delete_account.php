<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: salon_login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="account.css"> <!-- Add your CSS file here -->
    <title>Delete Account - Maketh Salon</title>
</head>
<body>
    <div class="delete-account-container">
        <h2>Are you sure you want to delete your account?</h2>
        <form action="process_delete_account.php" method="POST">
            <button type="submit">Yes, Delete My Account</button>
        </form>
        <a href="account.php">Cancel</a>
    </div>
</body>
</html>