<?php
    require_once "../connect.php" ;
    
    if (isset($_POST['dataUser'])) 
    {
        //$username = DB::get()->quote($_POST['']);
        $data = utf8_encode($_POST['dataUser']);
        $data = json_decode($data);
        if (!empty($data)) 
        {       
            $fname = $data->fname ;
            $lname = $data->lname ;
            $iden = $data->iden ;
            $person_img = $data->person_img;
            $username = $data->username;
            $password = $data->password;
            $birthdate = $data->Birthdate;
            $q1 = $data->Q1;
            $ans_q1 = $data->Question1;

            $q2 = $data->Q2;
            $ans_q2 = $data->Question2;

            $q3 = $data->Q3;
            $ans_q3 = $data->Question3;

            $email = $data->email;
            $status = "WAIT" ;
            $point = 0 ; 

            $stmt = DB::get()->prepare("INSERT INTO users VALUES ('', '$name', '$iden', '$username', '$password', 
                                            '$birthdate', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                             '$ans_q2', '$ans_q3', '$email', '$status',
                                            $point);");
            $stmt->execute();
            header("registerSuccess.html");
        }else {
            header("registerNotSuccess.html");
        }
    }else {
        header("registerNotSuccess.html");
    }

?>