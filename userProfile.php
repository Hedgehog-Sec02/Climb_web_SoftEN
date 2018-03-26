<?php
    session_start();
    require_once "connect.php" ;
    require_once "model/getUser.php" ;
    require_once "model/question.php";
?>

<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8" />
    <title>ชุมชนนักปีนผา-ไต่เขา</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
            footer {
            background-color: black;
            color: white;
            padding: 15px;
                }
            body {
                width:100%;height:100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-color: black;
                background-image:url(img/Hot-Sun.jpg);
            }
            .carousel-caption {
                padding : 10px ;
                margin-bottom : 10px ;
                background: black;
            }
            .multiline
            {
                padding:5px;
                white-space: pre-wrap;
            }
            .LOGO
            {
                max-width: 100%;
                height: auto;
                text-align: center;
                vertical-align: middle;
                display: table-cell;
            }
            
            #newsList li{ display:none;
            }
            #loadMore {
                color:green;
                cursor:pointer;
            }
            #loadMore:hover {
                color:black;
            }
            #showLess {
                color:red;
                cursor:pointer;
                display:none;
            }
            #showLess:hover {
                color:black;
            }
            .marquee {
            height: 40px;
            width: auto;
            overflow: hidden;
            position: relative;

            }

            .marquee div {
            display: block;
            width: 200%;
            height: 30px;

            position: absolute;
            overflow: hidden;

            animation: marquee 5s linear infinite;
            }

            .marquee span {
            float: left;
            width: 50%;
            
            }

            @keyframes marquee {
            0% { left: 0; }
            100% { left: -100%; }
            }
			ul.nav.navbar-nav.navbar-right li.nav-item{
			    /*background-color: #000033; */
				margin-right:20px ;
				background-color:None ;
                font-size:10px;
			}
		
			ul.nav.navbar-nav.navbar-right li.nav-item a:hover{
				/*background:#000033;*/
                background:None;
			}
            
             .modal-header, h4, .close {
                background-color: #FFCC00;
                color:white !important;
                text-align: center;
                font-size: 30px;
            }
        
            .modal-footer {
            background-color: #f9f9f9;
            }
    </style>
</head>
<body>
    <!-- Start Header -->
    <div  class="row" style ="background-image:url(img/Hot-Sun.jpg); background-repeat: no-repeat;width:100%;
            background-size:cover;background-attachment:fixed;background-position:center;">
            <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left:0px;padding-top:0px;padding-bottom:0px;">
                <img class='img-rounded' src="image/LOGO/logo.png" style="width:45%;height:45%;">
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2" >
                <div class="pull-right">
                    <?php 
                        if(isset($_SESSION['userId'])){
                            $row = User::getUser($_SESSION['userId']) ; 
                            echo "สวัสดี "."<a href='userProfile.php'>".$row['userName']."</a>"; echo "<br>";
                            echo '<a href="logout.php">Sign out</a>';
                        }else{
                            header("Location:index.php");
                        }
                    ?>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default" style="background-color: #000033; color:#FFFFFF	; ">
            <div class="container">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" 
                        data-toggle = "collapse" data-target = "#example-navbar-collapse">
                        <span class = "sr-only">Toggle navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                        
                    <a class = "navbar-brand" href = "#"></a>
                </div>
                <div class="collapse navbar-collapse" id = "example-navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="nav-item dropdown" style="background-color:#FFCC33;"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=<?php $base_url ;?>>HOME</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background : black; " >
                                <h5><a class="dropdown-item" href="#" style="color:white;">News&Announcements</a></h5>
                            </div>
                        </li>
                        <li><a href="#services">Knowledge source</a></li>
                        <li><a href="#portfolio">Event</a></li>
                        <li><a href="#pricing">About Us</a></li>
                        <li><a href="#contact"></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#contact"></a></li>
                        <li><a href="#contact"></a></li>
                    </ul>
                </div>
            </div>
        </nav>  
    <!-- End Header -->
    <div class="container-fluid" style="background-color:white;">
        <div class="row">
            <center><div class = "col-sm-1 col-md-2 col-lg-3" ></div></center>
             <div class = "col-sm-10 col-md-8 col-lg-6" style="background-color:#e3e8e3;">
                <div> hello darkness my old friend <br>
                    <?php
                        $row = User::getUser($_SESSION['userId']) ;
                        $question1 = Question::getQuestion($row['qNO1']);
                        $question2 = Question::getQuestion($row['qNO2']);
                        $question3 = Question::getQuestion($row['qNO3']);
                        $iden = $row['personID'];
                        for($i = 0 ; $i < strlen($row['personID']) ; $i++){
                
                            if($i >= 2){
                                $iden[$i] = 'x' ;
                            }
                        }
                        echo $iden ; 
                        echo "ชื่อ : ".$row['userName']; echo "<br>";
                        echo "รหัสบัตรประชาชน : ".$row['personID']; echo "<br>";
                        echo "password : ".$row['password']; echo "<br>";

                        echo "คำถามข้อที่ 1 : ".$question1['qdesc']; echo "<br>";
                        echo "คำถามข้อที่ 2 : ".$question2['qdesc']; echo "<br>";
                        echo "คำถามข้อที่ 3 : ".$question3['qdesc']; echo "<br>";
                        echo "email : ".$row['userEmail']; echo "<br>";


                    ?>
                </div>
             </div>
             <center><div class = "col-sm-1 col-md-2 col-lg-3"></div></center>
        </div>
    </div>

    <?php require_once "footer.html" ?>
</body>
</html>