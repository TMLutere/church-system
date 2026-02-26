<?php
require_once '../includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Messages | The God of Solution Assembly</title>

    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(120deg,#0b1d3a,#1c3d6e,#7b1fa2);
            color:white;
        }

        /* NAVBAR */
        .navbar{
            background:black;
            padding:15px;
            text-align:center;
        }

        .navbar a{
            color:white;
            margin:0 20px;
            text-decoration:none;
            font-weight:bold;
        }

        .navbar a:hover{
            color:gold;
        }

        h1{
            text-align:center;
            margin-top:40px;
        }

        .sermon-box{
            width:70%;
            margin:40px auto;
            background:rgba(0,0,0,0.55);
            padding:25px;
            border-radius:12px;
            box-shadow:0 0 20px rgba(0,0,0,0.6);
        }

        .sermon-title{
            color:gold;
            font-size:24px;
            margin-bottom:10px;
        }

        .sermon-date{
            font-size:14px;
            color:#ddd;
            margin-bottom:20px;
        }

        .scripture{
            color:#90caf9;
            font-weight:bold;
            margin-bottom:15px;
        }

        footer{
            text-align:center;
            padding:25px;
            background:black;
            margin-top:60px;
        }
    </style>
</head>

<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="register.php">Join Us</a>
    <a href="events.php">Events</a>
    <a href="sermons.php">Messages</a>
    <a href="admin/login.php">Admin</a>
</div>

<h1>Church Messages & Teachings</h1>

<div class="sermon-box">
    <div class="sermon-title">The Power of Faith</div>
    <div class="sermon-date">Preached: Sunday Service</div>
    <div class="scripture">Main Scripture: Hebrews 11:1</div>

    <p>
    Faith is the substance of things hoped for and the evidence of things not seen.
    God works through faith. When a believer trusts God completely, heaven responds.
    Faith is not feelings, faith is confidence in God's Word even before manifestation.
    </p>

    <p>
    Many believers pray but doubt after praying. Faith requires standing on God's
    promises. When we believe first, then miracles follow.
    </p>
</div>

<div class="sermon-box">
    <div class="sermon-title">Walking in Divine Favor</div>
    <div class="sermon-date">Midweek Service</div>
    <div class="scripture">Main Scripture: Psalm 5:12</div>

    <p>
    Divine favor makes a man receive what he did not qualify for naturally.
    When God surrounds you with favor, doors open without struggle.
    Favor is not luck — it is God's hand upon your life.
    </p>

    <p>
    A believer walking in obedience positions himself for favor.
    Prayer, holiness and faith activate favor.
    </p>
</div>

<footer>
    © <?php echo date("Y"); ?> The God of Solution Assembly
</footer>

<?php include __DIR__ . '/../includes/whatsapp.php'; ?>
</body>
</html>