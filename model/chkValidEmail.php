<?php
    require_once "../connect.php" ;
    

    if (isset($_POST['email'])) 
    {
        $email = DB::get()->quote($_POST['email']);

        if (!empty($email)) 
    {
            $stmt = DB::get()->prepare("SELECT * FROM users WHERE userEmail =$email");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count > 0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "email already exist" 
             );
             }
            elseif(!strpos($email, '@')){
                $arr = array('count'=> true,
                            'dataAlert' => "email should be example@gmail.com"
            );
            /*}elseif(!strpos($email, '.com')){
                $arr = array('count'=> true,
                            'dataAlert' => "email should be example@gmail.com"
            );*/
            }else
            {
                $arr = array('count' => $count,
                'dataAlert' => ""
            );
            }
            echo json_encode($arr);
    }
}

?>