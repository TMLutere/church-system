<?php
require_once '../../includes/auth.php';
require_once '../../includes/db.php';

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM members WHERE id=$id");

header("Location: view_members.php");
?>