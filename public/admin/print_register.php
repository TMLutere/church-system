<?php
require_once __DIR__ . '/../../includes/auth.php';
require_once __DIR__ . '/../../includes/db.php';

$date = date("d F Y");

$result = mysqli_query($conn, "SELECT * FROM members ORDER BY full_name ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sunday Attendance Register</title>

    <style>
        body{
            font-family: Arial;
        }

        h2{
            text-align:center;
        }

        h3{
            text-align:center;
        }

        table{
            border-collapse:collapse;
            width:100%;
        }

        th, td{
            border:1px solid black;
            padding:10px;
            text-align:left;
        }

        th{
            background:#ddd;
        }

        .sign{
            width:120px;
        }

        .center{
            text-align:center;
        }

        @media print{
            button{
                display:none;
            }
        }
    </style>
</head>

<body>

<h2>The God of Solution Assembly</h2>
<h3>Sunday Service Attendance Register</h3>
<h3><?php echo $date; ?></h3>

<br>

<div class="center">
    <button onclick="window.print()">🖨 Print Register</button>
</div>

<br><br>

<table>
<tr>
    <th>No</th>
    <th>Full Name</th>
    <th>Phone</th>
    <th class="sign">Present ✔</th>
    <th class="sign">Offering</th>
    <th class="sign">Signature</th>
</tr>

<?php 
$no = 1;
while($row = mysqli_fetch_assoc($result)){ 
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<?php } ?>

</table>

</body>
</html>