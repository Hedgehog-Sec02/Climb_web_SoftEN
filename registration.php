<?php 
    require_once "connect.php" ;
    require_once "model/question.php" ; 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Registration User</title>
    <meta charset="utf-8" />

    <script type="text/javascript" src="model/chkPassword.js"></script>
    <script type="text/javascript" src="model/chkUsername.js"></script>
    <script type="text/javascript" src="model/chkEmail.js"></script>
    <script type="text/javascript" src="model/chkCap.js"></script>
    <script type="text/javascript" src="model/chkBirthdate.js"></script>
    <script type="text/javascript" src="model/chkIdenNo.js"></script>
    <script type="text/javascript" src="model/chkName.js"></script>
    <script type="text/javascript" src="model/chkEmtryForm.js"></script>


    <!-- JS -->     
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
    <script src="js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
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
                        <li class="nav-item dropdown" style="background-color:#FFCC33;"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="../">HOME</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background : black; " >
                                <h5><a class="dropdown-item" href="index.php" style="color:white;">News&Announcements</a></h5>
                            </div>
                        </li>
                        <li><a href="#services">Knowledge Source</a></li>
                        <li><a href="#pricing">Event</a></li>
                        <li><a href="#contact">About Us</a></li>
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
                <form class="form-horizontal" id="myForm" action='model/addUser.php' role="form" method="POST" style="padding:10px;">
                    <fieldset>
                        <div id="legend">
                        <legend class="">Registration</legend>
                        </div>
                        <div class="control-group" >
                        <!-- Username -->
                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-pencil"></span>Firstname-Lastname</label>
                                <div class="controls">
                                    <input type="text" id="fname" name="fname" placeholder="" class="form-control" onkeyup="chkValidFirstName();return false;" >
                                    <p class="help-block" id="error-fname">
                                 </div>
                            </div>

                            <!--
                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-pencil"></span>LastName</label>
                                <div class="controls">
                                    <input type="text" id="lname" name="lname" placeholder="" class="form-control" onkeyup="chkValidLastName();return false;">
                                    <p class="help-block" id="error-lname">
                                 </div>
                            </div>
                            -->

                            <div class="form-group">
                                <label for="idenNo"><span class="glyphicon glyphicon-user"></span>SSN/Passport No.</label>
                                <div class="controls">
                                    <input type="text" id="idenNo" name="idenNo" placeholder="" class="form-control" onkeyup="chkValidIden(); return false ;">
                                    <p class="help-block" id="error-iden_passport">
                                 </div>
                            </div>

                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="imgInp">
                                        </span>
                                    </span>
                                    <input type="text"  id = "person_img" name="person_img" class="form-control"> <!-- readonly-->
                                    <p class="help-block" id="error-person-img">
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
                                <label for="Password"><span class="glyphicon glyphicon-user"></span>Password</label><span  id="alert-cap" >Caps lock is on!</span>
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
                                <label for="Birthdate"><span class="glyphicon glyphicon-user"></span>Birthdate</label>
                                <div class='input-group date' id='datetimepicker1' data-date="02/02/2010" data-date-format="dd/mm/yyyy">
                                    <input type='text' id="birthdate" name="birthdate" class="form-control" onkeyup = "chkValidBirthdate(); return false;" placeholder="dd/mm/yyyy"/>
                                    <p class="help-block" id="error-birthdate">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                 </div>
                            </div>
                            <!-- intent : Query data from qcatalog 1 -->
                            <?php $stmt= Question::getQuestion1() ;?>

                            <div class="form-group">
                                <label for="Q1"><span class="glyphicon glyphicon-user"></span>Question1:</label>
                                <br>
                                <select class="selectpicker" id="Question1" name="Question1" data-live-search="true">
                                    <!-- Loop Question list in catalog 1 -->
                                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                    <option value='<?php echo $row["qid"] ; ?>' ><?php echo $row["qdesc"]; ?> </option>
                                    <?php  } ?>
                                    <!-- End Loop -->
                                </select>

                                <div class="controls">
                                    <label><span class=""></span>Answer : </label>
                                    <input type="text" id="Q1" name="Q1" placeholder="" class="form-control">
                                    <p class="help-block" id="error-question1">
                                 </div>
                            </div>

                            <!-- intent : Query data from qcatalog 2 -->
                            <?php $stmt= Question::getQuestion2() ;?>

                            <div class="form-group">
                                <label for="Q2"><span class="glyphicon glyphicon-user"></span>Question2:</label>
                                <br>
                                <select class="selectpicker" id="Question2" name="Question2" data-live-search="true">
                                    <!-- Loop Question list in catalog 2 -->
                                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                    <option value='<?php echo $row["qid"] ; ?>' ><?php echo $row["qdesc"]; ?> </option>
                                    <?php  } ?>
                                    <!-- End Loop -->
                                </select>

                                <div class="controls">
                                    <label><span class=""></span>Answer : </label>
                                    <input type="text" id="Q2" name="Q2" placeholder="" class="form-control">
                                    <p class="help-block" id="error-question2">
                                 </div>
                            </div>

                            <!-- intent : Query data from qcatalog 3 -->
                            <?php $stmt= Question::getQuestion3() ;?>

                            <div class="form-group">
                                <label for="Q3"><span class="glyphicon glyphicon-user"></span>Question3:</label>
                                <br>
                                <select class="selectpicker" id="Question3" name="Question3" data-live-search="true">
                                    <!-- Loop Question list in catalog 3 -->
                                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                    <option value='<?php echo $row["qid"] ; ?>' ><?php echo $row["qdesc"]; ?> </option>
                                    <?php  } ?>
                                    <!-- End Loop -->
                                </select>

                                <div class="controls">
                                <label><span class=""></span>Answer : </label>
                                <input type="text" id="Q3" name="Q3" placeholder="" class="form-control">
                                <p class="help-block" id="error-question3">
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
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"  onchange="doalert(this)">
                                <label class="form-check-label" for="exampleCheck1">I agree to the<a class = "btn"style="color : red;" data-toggle="modal" data-target="#exampleModalLong">Privacy and Terms</a></label>
                                <p class="help-block" id="error-checkbox"></p>
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
                            <h2>ชุมชนนักปีนผา-ไต่เขา Privacy Policy</h2>
                            <br><br>
                        This Privacy Policy was last modified on 19-Mar-2018 
                        <br><br>
                        ชุมนักปีนผา-ไต่เขา  operates 10.199.66.227/SoftEn2018/Sec02_Hedge/. This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site.
                        <br><br>                    
                        We use your Personal Information only for providing and improving the Site. By using the Site, you agree the collection and use of information in accordance with this policy. 
                        <br><br>                
                        <b>Information Collection and Use</b><br>
                        While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to your name (“Personal Information”).
                        <br><br>
                        <b>Log Data</b> <br>
                        Like many site operators, we collect information that your browser sends whenever you visit our Site (“Log Data”). This Log Data may include information such as your computer’s Internet Protocol (“IP”) address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.

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
                            <button class="btn btn-success" id ="myRegister">Register</button>
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
            var pass_usernameJS = false ;
            var pass_PasswordJS = false ;
            var pass_EmailJS = false ;
            var pass_birthdate = false ;
            var pass_iden = false ;
            var pass_fname = false ; 

            
            $('#myRegister').click(function(event) {
                
                event.preventDefault();
                //intent : chkEmtryForm เช็คว่ามี null ในช่องform หรือไม่ ถ้าไม่มีจะ return true และ data 
                chkValidUsername();
                chkValidEmail();
                chkLeastPassword();
                chkValidBirthdate();
                chkValidIden();
                chkValidFirstName();
                var myObj = chkEmtryForm();
               

                var e = document.getElementById("Question1");
                myObj.Q1 = e.options[e.selectedIndex].value ;
                var e = document.getElementById("Question2");
                myObj.Q2 = e.options[e.selectedIndex].value ;
                var e = document.getElementById("Question3");
                myObj.Q3 = e.options[e.selectedIndex].value  ;

                //intent : myObJ.pass เช็คช่องว่าง true/false
                console.log(myObj.pass) ; 
                //intent : pass เช็คการผิดรูปแบบของ email pass username : true/false
                console.log(pass_usernameJS);
                console.log(pass_PasswordJS);
                console.log(pass_EmailJS);
                
                if(myObj.pass && pass_usernameJS && pass_PasswordJS && pass_EmailJS && pass_birthdate && pass_iden && pass_fname) {
                    console.log("Register it!!");
                    console.log(myObj.fname);
                    console.log(myObj.iden);
                    console.log(myObj.person_img);
                    console.log(myObj.username);
                    console.log(myObj.password);
                    console.log(myObj.Birthdate);
                    console.log(myObj.Q1); 
                    console.log(myObj.Question1); // ANSWER OF Q1
                    console.log(myObj.Q2);
                    console.log(myObj.Question2); // ANSWER OF Q2
                    console.log(myObj.Q3);
                    console.log(myObj.Question3); // ANSWER OF Q3
                    console.log(myObj.email);
                    
                    document.getElementById("myForm").submit();
                    /*
                    myObj = JSON.stringify(myObj);
                    $.post('model/addUser.php', { dataUser: myObj}, function(data) {
                        //data = $.parseJSON(data);
                        //if(data.insertResult){
                           // window.location = "registerSuccess.html";
                        /*}else{
                            window.location = "registerNotSuccess.html";
                        }
                        window.location = "registerSuccess.html";
                    });*/
                    console.log(myObj);

                    /*$.ajax({
                        data: {dataUser: myObj},
                        dataType: 'json',
                        url: 'model/addUser.php',
                        type: 'POST',  
                    });*/
                }else{
                    console.log("Can't Register !!!");
                }
            
            })

            // Cap lock is on ? 
            chkCap();

            </script>

            

</body>
</html>
