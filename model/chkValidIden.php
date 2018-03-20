<?php
    require_once "../connect.php" ;
    

    if (isset($_POST['iden'])) 
    {
        $iden = DB::get()->quote($_POST['iden']);

        if (!empty($iden)) 
    {
            $stmt = DB::get()->prepare("SELECT * FROM users WHERE personID =$iden");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count==0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => ''
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => "identification/Passport Number already exist"
            );
            }
            echo json_encode($arr);
    }
}

?>