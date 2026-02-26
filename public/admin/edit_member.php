<?php
session_start();
require_once __DIR__ . '/../../includes/db.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

if(!isset($_GET['id'])){
    header("Location: view_members.php");
    exit();
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM members WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Member</title>
<style>
body{
    font-family: Arial;
    background:#0b1a2e;
    color:white;
    text-align:center;
}
form{
    margin-top:40px;
}
input{
    display:block;
    margin:10px auto;
    padding:10px;
    width:260px;
}
button{
    padding:10px 20px;
    background:#f1c40f;
    border:none;
    cursor:pointer;
}
a{
    color:yellow;
}
</style>
</head>

<body>

<h1>Edit Church Member</h1>

<form method="POST" action="update_member.php">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required>

<input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>

<input type="email" name="email" value="<?php echo $row['email']; ?>">

<input type="text" name="address" value="<?php echo $row['address']; ?>">

<button type="submit" name="update">Update Member</button>

</form>

<br>
<a href="view_members.php">Back</a>

</body>
</html>