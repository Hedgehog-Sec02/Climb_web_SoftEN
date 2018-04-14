<?php 
require_once "connect.php" ; 


session_start();
$stmt = DB::get()->prepare("UPDATE users SET loginStatus = '0', lastUpdate = NOW() 
            WHERE userID = '".$_SESSION["userId"]."'");
$stmt->execute();

unset($_SESSION['userId']);
unset($_SESSION['status']);
session_destroy(); // ทำลาย session
header("Location:index.php"); 
?>