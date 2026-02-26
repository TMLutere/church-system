<?php
session_start();
require_once __DIR__ . '/../../includes/db.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

/* ---------- THIS PART WAS THE PROBLEM ---------- */
/* The page must only run when form is submitted   */

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("UPDATE members SET full_name=?, phone=?, email=?, address=? WHERE id=?");
    $stmt->bind_param("ssssi", $full_name, $phone, $email, $address, $id);
    $stmt->execute();

    header("Location: view_members.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Member</title>
</head>
<body>

<h2 style="text-align:center;">Updating...</h2>

</body>
</html>