function chkEmtryLogin(){
    /*if(loginUsername.value ==''){
        err_loginUsername.innerHTML = "Please enter the Username" ;
        err_loginUsername.style.color = badColor ;
        key_login_username = false ;
    }else{
        err_loginUsername.innerHTML = '' ;
        key_login_username = true ;
    }*/

    if(loginUsername.value == '' || loginPassword.value ==''){
        err_login.innerHTML = "Please enter the Username and Password";
        err_login.style.color = badColor ;
        key_login_username = false ;
        key_login_password = false ;
    }else{
        err_login.innerHTML = "" ;
        key_login_username = true ;
        key_login_password = true ;
    }
}