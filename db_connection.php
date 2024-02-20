<?php
$servername = "localhost"; //server name
$username = "root"; // database username
$password = ""; //database password
$database = "database"; //database name

//create conenction
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}