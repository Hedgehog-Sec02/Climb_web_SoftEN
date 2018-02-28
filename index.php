<?php 
    include "connect.php" ;
    $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS ORDER BY TIMEDATE DESC LIMIT 5";
    $stmt = $pdo->prepare($str);
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
                if(x == 3){
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
                padding:10px;
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

    </style>
</head>
<body>
            <ul class="nav navbar-nav navbar-right" style ="background-color: #000033; margin-right:20px ;" >
                <li><a href="#contact">Sign in</a></li>
            </ul>
    <h1 ><div  class="container" style ="background-image:url(img/sea.gif); background-repeat: no-repeat;width:100%;
    background-size:cover;background-attachment:fixed;background-position:center;padding:30px;"><center><img src="image/LOGO/LOGO.png" width="120px" height="120px">ชุมชนนักปีนผา-ไต่เขา</center></div></h1>
    <nav class="navbar navbar-default" style="background-color: #000033; color:#FFFFFF	; ">
    <div class="container">
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-left">
                <li style="background-color:#FFCC33;" id="Home"><a href="">HOME</a></li>
                <li><a href="#services">News</a></li>
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
            <div class = "col-sm-3 col-md-6 col-lg-4">
                <div class="marquee">
                    <div>
                        <h4><span id="NewsAndAnno">News & Announcements</span></h4>
                        <h4><span id="NewsAndAnno">News & Announcements</span></h4>
                    </div>
                </div>
                    <div class="textContainer_Truncate" style="background-color:#FFCC33	;">
                        <ul id="newsList">
                                <?php
                                    $str = "SELECT NewsID, NewsTitle, NewsContent, NewsTag, TIMEDATE, NewsShot, DATE(TIMEDATE) AS DATE, TIME(TIMEDATE) AS TIME FROM NEWS ORDER BY TIMEDATE DESC ";
                                    $stmt2 = $pdo->prepare($str);
                                    $stmt2->execute();
                                    $i = 0 ;
                                    while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                    $test[$i] = $row["NewsID"] ; 
                                    $i = $i + 1 ; 
                                ?>
                                        <li class="multiline"><a href="News/News.php?NewsID=<?php echo $row["NewsID"]?>"><?php echo $row["NewsTitle"]?></a></li> 
                                <?php } ?>
                            </ul> 
                        <div id="loadMore">Load more</div>
                        <!--<div id="showLess">Show less</div>-->
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
            <nav>123 มหาวิทยาลัยขอนแก่น ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40002</nav>
        </div>
    </footer>
    <!-- JS -->     



</body>
</html>
