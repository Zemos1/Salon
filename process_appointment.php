<?php
// process_appointment.php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if not logged in
    echo "<script>alert('Please log in to make an appointment.'); window.location.href='salon_login.html';</script>";
    exit;
}

// Database connection details
$host = "localhost"; // Or 127.0.0.1
$username = "root"; // Your MySQL username (default: root)
$password = ""; // Your MySQL password (default: empty for XAMPP)
$database = "maketh_salon"; // The name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get form data and sanitize
$service = sanitize_input($_POST["service"]);
$appointment_date = sanitize_input($_POST["appointment_date"]);
$appointment_time = sanitize_input($_POST["appointment_time"]);
$name = sanitize_input($_POST["name"]);
$email = sanitize_input($_POST["email"]);
$contact_number = sanitize_input($_POST["contact_number"]);

// Validate the data
$errors = array();

if (empty($name)) {
    $errors['name'] = "Name is required";
}
if (empty($email)) {
    $errors['email'] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format";
}
if (empty($contact_number)) {
    $errors['contact_number'] = "Contact number is required";
}
if (empty($appointment_date)) {
    $errors['appointment_date'] = "Appointment date is required";
}
if (empty($appointment_time)) {
    $errors['appointment_time'] = "Appointment time is required";
}

if (count($errors) > 0) {
    // Redirect back to the form with errors
    $error_message = implode("<br>", $errors);
    echo "<script>alert('$error_message'); window.location.href='appointment.php';</script>";
    exit;
} else {
    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO appointment (service, appointment_date, appointment_time, name, email, contact_number)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $service, $appointment_date, $appointment_time, $name, $email, $contact_number);

    if ($stmt->execute()) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='appointmentdbase.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
