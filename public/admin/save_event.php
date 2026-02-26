<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost","root","","church_db");

if($conn->connect_error){
    die("Database Connection Failed: " . $conn->connect_error);
}

$event_title = $_POST['event_title'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_location = $_POST['event_location'];
$event_description = $_POST['event_description'];

$sql = "INSERT INTO events (event_title, event_date, event_time, event_location, event_description)
VALUES ('$event_title','$event_date','$event_time','$event_location','$event_description')";

if($conn->query($sql) === TRUE){
    echo "<h1 style='text-align:center;margin-top:80px;'>Event Added Successfully!</h1>";
    echo "<center><a href='view_events.php'>View Events</a></center>";
}else{
    echo "Error: " . $conn->error;
}

$conn->close();
?>