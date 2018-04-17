function manageCheckAutheLogin(){
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
        

        console.log("username not null : " + key_login_username);
        console.log("password not null : " + key_login_password);
        console.log("username valid : " + key_valid_login_username);
        console.log("passowrd valid : " + key_valid_login_password);
        console.log("click ReCaptcha : " + chk_captcha);

        if(!chk_captcha){
            err_login.style.color = badColor ;
            err_login.innerHTML = "Please click ReCaptcha to make sure you're not robot" ; 
        }else{

        }

        if(key_login_username && key_login_password && key_valid_login_password && key_valid_login_username && chk_captcha){
            console.log('login!!!');
            document.getElementById("myLoginForm").submit();
        }else{
            console.log("Can't Login !!!");
        }      
    })
    });

}