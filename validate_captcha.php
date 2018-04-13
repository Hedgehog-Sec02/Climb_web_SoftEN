<?php
//Get the secret key, site key from google recaptcha website.

        if(isset($_POST['response'])){
          $captcha=$_POST['response'];
          echo "pass" ;

        }else{
            echo "try again!!!" ;
        }
        /*if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>' ;
          exit;
        }
        $secretKey = "6LfZgFEUAAAAALDILmYTOaPQYBO_lU401QDmw7Lf";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response);
        if($responseKeys->success) {
            echo "ok!!" ;
        } else {
            echo "try again!" ;
        }*/



//Created By Adhersh M Nair
//Reference: https://codeforgeek.com/2014/12/google-recaptcha-tutorial/
?>