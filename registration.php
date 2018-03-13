<?php 
    require_once "connect.php" ;
    
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
        
            <div  class="container" style ="background-image:url(img/sea.gif); background-repeat: no-repeat;width:100%;
    background-size:cover;background-attachment:fixed;background-position:center;padding:50px;"><img class='img-rounded' src="image/LOGO/logo.png" width="800px" height="250px" ></div></h1>
    <nav class="navbar navbar-default" style="background-color: #000033; color:#FFFFFF	; ">
    <div class="container"
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-left">
                <li class="nav-item dropdown" style="background-color:#FFCC33;"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=<?php $base_url ;?>>HOME</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">News&Announcements</a>
                        <a class="dropdown-item" href="#">สาระน่ารู้</a>
                        <a class="dropdown-item" href="#">ข้อมูลกิจกรรม</a>
                        <a class="dropdown-item" href="#">ข้อมูลเกี่ยวกับชุมชน</a>
					</div>
                </li>
                <li><a href="#services"></a></li>
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
                     <div align="center">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                </div>
            <center><div class = "col-sm-3 col-md-4 col-lg-1"></div></center>
        </div>
    </div>

    <?php  require_once "footer.html" ; ?>
    
</body>
</html>
