<?php
$secret = "your_secret_key_here";
$email = "your_email@example.com";
$password = "your_password";

// Encrypt the email and password using SHA256 algorithm
$encrypted_email = hash('sha256', $email);
$encrypted_password = hash('sha256', $password);

// Log the encrypted emails and passwords in a database for security reasons.
$server = "localhost";
$username = "root";
$password = $secret;
$dbname = "your_db_name";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$encrypted_email', '$encrypted_password')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
