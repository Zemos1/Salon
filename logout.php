<?php
session_start(); // Start the session

// Destroy the session to log out the user
session_destroy(); 

// Redirect to the login page
header("Location: homepagee (1).php"); // Redirect to the homepage after logout
exit();
?>