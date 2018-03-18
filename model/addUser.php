<?php
    require_once "../connect.php" ;
    
    if (isset($_POST['dataUser'])) 
    {
        $username = DB::get()->quote($_POST['']);

        if (!empty($username)) 
    {
            $stmt = DB::get()->prepare("SELECT * FROM users WHERE userName =$username");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count==0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "Username doesn't exist" 
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => "Username doesn't exist"
            );
            }
            echo json_encode($arr);
    }
}

?>