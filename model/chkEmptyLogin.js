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