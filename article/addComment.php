<?php 
    require_once "../connect.php";

    $detail = $_POST['detail'];
    $articleId = $_POST['articleId'];
    $userId = $_POST['userId'];

    try{
        $stmt = DB::get()->prepare("INSERT INTO comments VALUES (NULL,'$detail',NOW(),$articleId,$userId);");
        $stmt->execute();
        
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>