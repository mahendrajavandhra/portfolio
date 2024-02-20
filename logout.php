<?php
session_start();

//unset all the session variable
$_SESSION = array();

//destroy the session
session_destroy();

//redirect to login page after logout
header("Location: login.php");
exit();