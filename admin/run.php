<?php 
    include "../connect.php";
    $value = $_POST["content"];
    $str = "INSERT INTO NEWS(NewsContent) VALUES ('$value')" ;
    $stmt = $pdo->prepare($str);
    $stmt->execute();
?>    