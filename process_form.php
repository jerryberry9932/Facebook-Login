<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Process the data (e.g., store it in a database)
    // For demonstration purposes, let's just print the data
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}
?>
