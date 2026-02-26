<?php
$conn = new mysqli("localhost","root","","church_db");

$id = $_POST['id'];
$title = $_POST['event_title'];
$date = $_POST['event_date'];
$time = $_POST['event_time'];
$location = $_POST['event_location'];
$description = $_POST['event_description'];

$sql = "UPDATE events SET
event_title='$title',
event_date='$date',
event_time='$time',
event_location='$location',
event_description='$description'
WHERE id=$id";

if($conn->query($sql) === TRUE){
    echo "
    <html>
    <body style='text-align:center;font-family:Arial;background:#0b1c3d;color:white;padding-top:100px'>
    <h1>Program Updated Successfully</h1>
    <br>
    <a href='manage_events.php' style='background:#ffd700;color:black;padding:12px 25px;text-decoration:none;border-radius:8px'>Back to Control Panel</a>
    </body>
    </html>";
}
else{
    echo "Error updating";
}
?>