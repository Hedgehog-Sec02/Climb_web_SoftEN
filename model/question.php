<?php 
    class Question {
        
        
        public function getQuestion1(){
            try {
                $str = "SELECT * FROM Question WHERE qcatalog='1' "; 
                $stmt = DB::get()->prepare($str);
                $stmt->execute();
                return $stmt ;
            }catch(PDOException $e){
                throw $e;
            }
        }


        public function getQuestion2(){
            try {
                $str = "SELECT * FROM Question WHERE qcatalog='2' "; 
                $stmt = DB::get()->prepare($str);
                $stmt->execute();
                return $stmt ;
               
            }catch(PDOException $e){
                throw $e;
            }
        }


        public function getQuestion3(){
            try {
                $str = "SELECT * FROM Question WHERE qcatalog='3' "; 
                $stmt = DB::get()->prepare($str);
                $stmt->execute();
                return $stmt ;
               
            }catch(PDOException $e){
                throw $e;
            }
        }

    }

?>