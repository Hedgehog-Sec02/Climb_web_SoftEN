
function chkEmtryLogin(){
    if(loginUsername.value ==''){
        err_loginUsername.innerHTML = "Please enter the Username" ;
        err_loginUsername.style.color = badColor ;
        key_login_username = false ;
    }else{
        err_loginUsername.innerHTML = '' ;
        key_login_username = true ;
    }

    if(loginPassword.value ==''){
        err_loginPassword.innerHTML = "Please enter the Password";
        err_loginPassword.style.color = badColor ;
        key_login_password = false ;
    }else{
        err_loginPassword.innerHTML = "" ;
        key_login_password = true ;
    }
}

function chkLogin(){
    if(loginUsername.value!=''){
        $.post('model/chkValidUsername.php', { username: loginUsername.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                err_loginUsername.innerHTML = "" ;
                key_login_username = true ;
            }else{
                err_loginUsername.innerHTML = "Please enter the correct Username" ;
                key_login_username = false ;
            }
            });
    }
    if(loginPassword.value!=''){
        $.post('model/chkValidPassword.php', { password: loginPassword.value}, function(data) {
            data = $.parseJSON(data);
            if(data.count > 0 ){
                err_loginPassword.innerHTML = "" ;
                key_login_password = true ;
            }else{
                err_loginPassword.innerHTML = "Please enter the correct Password" ;
                key_login_password = false ;
            }
            });
    }

}