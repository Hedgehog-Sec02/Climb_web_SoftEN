
<?php
    session_start();
    require_once "../connect.php" ;
    require_once "../model/getUser.php" ;
    require_once "getArticle.php" ;
    require_once "getComment.php" ; 
    
    if(isset($_SESSION['userId'])){
        $userId = $_SESSION['userId'];     
    }

    if(isset($_GET['ArticleID'])){
        $articleId  = $_GET['ArticleID']; 
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Start Header -->
    <div  class="row" style ="background-image:url(../img/Hot-Sun.jpg); background-repeat: no-repeat;width:100%;
            background-size:cover;background-attachment:fixed;background-position:center;">
            <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left:0px;padding-top:0px;padding-bottom:0px;">
                <img class='img-rounded' src="../image/LOGO/logo.png" style="width:45%;height:45%;">
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2" >
                <div class="pull-right">
                    <?php 
                        if(isset($_SESSION['userId'])){
                            $row = User::getUser($_SESSION['userId']) ; 

                            $updateStmt = DB::get()->prepare("UPDATE users SET loginStatus = '1', lastUpdate = NOW() 
                                            WHERE userID = '".$row["userID"]."'  ");
                            $updateStmt->execute();
                            echo "สวัสดี "."<a id='myUsername' href='../userProfile.php'>".$row['userName']."</a>"; echo "<br>";
                            echo '<a href="../logout.php">Sign out</a>';
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
                                <h5><a class="dropdown-item" href="../index.php" style="color:white;">News&Announcements</a></h5>
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
            <center><div class = "col-sm-3 col-md-1 col-lg-1" ></div></center>
           
                <div class = "col-sm-12 col-md-10 col-lg-10" style="background-color:#e3e8e3;">
                    <?php 
                        $row = Article::getArticle($articleId);
                        $userArticle = User::getUser($row['userID']);
                    ?>
                    <header>
                        <h3><?php echo $row['title']?></h3>
                    </header>
                    
                    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6"> 
                        by <?php echo $userArticle['userName'] ?>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6">
                        DateTime : <?php echo $row['datetimes']?>
                    </div>
                    <br>
                    <div class="multiline"><?php echo $row['artiContent'] ?></div>
                    
                    </div>

                    <?php 
                        if(isset($userId)){
                    ?>
                    <div class="container">
                        <div class="col-sm-12 col-md-10 col-lg-10" style="padding-top:20px;">
                            <h3 align="center">-----> Comment <---</h3>
                        </div>
                    </div>
                    
                    <!-- Comments Form -->
                    <div class="container">
                        <div class="row">
                            <center><div class = "col-sm-3 col-md-1 col-lg-1" ></div></center>
                            <div class="col-sm-12 col-md-10 col-lg-10" style="padding-top:20px;">
                                <div class="jumbotron">
                                    <div class="card my-4">
                                            <h5 class="card-header">Leave a Comment:</h5>
                                            <div class="card-body">
                                                <form id="addcomment">
                                                    <div class="form-group">
                                                    <p id=aleartcomment></p>
                                                        <textarea class="form-control" rows="3" id="detail" name="detail" maxlength='250'></textarea>
                                                        <input type="hidden" id="articleId" name="articleId" class="form-control " value="<?php echo $articleId ; ?>" disabled>
                                                        <input type="hidden" id="userId" name="userId" class="form-control " value="<?php echo $userId ; ?>" disabled>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" id="submit" name="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center><div class = "col-sm-3 col-md-1 col-lg-1" ></div></center>
                        </div>
                    </div>

                    
                    <div  id=commentdiv style="">
                        <?php
                            $stmt = Comment::getComment($articleId) ; 
                            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach($comments as $comment){
                                $user = User::getUser($comment['userID']);
                    ?>
                                    
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1">
                                    </div>
                                        <div class="col-sm-12 col-md-10 col-lg-10" style="padding-top:20px;">
                                            <div class="jumbotron">
                                                <div class="media mb-4">
                                                        <?php echo $comment['comContent']; ?>
                                                    <div class="media-body">
                                                    <br> 
                                                    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6"> 
                                                       by <?php echo $user['userName']; ?>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6">
                                                       DateTime :  <?php echo $comment['commentTime'] ; ?> 
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                                
                            <?php } 
                        }else{
                            //echo "visitor" ;
                        }    
                        ?>
                    </div>
            <center><div class = "col-sm-3 col-md-1 col-lg-1"></div></center>
        </div>
    </div>


    <?php require_once "../footer.html" ?>
    
    <script>
    var comment = document.getElementById("detail");
    var aleartcomment = document.getElementById("aleartcomment");

    function chkempty(){
        if(comment.value != ""){
            key = true ;
            aleartcomment.innerHTML = "" ;
        }else{
            aleartcomment.innerHTML = "Please enter your comment before enter!";
	        aleartcomment.style.color = "#ff6666" ;
		    key = false;
        }
    }
    var key = false ;

   
        $('#submit').on("click", function(g){
            g.preventDefault();
            chkempty();
            var detail = $('#detail').val();
            var articleId = $('#articleId').val();
            var userId = $('#userId').val() ;

            var data = {
                "detail":detail,
                "articleid":articleId,
                "userId":userId
            }
            console.log(data)
            var dataString = JSON.stringify(data);
            console.log(dataString);
            if(key){
            $.post('addComment.php', {detail:detail, articleId:articleId, userId:userId}, function(data){
                console.log(data);
            });
            console.log(detail);
            console.log(articleId); 
            console.log(userId) ;
            $('#detail').val('');
            window.location.reload();
        }
        })
    
    
    </script>
</body>
</html>
