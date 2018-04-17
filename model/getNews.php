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

        public function getAll(){
            try {
                $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS ORDER BY TIMEDATE DESC";
                $stmt2 = DB::get()->prepare($str);
                $stmt2->execute();
                return $stmt2;
            }catch(PDOException $e){
                throw $e ;
            }
        }
    
        public function getListNewsID(){
            try {
                $stmt = DB::get()->prepare("SELECT * FROM NEWS ORDER BY TIMEDATE DESC");
                $stmt->execute();
                $test[0] = NULL ;
                $i = 1 ;// initial pointer 
                // ลูปเพื่อหาลำดับของข่าว โดยเก็บ NewsID ไว้ใน Array ชื่อ test[]
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $test[$i] = $row["NewsID"] ; echo " " ;
                    if($test[$i] == $_GET["NewsID"]){ $chk = $i ;}    
                    $i = $i + 1 ; 
                }
                return array($test, $chk) ;
            }catch(PDOException $e){
                throw $e ;
            }
        }
    }

?>