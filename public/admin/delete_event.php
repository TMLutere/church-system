<?php
$conn = new mysqli("localhost","root","","church_db");

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM events WHERE id=$id";

if($conn->query($sql) === TRUE){
    echo "
    <html>
    <head>
    <style>
    body{
        font-family:Arial;
        background:linear-gradient(135deg,#0b1c3d,#1b2c6b,#091433);
        color:white;
        text-align:center;
        padding-top:100px;
    }
    a{
        background:#ffd700;
        color:black;
        padding:12px 25px;
        text-decoration:none;
        border-radius:8px;
        font-weight:bold;
    }
    </style>
    </head>
    <body>
    <h1>Program Deleted Successfully</h1>
    <br>
    <a href='manage_events.php'>Back to Control Panel</a>
    </body>
    </html>
    ";
}
else{
    echo "Error deleting program";
}
?>