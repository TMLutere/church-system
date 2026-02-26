<?php
require_once __DIR__ . '/../../includes/auth.php';
require_once __DIR__ . '/../../includes/db.php';

/* SEARCH FUNCTION */
if(isset($_GET['search']) && $_GET['search'] != ''){
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM members WHERE full_name LIKE '%$search%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM members ORDER BY id DESC";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Church Members</title>
    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }
        h2{
            text-align:center;
        }
        table{
            border-collapse:collapse;
            width:90%;
            margin:auto;
            background:white;
        }
        th, td{
            border:1px solid black;
            padding:10px;
            text-align:left;
        }
        th{
            background:gold;
        }
        .top-bar{
            width:90%;
            margin:20px auto;
            text-align:center;
        }
        .btn{
            padding:8px 12px;
            text-decoration:none;
            color:white;
            border-radius:4px;
        }
        .edit{ background:#007bff; }
        .delete{ background:#dc3545; }
        .add{ background:green; }
        .logout{ background:#444; }
        input[type=text]{
            padding:8px;
            width:250px;
        }
    </style>
</head>

<body>

<h2>Church Members</h2>

<div class="top-bar">
    <form method="GET">
        <input type="text" name="search" placeholder="Search member name...">
        <button type="submit">Search</button>
    </form>
    <br>
    <a class="btn add" href="add_member.php">Add Member</a>
    <a class="btn logout" href="logout.php">Logout</a>
</div>

<table>
<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td>
        <a class="btn edit" href="edit_member.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a class="btn delete" href="delete_member.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this member?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>