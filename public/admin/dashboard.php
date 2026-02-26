<?php
require_once __DIR__ . '/../../includes/auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Church Admin Panel</title>

    <style>
        body{
            background: linear-gradient(to right, #1a0000, #330000, #000000);
            font-family: Arial;
            color: white;
            text-align:center;
            padding-top:100px;
        }

        h1{
            margin-bottom:10px;
        }

        .btn{
            display:block;
            width:260px;
            margin:15px auto;
            padding:15px;
            font-size:16px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            color:black;
            font-weight:bold;
        }

        .yellow{
            background:gold;
        }

        .green{
            background:#28a745;
            color:white;
        }

        .red{
            background:#e74c3c;
            color:white;
        }

        .blue{
            background:#3498db;
            color:white;
        }
    </style>
</head>

<body>

<h1>Church Admin Panel</h1>
<h2>Welcome admin</h2>

<!-- VIEW MEMBERS -->
<a href="view_members.php" class="btn yellow">View Members</a>

<!-- ADD MEMBER -->
<a href="add_member.php" class="btn yellow">Add Member</a>

<!-- PRINT REGISTER (NEW FEATURE) -->
<a href="print_register.php" class="btn green">Print Attendance Register</a>

<!-- EVENTS -->
<a href="manage_events.php" class="btn blue">Manage Church Events</a>

<!-- LOGOUT -->
<a href="logout.php" class="btn red">Logout</a>

</body>
</html>