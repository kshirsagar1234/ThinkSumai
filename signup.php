<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Yaha database insert query likhni hai
    // Example: INSERT INTO users (username, email, password) VALUES (...)

    // Signup hone ke baad redirect karna
    header("Location: login.html");
    exit();
}
?>
