<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Church Visitors</title>

<style>
body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#0a0f3c,#1c3fa8,#6a1b9a);
    color:white;
}

/* top bar */
.topbar{
    width:100%;
    padding:15px 30px;
    background: rgba(0,0,0,0.35);
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 3px 10px rgba(0,0,0,0.4);
}

.topbar h2{
    margin:0;
    color:#ffd700;
}

.logout{
    background:#ff4d4d;
    padding:10px 18px;
    text-decoration:none;
    color:white;
    border-radius:8px;
    font-weight:bold;
}

/* container */
.container{
    width:90%;
    margin:40px auto;
    background:rgba(255,255,255,0.08);
    padding:25px;
    border-radius:14px;
    box-shadow:0 0 18px rgba(0,0,0,0.5);
}

/* download button */
.download{
    display:inline-block;
    margin-bottom:20px;
    background:#00d084;
    padding:12px 20px;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-weight:bold;
}

/* table */
table{
    width:100%;
    border-collapse:collapse;
    background:white;
    color:black;
    border-radius:10px;
    overflow:hidden;
}

th{
    background:#2ecc71;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

.back{
    display:inline-block;
    margin-top:20px;
    background:#ffd700;
    color:black;
    padding:12px 22px;
    text-decoration:none;
    border-radius:10px;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="topbar">
    <h2>Church Visitors / Registrations</h2>
    <a class="logout" href="logout.php">Logout</a>
</div>

<div class="container">

<center>
<a class="download" href="export_registrations.php">Download Visitor List (Excel)</a>
</center>

<table border="1">
<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Service</th>
    <th>Registration Date</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM registrations ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['full_name']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['service']."</td>
<td>".$row['reg_date']."</td>
</tr>";
}
?>

</table>

<center>
<a class="back" href="admin_dashboard.php">Back to Dashboard</a>
</center>

</div>

</body>
</html>