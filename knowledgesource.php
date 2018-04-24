<?php
    session_start();
    require_once "connect.php" ;
    require_once "model/getUser.php" ;
    require_once "article/getArticle.php";
    if(isset($_SESSION['userId'])){
        $stmt = DB::get()->prepare("UPDATE users SET lastUpdate = NOW() 
            WHERE userID = '".$_SESSION["userId"]."'");
        $stmt->execute();
    }

    $topic = 0 ;
    if(isset($_GET['topic'])){
        $topic = $_GET['topic']; 
    }

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

                            $updateStmt = DB::get()->prepare("UPDATE users SET loginStatus = '1', lastUpdate = NOW() 
                                            WHERE userID = '".$row["userID"]."'  ");
                            $updateStmt->execute();
                            echo "สวัสดี "."<a id='myUsername' href='userProfile.php'>".$row['userName']."</a>"; echo "<br>";
                            echo '<a href="logout.php">Sign out</a>';
                        }else{
                            echo '<a  style="color:black;text-decoration:underline;" href ="#" id="myBtn">Sign in</a><br>' ;
                            echo '<a  style="color:black;text-decoration:underline;" href ="registration.php">Register </a>';
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
                        <li class="nav-item dropdown" style=""><a href="knowledgesource.php">Knowledge source</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background : black; " >
                                <h5><a class="dropdown-item" href="knowledgesource.php?topic=1" style="color:white;">สาระน่ารู้</a></h5>
                                <h5><a class="dropdown-item" href="#" style="color:white;">How to</a></h5>
                                <h5><a class="dropdown-item" href="#" style="color:white;">เทคนิค</a></h5>
                            </div>
                        </li>
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
            <center><div class = "col-sm-3 col-md-1 col-lg-1" ></div></center>
           
                <div class = "col-sm-12 col-md-10 col-lg-10" style="background-color:#e3e8e3;">
                    
                    <?php
                    if($topic==1){
                        echo "<header>
                                <h3>สาระน่ารู้</h3>
                              </header>" ;
                        $stmt = Article::getArticleTopic($topic);
                    }else{
                        echo "<header>
                                <h3>Knowledge Source</h3>
                            </header>" ;
                        $stmt = Article::getAll();
                    }
                    ?>
                    <ul class="" style="padding-top:20px;">
                        <?php 
                        
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                
                        ?>
                            <li class="multiline" ><a id="<?php echo 'article_'.$row['articleID']?>" href="article/articlePage.php?ArticleID=<?php echo $row['articleID'];?>"><?php echo $row['title'];?></a></li>
                        <?php  } ?> 
                    </ul>
                                
                        
                    
                
                              
                </div>
            <center><div class = "col-sm-3 col-md-1 col-lg-1"></div></center>
        </div>
    </div>

    <?php require_once "footer.html" ?>
</body>
</html>
