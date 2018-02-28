<?php
    require_once('config.php');
    
date_default_timezone_set('Asia/Bangkok');
$pdo = new PDO("mysql:host=localhost;dbname=climbblog", "root","");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );

$base_url = "http://localhost:8080/climb_web/index.php" ; 
?>