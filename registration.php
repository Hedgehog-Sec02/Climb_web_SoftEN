<<<<<<< HEAD
<?php echo "THIS ISS REGISTRATION"?>
=======
>>>>>>> c1d39463479e377e37daaead7c07d14ddf761381
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
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
    <script src="js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    

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
            .btn-file {
                position: relative;
                overflow: hidden;
            }
            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }

            #img-upload{
                width: 100%;
            }
            a:hover.btn{

                text-decoration:underline;
            }
    
    </style>
</head>
<body>
        <!-- Start Header -->
        <div  class="row" style ="background-image:url(img/sea.gif); background-repeat: no-repeat;width:100%;
            background-size:cover;background-attachment:fixed;background-position:center;">
            <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left:50px;padding-top:50px;padding-bottom:50px;">
                <img class='img-rounded' src="image/LOGO/logo.png" style="width:100%;height:250px;">
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2" >
                <div class="pull-right">
                    <a  style="color:black;text-decoration:underline;" href = "#" id="myBtn">Sign in</a><br>
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
    <!-- End Header-->


    <div class="container-fluid" style="background-color:white;">
        <div class="row">
            <center><div class = "col-sm-1 col-md-2 col-lg-3" ></div></center>
            <!-- Start Form -->
                <div class = "col-sm-10 col-md-8 col-lg-6" style="background-color:#e3e8e3;">
                <form class="form-horizontal" action='' method="POST" style="padding:10px;">
                    <fieldset>
                        <div id="legend">
                        <legend class="">สมัครสมาชิก</legend>
                        </div>
                        <div class="control-group">
                        <!-- Username -->
                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-pencil"></span>ชื่อ - นามสกุล/Name</label>
                                <div class="controls">
                                    <input type="text" id="name" name="name" placeholder="" class="form-control">
                                    <p class="help-block">Please provide name-lastname</p>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="idenNo"><span class="glyphicon glyphicon-user"></span>เลขบัตรประจำวันตัวประชาชน/Passport No.</label>
                                <div class="controls">
                                    <input type="text" id="idenNo" name="idenNo" placeholder="" class="form-control">
                                    <p class="help-block">Please provide your Identification Number or Passport Number</p>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
                            </div>

                            <div class="form-group">
                                <label for="Usernmae"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <div class="controls">
                                    <input type="text" id="Username" name="Username" placeholder="" class="form-control" onkeyup="chkValidUsername(); return false;"> 
                                    <p class="help-block" id="error-username">
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="Password"><span class="glyphicon glyphicon-user"></span>Password</label>
                                <div class="controls">
                                    <input type="password" id="Password" name="Password" placeholder="" class="form-control" onkeyup="chkLeastPassword(); return false;" >
                                    <p class="help-block" id="error-al">
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="con-Password"><span class="glyphicon glyphicon-user"></span>Confirm Password</label>
                                <div class="controls">
                                    <input type="password" id="con-Password" name="con-Password" placeholder="" class="form-control" onkeyup="chkLeastPassword(); return false;" >
                                    <p class="help-block" id="error-al2">
                                 </div>
                            </div>

                            


                            <div class="form-group">
                                <label for="Birthdate"><span class="glyphicon glyphicon-user"></span>วันเกิด</label>
                                <div class='input-group date' id='datetimepicker1' data-date="2012-02-02" data-date-format="yyyy-mm-dd">
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="Q1"><span class="glyphicon glyphicon-user"></span>Question1:</label>
                                <br>
                                <select class="selectpicker" data-live-search="true">
                                    <option data-tokens="ketchup mustard">เลือกคำถาม</option>
                                    <option data-tokens="ketchup mustard">Where ?</option>
                                    <option data-tokens="mustard">Who ?</option>
                                    <option data-tokens="frosting">When?</option>
                                </select>

                                <div class="controls">
                                    <label><span class=""></span>Answer : </label>
                                    <input type="text" id="Q1" name="Q1" placeholder="" class="form-control">
                                    <p class="help-block">Please provide your Password</p>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="Q2"><span class="glyphicon glyphicon-user"></span>Question2:</label>
                                <br>
                                <select class="selectpicker" data-live-search="true">
                                    <option data-tokens="ketchup mustard">เลือกคำถาม</option>
                                    <option data-tokens="ketchup mustard">Where ?</option>
                                    <option data-tokens="mustard">Who ?</option>
                                    <option data-tokens="frosting">When?</option>
                                </select>

                                <div class="controls">
                                    <label><span class=""></span>Answer : </label>
                                    <input type="text" id="Q2" name="Q2" placeholder="" class="form-control">
                                    <p class="help-block">Please provide your Password</p>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="Q3"><span class="glyphicon glyphicon-user"></span>Question3:</label>
                                <br>
                                <select class="selectpicker" data-live-search="true">
                                    <option data-tokens="ketchup mustard">เลือกคำถาม</option>
                                    <option data-tokens="ketchup mustard">Where ?</option>
                                    <option data-tokens="mustard">Who ?</option>
                                    <option data-tokens="frosting">When?</option>
                                </select>

                                <div class="controls">
                                <label><span class=""></span>Answer : </label>
                                <input type="text" id="Q3" name="Q3" placeholder="" class="form-control">
                                    <p class="help-block">Please provide your Password</p>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="email"><span class="glyphicon glyphicon-user"></span>E-mail</label>
                                <div class="controls">
                                    <input type="text" id="email" name="email" placeholder="" class="form-control" onkeyup="chkValidEmail(); return false;">
                                    <p class="help-block" id="error-email"></p>
                                 </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree to the<a class = "btn"style="color : red;" data-toggle="modal" data-target="#exampleModalLong">Privacy and Terms</a></label>
                            </div>

                        <!-- End Form -->


                        <!-- Modal policy -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        </div>
                        <!-- End Modal policy-->
            
                        <br>
                        <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Register</button>
                        </div>
                        </div>
                    </fieldset>
                </form>
            
                </div>
            <center><div class = "col-sm-1 col-md-2 col-lg-3"></div></center>
        </div>
    </div>

    <!-- Footer -->
    <?php  require_once "footer.html" ; ?>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    calendarWeeks: true,
                    showTodayButton: true
                });
            });

            $(document).ready( function() {
                    $(document).on('change', '.btn-file :file', function() {
                    var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [label]);
                    });

                    $('.btn-file :file').on('fileselect', function(event, label) {
                        
                        var input = $(this).parents('.input-group').find(':text'),
                            log = label;
                        
                        if( input.length ) {
                            input.val(log);
                        } else {
                            if( log ) alert(log);
                        }
                    
                    });

                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            
                            reader.onload = function (e) {
                                $('#img-upload').attr('src', e.target.result);
                            }
                            
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#imgInp").change(function(){
                        readURL(this);
                    }); 	

                
            });

            var goodColor = "#66cc66";
            var badColor = "#ff6666";
            </script>
            <script src="model/chkPassword.js"></script>
            <script src="model/chkUsername.js"></script>
            <script src="model/chkEmail.js"></script>
            

</body>
</html>
