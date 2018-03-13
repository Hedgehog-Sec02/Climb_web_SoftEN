<?php 
    require_once "../connect.php" ;
    require_once "../model/getNews.php";
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
    

    <style>
            footer {
            background-color: #555;
            color: white;
            padding: 15px;
                }
            body {
                width:100%;height:100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-color: white;
                background-image:url(../img/sea.gif);
            }
            .carousel-caption {
                padding : 10px ;
                margin-bottom : 10px ;
                background: black;
            }
            .multiline
            {
                padding:20px;
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
			ul.nav.navbar-nav.navbar-right li.nav-item{
				background-color: #000033; 
				margin-right:20px ;
			}
		
			ul.nav.navbar-nav.navbar-right li.nav-item a:hover{
				background:#000033;
			
			}
    </style>
</head>
<body>
            <ul class="nav navbar-nav navbar-right" style ="background-color: #000033; margin-right:20px ;" >
                <li><a href="#contact">Sign in</a></li>
            </ul>
    <h1 ><div  class="container" style ="background-image:url(../img/sea.gif); background-repeat: no-repeat;width:100%;
    background-size:cover;background-attachment:fixed;background-position:center;padding:50px;"><center><img  src="../image/LOGO/logo.png" width="800px" height="250px" ></center></div></h1>
	
    <nav class="navbar navbar-default" style="background-color: #000033; color:#FFFFFF;">
        <div class="container">
            <div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav navbar-left">
                    <li class="nav-item dropdown" style="background-color:#FFCC33;"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=<?php $base_url ;?>>HOME</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="../">News&Announcements</a>
						</div>
					</li>
             
                    <li><a href="#portfolio"></a></li>
                    <li><a href="#pricing"></a></li>
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
            <center><div class = "col-sm-3 col-md-4 col-lg-1" ></div></center>
           
                <div class = "col-sm-6 col-md-4 col-lg-10" style="background-color:#e3e8e3;">
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

                        <?php $page = $NewsID ; if($page > 1){ $prev = $test[$chk+1] ; echo "<div class='col-sm-6 col-md-6 col-lg-6' ><a id='prev' class='btn btn-primary btn-md'  href ='News.php?NewsID=$prev'>ก่อนหน้านี้</a></div>" ;}else{ echo "<a class='col-sm-6 col-md-6 col-lg-6'></a>" ; } 
                                                if($page < $test[1]){ $next = $test[$chk-1] ; echo "<div align='right' class='col-sm-6 col-md-6 col-lg-6' ><a id='next' class='btn btn-primary btn-md' role='button' href ='News.php?NewsID=$next'>ถัดไป</a></div>" ;} 
                        ?>               
                </div>
            <center><div class = "col-sm-3 col-md-4 col-lg-1"></div></center>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class = "container">
            <nav>CopyRight © 2018 ชุมชนนักปีนผา-ไต่เขา</nav>
            <nav>123 มหาวิทยาลัยขอนแก่น ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40002</nav>
        </div>
    </footer>
</body>
</html>
