<?php
    session_start();
    require_once "connect.php" ;
    require_once "model/getUser.php" ;
    require_once "model/question.php";

    $stmt = DB::get()->prepare("UPDATE users SET lastUpdate = NOW() 
            WHERE userID = '".$_SESSION["userId"]."'");
    $stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8" />
    <title>ชุมชนนักปีนผา-ไต่เขา</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
                        <li class="nav-item dropdown" style="background-color:#FFCC33;"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.php">HOME</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background : black; " >
                                <h5><a class="dropdown-item" href="index.php" style="color:white;">News&Announcements</a></h5>
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
                    <?php
                        $row = User::getUser($_SESSION['userId']) ;
                        $question1 = Question::getQuestion($row['qNO1']);
                        $question2 = Question::getQuestion($row['qNO2']);
                        $question3 = Question::getQuestion($row['qNO3']);
                        $iden = $row['personID'];
                        $answer1 = $row['question1'];
                        $answer2 = $row['question2'];
                        $answer3 = $row['question3'];
                        $password = $row['password'] ;
                        
                        
                        for($i = 0 ; $i < strlen($row['personID']) ; $i++){
                
                            if($i >= 2){
                                $iden[$i] = 'x' ;
                            }
                        }
                        for($i = 0 ; $i < strlen($row['password']) ; $i++){
                
                            if($i >= 0){
                                $password[$i] = 'x' ;
                            }
                        }

                        for($i = 0 ; $i < strlen($answer1) ; $i++){
                
                            if($i >= 0){
                                $answer1[$i] = 'x' ;
                            }
                        }

                        for($i = 0 ; $i < strlen($answer2) ; $i++){
                
                            if($i >= 0){
                                $answer2[$i] = 'x' ;
                            }
                        }

                        for($i = 0 ; $i < strlen($answer3) ; $i++){
                
                            if($i >= 0){
                                $answer3[$i] = 'x' ;
                            }
                        }

                    ?>
                    <form style="padding-top:10px;">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">First Name - Last Name : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $row["fname"]; ?>" disabled>
                            </div>
                        </div>
                        <!--
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Last Name : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $row["lname"]; ?>" disabled>
                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">SSN/Passport Number : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $iden ; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password : </label>
                            <div class="col-sm-6">
                            <input class="form-control" value="<?php echo $password ; ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <button>Edit</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Question 1 : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $question1['qdesc'] ; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Answer : </label>
                            <div class="col-sm-6">
                            <input class="form-control" value="<?php echo $answer1 ; ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <button>Edit</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Question 2 : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $question2['qdesc'] ; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Answer : </label>
                            <div class="col-sm-6">
                            <input class="form-control" value="<?php echo $answer2 ; ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <button>Edit</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Question 3 : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $question3['qdesc'] ; ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Answer : </label>
                            <div class="col-sm-6">
                            <input class="form-control" value="<?php echo $answer3 ; ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <button>Edit</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email : </label>
                            <div class="col-sm-8">
                            <input class="form-control" value="<?php echo $row["userEmail"] ; ?>" disabled>
                            </div>
                        </div>

                    </form>
                </div>
             </div>
             <center><div class = "col-sm-1 col-md-2 col-lg-3"></div></center>
        </div>
    </div>

    <?php require_once "footer.html" ?>
</body>
</html>
