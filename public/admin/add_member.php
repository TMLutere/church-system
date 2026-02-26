<?php
require_once '../../includes/auth.php';
require_once '../../includes/db.php';

if(isset($_POST['save'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    mysqli_query($conn,"INSERT INTO members(full_name,phone,email,address)
    VALUES('$name','$phone','$email','$address')");

    header("Location: view_members.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Member</title>
</head>
<body style="text-align:center; padding-top:80px;">

<h2>Add Church Member</h2>

<form method="POST">
<input name="name" placeholder="Full Name" required><br><br>
<input name="phone" placeholder="Phone"><br><br>
<input name="email" placeholder="Email"><br><br>
<input name="address" placeholder="Address"><br><br>
<button name="save">Save Member</button>
</form>

</body>
</html>