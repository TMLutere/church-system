<?php
require_once '../includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Church Events</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background:#0b0f2f;
    color:white;
}

.navbar{
    background:black;
    padding:18px;
    text-align:center;
}

.navbar a{
    color:white;
    margin:0 18px;
    text-decoration:none;
    font-weight:bold;
    font-size:18px;
}

.navbar a:hover{
    color:gold;
}

.header{
    text-align:center;
    padding:40px;
}

.container{
    width:80%;
    margin:auto;
}

.event{
    background:#111a4b;
    padding:20px;
    margin-bottom:20px;
    border-left:6px solid gold;
    border-radius:8px;
}

.title{
    color:gold;
    font-size:24px;
}

.footer{
    background:black;
    padding:20px;
    text-align:center;
    margin-top:40px;
}
</style>
</head>

<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="register.php">Join Us</a>
    <a href="events.php">Events</a>
    <a href="admin/login.php">Admin</a>
</div>

<div class="header">
    <h1>Upcoming Church Programs</h1>
</div>

<div class="container">

<?php
$result = mysqli_query($conn, "SELECT * FROM events ORDER BY event_date ASC");

if(mysqli_num_rows($result) == 0){
    echo "<h2 style='text-align:center;'>No programs available</h2>";
}

while($row = mysqli_fetch_assoc($result)){
?>

<div class="event">
    <div class="title"><?php echo $row['event_title']; ?></div>
    <p><b>Date:</b> <?php echo $row['event_date']; ?></p>
    <p><b>Time:</b> <?php echo $row['event_time']; ?></p>
    <p><b>Venue:</b> <?php echo $row['event_location']; ?></p>
    <p><b>Description:</b><br><?php echo $row['event_description']; ?></p>
</div>

<?php } ?>

</div>

<div class="footer">
© <?php echo date('Y'); ?> The God of Solution Assembly
</div>

<?php include __DIR__ . '/../includes/whatsapp.php'; ?>
</body>
</html>