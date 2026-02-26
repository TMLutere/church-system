<?php
require_once '../../includes/auth.php';
require_once '../../includes/db.php';

$query = "SELECT * FROM events ORDER BY event_date ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Church Events</title>

    <style>
        body{
            font-family: Arial;
            background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
            color:white;
            text-align:center;
        }

        h2{
            margin-top:30px;
        }

        table{
            width:90%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            color:black;
        }

        th, td{
            padding:10px;
            border:1px solid #ccc;
        }

        th{
            background:#2ecc71;
            color:white;
        }

        .btn{
            padding:6px 12px;
            text-decoration:none;
            border-radius:5px;
            color:white;
        }

        .edit{ background:#3498db; }
        .delete{ background:#e74c3c; }

        .home{
            margin-top:20px;
            display:inline-block;
            padding:10px 18px;
            background:gold;
            color:black;
            border-radius:6px;
            text-decoration:none;
            font-weight:bold;
        }
    </style>
</head>

<body>

<h2>Church Program Control Panel</h2>

<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Date</th>
    <th>Time</th>
    <th>Venue</th>
    <th>Description</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['event_title']; ?></td>
    <td><?php echo $row['event_date']; ?></td>
    <td><?php echo $row['event_time']; ?></td>
    <td><?php echo $row['event_location']; ?></td>
    <td><?php echo $row['event_description']; ?></td>

    <td>
        <a class="btn edit" href="edit_event.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a class="btn delete" href="delete_event.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this event?');">Delete</a>
    </td>
</tr>

<?php } ?>

</table>

<br>

<a class="home" href="dashboard.php">Back Home</a>

</body>
</html>