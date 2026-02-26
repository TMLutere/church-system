<?php
$conn = new mysqli("localhost","root","","church_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM events ORDER BY event_date ASC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Upcoming Church Programs</title>

<style>
body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#060b3f,#000000);
    color:white;
    text-align:center;
}

h1{
    margin-top:40px;
    font-size:40px;
}

.container{
    width:90%;
    margin:auto;
    margin-top:40px;
}

.card{
    background:rgba(255,255,255,0.08);
    padding:20px;
    margin:20px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(0,255,150,0.2);
}

.card h2{
    color:#00ffcc;
}

.details{
    font-size:18px;
    margin-top:10px;
}

.back{
    display:inline-block;
    margin-top:30px;
    padding:12px 25px;
    background:gold;
    color:black;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}
</style>
</head>

<body>

<h1>Upcoming Church Programs</h1>

<div class="container">

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>

<div class="card">
    <h2><?php echo $row['event_title']; ?></h2>

    <div class="details">
        <b>Date:</b> <?php echo $row['event_date']; ?><br><br>
        <b>Time:</b> <?php echo $row['event_time']; ?><br><br>
        <b>Venue:</b> <?php echo $row['event_location']; ?><br><br>
        <b>Description:</b><br>
        <?php echo $row['event_description']; ?>
    </div>
</div>

<?php
    }
}else{
    echo "<h2>No upcoming programs yet.</h2>";
}
?>

</div>

<a class="back" href="index.php">Back Home</a>

<?php include __DIR__ . '/../includes/whatsapp.php'; ?>
</body>
</html>