<?php 
    session_start();
    require_once "../connect.php";
    
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'] ; 
    $stmt = DB::get()->prepare("SELECT * FROM users WHERE userName = '$username' AND password= '$password' ");
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row){
        if($row['loginStatus']=="0"){
            
            $stmt = DB::get()->prepare("UPDATE users SET loginStatus = '1', lastUpdate = NOW() 
            WHERE userID = '".$row["userID"]."'  ");
            $stmt->execute();

            if($row["status"] == "user"){

                $_SESSION["userId"] = $row["userID"];
                $_SESSION["status"] = $row["status"];
                header("Location:../index.php");

            }else if($row["status"] == "WAIT"){

                header("Location:../index.php");

            }else if($row["status"] == "VIP" ){
                //
            }else{
                echo "fail" ;
            }
        }else{

            $message =  $username." existed login!!" ;
            echo "<script type='text/javascript'>
                    var r = confirm('$message') ;
                    var js2PHP = '<?php ?>';
                    if(r){
                        document.write(js2PHP) ;
                    }else{
                        
                    }
                    </script>";
        }
    }else{
        header("Location:../index.php");
    }
?>