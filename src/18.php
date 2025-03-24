<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query
$sql = "SELECT * FROM users WHERE id = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Found the number of rows : " . $result->num_rows;
} else {
    echo "No results found.";
}

$conn->close();
?>
