<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include 'db.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=church_visitors.csv');

$output = fopen("php://output", "w");

/* column headings */
fputcsv($output, array('ID','Full Name','Phone','Email','Service','Registration Date'));

$query = mysqli_query($conn, "SELECT * FROM registrations");

while($row = mysqli_fetch_assoc($query))
{
    // IMPORTANT: force Excel to treat phone as TEXT
    $row['phone'] = "'".$row['phone'];

    fputcsv($output, $row);
}

fclose($output);
exit();
?>