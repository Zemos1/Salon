<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Collect and sanitize form data
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $service = htmlspecialchars($_POST['service']);
                $date = htmlspecialchars($_POST['date']);
                $time = htmlspecialchars($_POST['time']);
                $notes = htmlspecialchars($_POST['notes']);

                // Here you can add code to save the appointment to a database or send an email
                echo "<p>Thank you, $name! Your appointment for $service on $date at $time has been submitted.</p>";
            }
            ?>