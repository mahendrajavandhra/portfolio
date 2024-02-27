<?php
session_start();
include('db_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM newtable WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        //if successfull
        $_SESSION['username'] = $username;
        header("Location: about.php"); 
    }else{
        //if failed
        echo "Wrong username or password";
    }

}