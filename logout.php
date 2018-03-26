<?php 
session_start();
unset($_SESSION['userId']);
unset($_SESSION['status']);
session_destroy(); // ทำลาย session
header("Location:index.php"); 
?>