<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Church Service Registration</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background:linear-gradient(135deg,#0b1c3d,#5a0f2e);
    color:white;
    text-align:center;
}

.container{
    width:420px;
    margin:80px auto;
    background:rgba(255,255,255,0.08);
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(0,0,0,0.6);
}

h2{
    color:#ffd700;
}

input,select{
    width:90%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:8px;
}

button{
    background:#ffd700;
    border:none;
    padding:12px 25px;
    font-weight:bold;
    border-radius:10px;
    cursor:pointer;
}

button:hover{
    background:#ffcc00;
}

.back{
    margin-top:15px;
    display:block;
    color:white;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="container">
<h2>Register For Church Service</h2>

<form method="POST" action="save_registration.php">

<input type="text" name="full_name" placeholder="Full Name" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<input type="email" name="email" placeholder="Email Address" required>

<select name="service" required>
<option value="">Select Service</option>
<option>Sunday Healing Service</option>
<option>Night Prayer</option>
<option>Youth Conference</option>
<option>Revival Service</option>
</select>

<br><br>

<button type="submit">Register</button>

</form>

<a class="back" href="index.php">Back Home</a>
</div>

<?php include __DIR__ . '/../includes/whatsapp.php'; ?>
</body>
</html>