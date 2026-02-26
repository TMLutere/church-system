<?php
require_once '../../includes/auth.php';
require_once '../../includes/db.php';

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];

    mysqli_query($conn,"INSERT INTO events(title,event_date,event_time,venue,description)
    VALUES('$title','$date','$time','$venue','$description')");

    header("Location: manage_events.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Church Event</title>
<style>
body{
    background:#111;
    color:white;
    text-align:center;
    font-family:Arial;
}
input,textarea{
    width:300px;
    padding:10px;
    margin:8px;
}
button{
    padding:10px 20px;
    background:gold;
    border:none;
}
.back{
    display:block;
    margin-top:15px;
    color:gold;
    text-decoration:none;
}
</style>
</head>
<body>

<h2>Add Church Event</h2>

<form method="POST">
<input type="text" name="title" placeholder="Event Title" required><br>
<input type="date" name="date" required><br>
<input type="time" name="time" required><br>
<input type="text" name="venue" placeholder="Venue"><br>
<textarea name="description" placeholder="Description"></textarea><br>
<button name="save">Save Event</button>
</form>

<a href="dashboard.php" class="back">Back Home</a>

</body>
</html>