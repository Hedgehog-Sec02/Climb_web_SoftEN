<?php
    require_once "../connect.php" ;
    

    if (isset($_POST['password'])) 
    {
        $password = DB::get()->quote($_POST['password']);

        if (!empty($password)) 
    {
            $stmt = DB::get()->prepare("SELECT * FROM users WHERE password =$password");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count==0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "" 
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => ""
            );
            }
            echo json_encode($arr);
    }
}

?>