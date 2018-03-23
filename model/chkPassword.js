function chkLeastPassword(){
    var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('con-Password');
    var err_pass1 = document.getElementById('error-al');
    var err_pass2 = document.getElementById('error-al2');
    //var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\-])(?=.*[\_])[0-9a-zA-Z\-\_]{16,}$/;
    var pattern = /^(?=.*\d)^(?=.*[a-z])^(?=.*[A-Z])(?=.*[\_|\-])[0-9a-zA-Z\-\_]{16,}$/;
    
    // Password ---------------------------------------------------
    if(pass1.value != ''){
        if(pass1.value.match(pattern)){
            //pass1.style.backgroundColor =goodColor ;
            err_pass1.style.color = goodColor ;
            err_pass1.innerHTML = "" ; 
            pass_PasswordJS = true ;

        }else {
            console.log("zz");
            //pass1.style.backgroundColor = badColor;
            err_pass1.style.color = badColor;
            err_pass1.innerHTML = "Password must contain at least (A-Z,a-z,0-9, _ , -) and 16 digit!" ;
            pass_PasswordJS = false ;
        }
    }else {
        pass1.style.backgroundColor = "";
        err_pass1.style.color = "";
        err_pass1.innerHTML = "";
    }
    // Con-Password ------------------------------------------------
    if(pass2.value != ''){
        if(pass1.value == pass2.value ){
            //pass2.style.backgroundColor = goodColor ;
            err_pass2.innerHTML = '';
            err_pass2.style.color = goodColor ;
            err_pass2.innerHTML = "Password is match !!";
            pass_PasswordJS = true ; 
        }else {
            //pass2.style.backgroundColor = badColor ;
            err_pass2.style.color = badColor ;
            err_pass2.innerHTML = "Password isn't match !!";
            pass_PasswordJS = false ;
        }
    }
    }