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
        <title>Anime Aura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="model-website.css">
    </head>
    <body>
        <nav class="top">
            <div class="left"><a href="#">Portfolio website</a></div>
            <div class="right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">projects</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
              <div class="contain">
                <div class="head">here you can put your information</div>
                <div class="head">also projects</div>
                <div class="button">
                    <button class="buy">Contact</button>
                    <button class="later">show projects</button>
                </div>
              </div>      
        </div>
    </body>
</html>