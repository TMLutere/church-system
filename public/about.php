<!DOCTYPE html>
<html>
<head>
    <title>About the Pastor | The God of Solution Assembly</title>

    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(120deg,#0b1d3a,#1c3d6e,#7b1fa2);
            color:white;
        }

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

        .container{
            width:80%;
            margin:auto;
            margin-top:50px;
            background:rgba(0,0,0,0.6);
            padding:30px;
            border-radius:12px;
            box-shadow:0 0 25px rgba(0,0,0,0.7);
        }

        h1{
            text-align:center;
            color:gold;
        }

        .profile{
            text-align:center;
            margin-top:20px;
        }

        .profile img{
            width:220px;
            height:220px;
            border-radius:50%;
            border:4px solid gold;
            object-fit:cover;
        }

        .bio{
            margin-top:25px;
            line-height:1.8;
            font-size:18px;
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
    <a href="about.php">About Pastor</a>
    <a href="admin/login.php">Admin</a>
</div>

<div class="container">

    <h1>About the Pastor</h1>

    <div class="profile">
        <!-- PUT YOUR PHOTO HERE -->
        <img src="pastor.jpg" alt="Pastor Photo">
        <h2>Prophet TM Lutere</h2>
        <h3>Founder & Lead Pastor</h3>
    </div>

    <div class="bio">
        <p>
        Prophet TM Lutere is the founder and lead pastor of The God of Solution Assembly.
        He is called to preach deliverance, restoration and revival through the Word of God
        and the power of the Holy Spirit.
        </p>

        <p>
        Through his ministry, many lives have been transformed, families restored and
        believers strengthened in faith. His passion is to see people encounter God,
        grow spiritually and walk in divine purpose.
        </p>

        <p>
        The ministry emphasizes prayer, holiness, faith and the manifestation of God's
        power in everyday life.
        </p>
    </div>

</div>

<footer>
    © 2026 The God of Solution Assembly
</footer>

<?php include __DIR__ . '/../includes/whatsapp.php'; ?>
</body>
</html>