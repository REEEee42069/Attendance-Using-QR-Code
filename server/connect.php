<?php
  
//connect to db 
$conn = new mysqli("sql113.infinityfree.com","if0_37425336","v235sWi2CrBeAgY","if0_37425336_test1");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//set date zone for India.
date_default_timezone_set('Asia/Kolkata');

if(!(isset($_SESSION['teacher-name']))){
	header('Location: teacherlogin.php');
	die();
}
?>

