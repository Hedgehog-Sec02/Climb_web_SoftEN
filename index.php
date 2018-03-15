<?php 

    require_once "connect.php" ;
    require_once "model/getNews.php" ;
    // intent(getSlideFiveNews) : function for get later five news
    $stmt = News::getSlideFiveNews();
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ชุมชนนักปีนผา-ไต่เขา</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    
    <script>
    /* // Old showmore
        $(document).ready(function () {
            var maxheight=350;
            var showText = "More";
            var hideText = "Less";

            $('.textContainer_Truncate').each(function () {
                var text = $(this);
                if (text.height() > maxheight){
                    text.css({ 'overflow': 'hidden','height': maxheight + 'px' });

                    var link = $('<a href="#"><h1 align="right">' + showText + '</h1></a>');
                    var linkDiv = $('<h1 align="right"><div></div></h1>');
                    linkDiv.append(link);
                    $(this).after(linkDiv);

                    link.click(function (event) {
                    event.preventDefault();
                    if (text.height() > maxheight) {
                        $(this).html(showText);
                        text.css('height', maxheight + 'px');
                    } else {
                        $(this).html(hideText);
                        text.css('height', 'auto');
                    }
                    });
                }       
            });
        }); */
        $(document).ready(function(){
            size_li = $("#newsList li").length;
            console.log(size_li);
            x=10 ; 
            console.log(x);
            $("#newsList li:lt("+x+")").show();
            $("#loadMore").click(function(){
                x=(x+10 <= size_li) ? x+10 : size_li; // if(x+5 <= size_li) then x+5(start) : size_li(end)
                $('#newsList li:lt('+x+')').slideDown("");
                $('#showLess').show();
                if(x == size_li){
                    $('#loadMore').hide();
                }
            });
            $('#showLess').click(function () {
                x=(x-10 < 10) ? 10 : x-10;
                console.log(x);
                $('#newsList li').not(':lt('+x+')').slideUp("");
                $('#loadMore').show();
                $('#showLess').show();
                if(x == 10){
                    $('#showLess').hide();
                }
            });
        });

    </script>
<!-- End JS -->
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
                background-image:url(img/sea.gif);
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
<<<<<<< HEAD
             <ul class="nav navbar-nav navbar-right ">
                <a class="btn nav-item  btn-lg" style="color:black;" id="myBtn">Sign in</a>

                <br><a class="btn nav-item btn-lg" style="color:black;" href ="registration.php">Register</a>

            </ul>
            <div class="container">
=======
>>>>>>> 1f0e7e42a65cf197ab446778737d54a8bfc89964
  <!-- Trigger the modal with a button -->
           
  <!--<button type="button" class="btn btn-default btn-lg  navbar-right" id="myBtn">Login</button>-->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

          <form role="form">

          <form role="form" method="post">

            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            
                            <div class="help-block with-errors"></div>
                </div>
              
              <button type="submit" class="btn btn-success btn-block" style="background : #FF6600"><span class="glyphicon glyphicon-off" ></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancel</button>

          <p>Not a member? <a href="#">Sign Up</a></p>

         <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->

          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>

<div class="container">
    <!-- Start Header -->
        <div  class="row" style ="background-image:url(img/sea.gif); background-repeat: no-repeat;width:100%;
                background-size:cover;background-attachment:fixed;background-position:center;">
            <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left:50px;padding-top:50px;padding-bottom:50px;">
                <img class='img-rounded' src="image/LOGO/logo.png" style="width:100%;height:250px;">
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2" >
                <div class="pull-right">
                    <a  style="color:black;text-decoration:underline;" id="myBtn">Sign in</a><br>
                    <a  style="color:black;text-decoration:underline;" href ="registration.php">Register</a>
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
                        <li><a href="#services">Knowledge</a></li>
                        <li><a href="#portfolio">Activity</a></li>
                        <li><a href="#pricing">Community</a></li>
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
        <div>
            <div class="jumbotron text-center">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-bottom:20px;">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                    <?php 
                    $chk = 0 ; 
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    if($chk==0) { $chk++ ;
                    echo "
                        <div class='item active' >
                            <a href='News/News.php?NewsID=".$row["NewsID"]."'><img class='img-rounded' src='image/news-img/".$row["NewsShot"]."' alt='First' style='width:100%;height:350px;background-position:center;'></a>
                            <div class='container' style=background-color:black;'>
                                <div class='carousel-caption'>
                                    <div>".$row["NewsTitle"]."</div>
                                </div>
                            </div>
                        </div>
                        " ;
                        } elseif($chk>0) { 
                        echo " <div class='item'>
                            <a href='News/News.php?NewsID=".$row["NewsID"]."'><img class='img-rounded' src='image/news-img/".$row["NewsShot"]."' alt='Second' style='width:100%;height:350px;background-position:center;'></a>
                                <div class='container'>
                                    <div class='carousel-caption' style='color:white;'>
                                    <div>".$row["NewsTitle"]."</div>
                                    </div>
                                </div>
                        </div>
                       " ; } }?>
                    </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only" id="prev_slide">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only" id="next_slide">Next</span>
                        </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class = "col-sm-12 col-md-6 col-lg-4">
                <div class="marquee">
                    <div>
                        <h4><span id="NewsAndAnno">News & Announcements</span></h4>
                        <h4><span id="NewsAndAnno">News & Announcements</span></h4>
                    </div>
                </div>
                    <div class="textContainer_Truncate" style="background-color:#FFCC33	; padding:10px;">
                        <ul id="newsList">
                                <?php
                                    // intent(getAll): function for get all news
                                    $stmt2 = News::getAll() ; 
                                    $i = 0 ;
                                    while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                    $test[$i] = $row["NewsID"] ; 
                                    $i = $i + 1 ; 
                                ?>
                                        <li class="multiline"><a href="News/News.php?NewsID=<?php echo $row["NewsID"]?>"><?php echo $row["NewsTitle"]?></a></li> 
                                <?php } ?>
                            </ul> 
                        <div id="loadMore" align="right">Load more</div>
                        <!--<div id="showLess" align="right">Show less</div> -->
                    </div>
            </div>

            <div class = "col-sm-9 col-md-6 col-lg-8 ">
            <h2><center></center></h2>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class = "container">
            <nav>CopyRight © 2018 ชุมชนนักปีนผา-ไต่เขา</nav>
            <nav>Contact Email: hedgehog.sec02@gmail.com</nav>
        </div>
    </footer>
    <!-- JS -->     

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
