<?php   

/*date_default_timezone_set('Asia/Bangkok');
$pdo = new PDO("mysql:host=localhost;dbname=climbblog", "root","");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );*/

$base_url = "http://localhost:8080/climb_web/" ; 
    class DB {
        private static $instance = null ;

        public static function get(){
            if(self::$instance == null ){
                try{
                    self::$instance = new PDO("mysql:host=localhost;dbname=climbblog", "root","");
                    //self::$instance = new PDO("mysql:host=10.199.66.227;dbname=sec02_hedge", "Sec02_Hedge","G8h34Ed9");
                    self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                    self::$instance->exec ( "SET NAMES \"utf8\"" );
                }catch(PDOException $e){
                    throw $e ;
                }
            }
            return self::$instance ;
        }
    }
?>