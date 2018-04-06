
function chkValidLogin(){
    /*if(loginUsername.value!='' ){
        $.post('model/chkValidUsername.php', { username: loginUsername.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                key_valid_login_username = true ;
                err_login.innerHTML = "" ;
            }else{
                key_valid_login_username = false ;
                err_login.innerHTML = "Please enter the correct Username or Password" ;
                err_login.style.color = badColor ;
                
            }
            });
    }else{
        key_valid_login_username = false ;
    }*/

    if(loginUsername.value!='' && loginPassword.value!=''){

        $.post('model/chkValidUsername.php', { username: loginUsername.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                console.log("pass username");
                key_valid_login_username = true ;
                err_login.innerHTML = "" ;
            }else{
                key_valid_login_username = false ;
                err_login.innerHTML = "Please enter the correct Username or Password" ;
                err_login.style.color = badColor ;
                
            }
            });


        $.post('model/chkValidPassword.php', { password: loginPassword.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                console.log("pass username");
                key_valid_login_password = true ;
                err_login.innerHTML = "" ;
            }else{
                key_valid_login_password = false ;
                err_login.innerHTML = "Please enter the correct Username or Password" ;
                err_login.style.color = badColor ;

            }
            });

    }else{
        key_valid_login_username = false ;
        key_valid_login_password = false ;
    }

}

