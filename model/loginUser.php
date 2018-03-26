<?php 
    session_start();
    require_once "../connect.php";
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'] ; 
    $stmt = DB::get()->prepare("SELECT * FROM users WHERE userName = '$username' AND password= '$password' ");
    $stmt->execute();
    $row = $stmt->fetch();

    echo $row["userID"];
    echo $row["status"];
    if ($row){
        $_SESSION["userId"] = $row["userID"];
        $_SESSION["status"] = $row["status"];
        
        if($row["status"] == "user"){
            header("Location:../index.php");
        }else if($row["status"] == "WAIT"){
            // 
        }else if($row["status"] == "VIP" ){
            //
        }else{
            echo "fail" ;
        }
    }else{
        echo "no id" ;
    }
?>