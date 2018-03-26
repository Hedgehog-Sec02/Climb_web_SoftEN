<?php 
    
    class User {

        public function getUser($UserID){
            try {
                $str = "SELECT * FROM users WHERE userID = '$UserID'";
                $stmt = DB::get()->prepare($str);
                $stmt->execute(); 
                $row = $stmt->fetch(PDO::FETCH_ASSOC) ;
                return $row ;
            }catch(PDOException $e){
                throw $e;
            }
        }
    }

?>