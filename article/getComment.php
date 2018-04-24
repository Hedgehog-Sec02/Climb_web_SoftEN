<?php 
    class Comment {
        public function getComment($ArticleID){
            try {
               
                $str = "SELECT * FROM comments WHERE articleID = '$ArticleID' ORDER BY commentsID ";
                $stmt = DB::get()->prepare($str);
                $stmt->execute(); 
                return $stmt;
            }catch(PDOException $e){
                throw $e;
            }
        }

        
    }
?>