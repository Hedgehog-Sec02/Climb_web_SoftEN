<?php 
    session_start();
    require_once "../connect.php" ;
    require_once "../model/getNews.php";
    require_once "../model/getUser.php" ;

    $stmt = DB::get()->prepare("SELECT * FROM NEWS ORDER BY TIMEDATE DESC");
    $stmt->execute();
    $test[0] = NULL ;
    $i = 1 ;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $test[$i] = $row["NewsID"] ; echo " " ;
    if($test[$i] == $_GET["NewsID"]){ $chk = $i ;}    
    $i = $i + 1 ; 
    }
    $NewsID = $_GET["NewsID"] ; 
    // intent(getNews) : Get News matching NewsID 
    $row = News::getNews($NewsID);

?> 
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row["NewsTitle"] ; ?></title>
    <meta charset="utf-8" />
  
    <!-- JS -->     
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../model/chkLogin.js"></script>
    <script type="text/javascript" src="../model/chkEmptyLogin.js"></script>
   <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
   <link rel="stylesheet" href="../css/style.css">


   
</head>
<body>

  <!-- Trigger the modal with a button -->
           
  <!--<button type="button" class="btn btn-default btn-lg  navbar-right" id="myBtn">Login</button>-->
  
  <!-- Start Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Sign in</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">


          <form id="myLoginForm" role="form" method="post" action="<?php echo $base_url ; ?>model/loginUser.php">

            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="Enter username">
              <p class="help-block" id="err-loginUsername"></p>
            </div>

            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter password">
              <p class="help-block" id="err-loginPassword"></p>

              <p><a href="#" style="text-decoration:underline;"class="pull-right ">Forget Password?</a></p>
            </div> <br>
            <div class="pull-right">    
            <button type="submit" class="btn btn-success" id="myLogin" style="background : #FF6600"><span class="glyphicon glyphicon-off" ></span> Sign in</button>
        </div>  
            </form>
        </div>
        <div class="modal-footer">
        <!-- <input type="botton" class="btn btn-success" onclick="enableBtn()" value="demo_capcha"> -->
        <!-- <center>
           <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LfSPk8UAAAAADxGzbw6lEKMrLk49M8kgnywJ8py" data-callback="enableBtn"></div>
                <div class="help-block with-errors"></div>
            </div> 
        </center> -->
         <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->

        </div>
      </div>
      
    </div>
  </div> 
</div>
 <!-- End Modal -->
    <!-- Start Header -->
    <div  class="row" style ="background-image:url(../img/HOT-Sun.jpg); background-repeat: no-repeat;width:100%;
            background-size:cover;background-attachment:fixed;background-position:center;">
            <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left:0px;padding-top:0px;padding-bottom:0px;">
                <img class='img-rounded' src="../image/LOGO/logo.png" style="width:45%;height:45%;">
            </div>


            <div class="col-sm-2 col-md-2 col-lg-2" >
                <div class="pull-right">
                    <?php 
                        if(isset($_SESSION['userId'])){
                            $updateStmt = DB::get()->prepare("UPDATE users SET loginStatus = '0', lastUpdate = NOW() 
                            WHERE userID = '".$_SESSION["userId"]."'");
                            $updateStmt->execute();
                            $row2 = User::getUser($_SESSION['userId']) ; 
                            echo "สวัสดี "."<a href='../userProfile.php'>".$row2['userName']."</a>"; echo "<br>";
                            echo '<a href="../logout.php">Sign out</a>';
                        }else{
                            echo '<a  style="color:black;text-decoration:underline;" href ="#" id="myBtn">Sign in</a><br>' ;
                            echo '<a  style="color:black;text-decoration:underline;" href ="../registration.php">Register </a>';
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
                                <h5><a class="dropdown-item" href="../" style="color:black;">News&Announcements</a></h5>
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
    <!-- End Header-->
    <div class="container-fluid" style="background-color:white;">
        <div class="row">
            <center><div class = "col-sm-3 col-md-1 col-lg-1" ></div></center>
           
                <div class = "col-sm-12 col-md-10 col-lg-10" style="background-color:#e3e8e3;">
                    <center>
                        <img class='img-rounded' src='../image/news-img/<?php echo $row["NewsShot"]; ?>' alt='First' style='width:100%;height:350px;background-position:center;'>
                    </center>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div id="NewsTag">Tag:<?php $NewsTag = $row["NewsTag"]; echo $NewsTag; ?></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div align="right"><?php $Datetime = $row["TIMEDATE"]; echo $Datetime?></div> 
                        </div>
                           
                        <h2 id="NewsTitle"><?php $NewsTitle = $row["NewsTitle"]; echo $NewsTitle ; ?></h2>                
                        <div>NewsContent : </div>
                                <div class="multiline"><?php $NewsContent = $row["NewsContent"]; echo $NewsContent ?></div>
                        <!-- Previous Next -->
                        <?php $page = $NewsID ; if($page > 1){ $prev = $test[$chk+1] ; echo "<div class='col-sm-6 col-md-6 col-lg-6' ><a id='prev' class='btn btn-primary btn-md'  href ='News.php?NewsID=$prev'>ก่อนหน้านี้</a></div>" ;}else{ echo "<a class='col-sm-6 col-md-6 col-lg-6'></a>" ; } 
                                                if($page < $test[1]){ $next = $test[$chk-1] ; echo "<div align='right' class='col-sm-6 col-md-6 col-lg-6' ><a id='next' class='btn btn-primary btn-md' role='button' href ='News.php?NewsID=$next'>ถัดไป</a></div>" ;} 
                        ?>               
                </div>
            <center><div class = "col-sm-3 col-md-1 col-lg-1"></div></center>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class = "container">
            <nav>CopyRight © 2018 ชุมชนนักปีนผา-ไต่เขา</nav>
            <nav>123 มหาวิทยาลัยขอนแก่น ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40002</nav>
        </div>
    </footer>
    
    <script>

    //function click capcha  
    function enableBtn(){
        document.getElementById("myLogin").disabled = false;
    }
    document.getElementById("myLogin").disabled = true ;
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    var key_login_username = false ;
    var key_login_password = false ;

    var key_valid_login_username = false;
    var key_valid_login_password = false ;


    var loginUsername = document.getElementById("loginUsername");
    var loginPassword = document.getElementById("loginPassword");

    var err_loginUsername = document.getElementById("err-loginUsername");
    var err_loginPassword = document.getElementById("err-loginPassword");
    // Start function for Login
    $(document).ready(function(){
        
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });

        $('#myLogin').click(function(event) {        
        event.preventDefault();
        chkEmtryLogin();

            // ปิด Async เพื่อให้ cilent รอผลจาก server
        $.ajaxSetup({
            async: false ,
            timeout: 0
        });

        chkValidLogin();

        console.log(key_login_username);
        console.log(key_login_password);
        console.log(key_valid_login_username);
        console.log(key_valid_login_password);
        if(key_login_username && key_login_password && key_valid_login_password && key_valid_login_username){
            console.log('login!!!');
            document.getElementById("myLoginForm").submit();
        }else{
            console.log("Can't Login !!!");
        }      
    })
    });
    // End function for Login
</script>
</body>
</html>
