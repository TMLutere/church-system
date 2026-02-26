<?php
require_once '../../includes/auth.php';
require_once '../../includes/db.php';

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM events WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $title=$_POST['title'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $venue=$_POST['venue'];
    $description=$_POST['description'];

    mysqli_query($conn,"UPDATE events SET
    title='$title',
    event_date='$date',
    event_time='$time',
    venue='$venue',
    description='$description'
    WHERE id=$id");

    header("Location: manage_events.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Event</title>
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
</style>
</head>
<body>

<h2>Edit Church Event</h2>

<form method="POST">
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br>
<input type="date" name="date" value="<?php echo $row['event_date']; ?>"><br>
<input type="time" name="time" value="<?php echo $row['event_time']; ?>"><br>
<input type="text" name="venue" value="<?php echo $row['venue']; ?>"><br>
<textarea name="description"><?php echo $row['description']; ?></textarea><br>

<button name="update">Update Event</button>
</form>

<br>
<a href="dashboard.php" style="color:gold;">Back Home</a>

</body>
</html>