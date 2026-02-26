<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];

    $sql = "INSERT INTO registrations (full_name, phone, email, service)
            VALUES ('$name','$phone','$email','$service')";

    if(mysqli_query($conn,$sql))
    {
        echo "
        <html>
        <body style='
        background:linear-gradient(135deg,#0b1c3d,#5a0f2e);
        color:white;
        text-align:center;
        font-family:Arial;
        padding-top:120px;
        '>

        <h1 style='color:#ffd700;'>Registration Successful!</h1>
        <h3>We are expecting you at church 🙏</h3>

        <a href='index.php' style='
        background:#ffd700;
        padding:12px 25px;
        text-decoration:none;
        color:black;
        border-radius:10px;
        font-weight:bold;
        display:inline-block;
        margin-top:20px;
        '>Back Home</a>

        </body>
        </html>";
    }
    else
    {
        echo "Error saving registration";
    }
}
?>