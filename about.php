<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="about.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="profile-card">
            <div class="image">
                <img src="profile.png" class="profile-picture">
            </div>
            <div class="text-area">
                <span class="name">Dishant Patel</span>
                <span class="profession">Student at TUAS</span>
            </div>
            <div class="icons">
                <a href="https://www.facebook.com/profile.php?id=100069458357730&mibextid=ZbWKwL" style="background-color: #1877F2;" class="link"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/dishant_0154?igsh=ODA1NTc5OTg5Nw==" style="background-color: #E1306C;" class="link"><i class='bx bxl-instagram'></i></a>
                <a href="https://x.com/Dishant_0154?t=rg7FOWhvdNsQAFWyh9jTMA&s=09" style="background-color: #1DA1F2;" class="link"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.snapchat.com/add/dishant_0154?share_id=vPtzKEXeQj4&locale=en-GB" style="background-color: #FFFC00;" class="link"><i class='bx bxl-snapchat' ></i></a>
            </div>
            <div class="buttons">
                <a href="https://youtube.com/@dishantpatel934?si=Ve7M_lmMMVncs1qx"><button class="button" >Subscribe</button></a>
                <a href="https://wa.me/+358415771876"><button class="button">Message</button></a>
            </div>
        </div>
    </body>
</html>