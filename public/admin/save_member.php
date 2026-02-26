<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "church_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

// Insert into database
$sql = "INSERT INTO members (full_name, phone, email, address)
VALUES ('$fullname', '$phone', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Member Registered Successfully!</h2>";
    echo "<a href='index.php'>Go Back Home</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>