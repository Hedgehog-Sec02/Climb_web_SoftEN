<?php
    require_once "../connect.php" ;
    
    /*if (isset($_POST['dataUser'])) 
    {
        //$username = DB::get()->quote($_POST['']);
        //$data = utf8_encode($_POST['dataUser']);
        //$data = json_decode($data);
        if (!empty($data)) 
        { */  
            $fname = $_POST['fname'] ;
            $iden = $_POST['idenNo'] ;
            $person_img = $_POST['person_img'];
            $username = $_POST['Username'];
            $password = $_POST['Password'];
            $birthdate = $_POST['birthdate'];
            $q1 = $_POST['Question1'];
            $ans_q1 = $_POST['Q1'];

            $q2 = $_POST['Question2'];
            $ans_q2 = $_POST['Q2'];

            $q3 = $_POST['Question3'];
            $ans_q3 = $_POST['Q3'];

            $email = $_POST['email'];
            $status = "WAIT" ;
            $point = 0 ; 
            
		
	   /* $stmt = DB::get()->prepare("INSERT INTO users VALUES (NULL, '$fname', '$iden', '$username', 'password', 
                                    '1997-03-14', 'person_img', 'q1', 'q2', 'q3', 'ans_q1',
                                    'ans_q2', 'ans_q3', 'email', 'status',
                                    'point','lname');");*/

            /*$stmt = DB::get()->prepare("INSERT INTO users VALUES (1000, '$fname', '$iden', '$username', '$password', 
                                            '1997-03-14', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                             '$ans_q2', '$ans_q3', '$email', '$status',
                                            '$point','$lname');");*/
    
            /*$stmt = DB::get()->prepare("INSERT INTO users VALUES ('', '$fname', '$iden', '$username', '$password', 
                                    '$birthdate', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                    '$ans_q2', '$ans_q3', '$email', '$status',
                                    '$point','','');");*/
            try{
                $stmt = DB::get()->prepare("INSERT INTO users VALUES (NULL, '$fname', '$iden', '$username', '$password', 
                                    '$birthdate', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                    '$ans_q2', '$ans_q3', '$email', '$status',
                                    '$point','0000-00-00 00:00:00',0);");
                $stmt->execute();

            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }


            header("Location:../registerSuccess.html");
           /* $arr = array(
                        'insertResult'=> true 
            );
        }

    }
    echo json_encode($arr);
*/
?>