<?php
// VERY IMPORTANT — must be the FIRST line in the file
define('ROOT_PATH', dirname(__DIR__));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The God of Solution Assembly</title>

<style>

body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#0b1d3a,#3b0a45);
    color:white;
}

/* NAVBAR */
.navbar{
    background:#111;
    padding:15px;
    text-align:center;
}

.navbar a{
    color:white;
    text-decoration:none;
    margin:0 20px;
    font-weight:bold;
}

.navbar a:hover{
    color:gold;
}

/* HERO */
.hero{
    background:url('pastor.jpg') center/cover no-repeat;
    height:320px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.hero-box{
    background:rgba(0,0,0,0.6);
    padding:25px;
    border-radius:8px;
    text-align:center;
}

.hero-box h1{
    color:gold;
    margin:0;
}

.hero-box p{
    margin-top:10px;
    font-size:18px;
}

/* SERVICE */
.service{
    text-align:center;
    padding:40px;
}

.service h2{
    color:gold;
}

/* FOOTER */
.footer{
    text-align:center;
    padding:20px;
    background:#111;
    margin-top:40px;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="register.php">Join Us</a>
    <a href="events.php">Events</a>
    <a href="admin/login.php">Admin</a>
</div>

<!-- HERO -->
<div class="hero">
    <div class="hero-box">
        <h1>Welcome to The God of Solution Assembly</h1>
        <p>Worship • Word • Revival</p>
    </div>
</div>

<!-- SERVICE -->
<div class="service">
    <h2>Sunday Service</h2>
    <p>Every Sunday — 09:00 AM</p>
    <p>Come and experience the power of God through worship and the Word.</p>
</div>

<!-- FOOTER -->
<div class="footer">
    © <?php echo date('Y'); ?> The God of Solution Assembly
</div>

<?php require_once ROOT_PATH . '/includes/whatsapp.php'; ?>

</body>
</html>