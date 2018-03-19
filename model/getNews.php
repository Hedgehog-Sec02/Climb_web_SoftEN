<?php 
    
    class News {

        
        public function getNews($NewsID){
            try {
               
                $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS 
                WHERE NewsID = '$NewsID' ORDER BY TIMEDATE DESC";
                $stmt = DB::get()->prepare($str);
                $stmt->execute(); 
                $row = $stmt->fetch(PDO::FETCH_ASSOC) ;
                return $row ;
            }catch(PDOException $e){
                throw $e;
            }
        }


        public function getSlideFiveNews(){
            try {
                $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS ORDER BY TIMEDATE DESC LIMIT 5";
                $stmt = DB::get()->prepare($str);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                throw $e ;
            }
        }

        public
         function getAll(){
            try {
                $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS ORDER BY TIMEDATE DESC";
                $stmt2 = DB::get()->prepare($str);
                $stmt2->execute();
                return $stmt2;
            }catch(PDOException $e){
                throw $e ;
            }
        }
    }

?>