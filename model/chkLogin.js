
function chkValidLogin(){
    if(loginUsername.value!=''){
        $.post('model/chkValidUsername.php', { username: loginUsername.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                key_valid_login_username = true ;
                err_loginUsername.innerHTML = "" ;
            }else{
                key_valid_login_username = false ;
                err_loginUsername.innerHTML = "Please enter the correct Username" ;
                err_loginUsername.style.color = badColor ;
                
            }
            });
    }else{
        key_valid_login_username = false ;
    }

    if(loginPassword.value!=''){
        $.post('model/chkValidPassword.php', { password: loginPassword.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                key_valid_login_password = true ;
                err_loginPassword.innerHTML = "" ;
            }else{
                key_valid_login_password = false ;
                err_loginPassword.innerHTML = "Please enter the correct Password" ;
                err_loginPassword.style.color = badColor ;

            }
            });
    }else{
        key_valid_login_password = false ;
    }

}

