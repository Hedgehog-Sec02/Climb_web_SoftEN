function chkLeastPassword(){
    var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('con-Password');
    var message = document.getElementById('error-al');
    var message2 = document.getElementById('error-al2');
    var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\-])(?=.*[\_])[0-9a-zA-Z\-\_]{16,}$/;
    
    // Password ---------------------------------------------------
    if(pass1.value != ''){
        if(pass1.value.match(pattern)){
            pass1.style.backgroundColor =goodColor ;
            message.style.color = goodColor ;
            message.innerHTML = "Password is ok !!" ; 
        }else {
            pass1.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = " Password must contain at least (A-Z,a-z,0-9, _ , -) and 16 digit!";
            return;
        }
    }else {
        pass1.style.backgroundColor = "";
        message.style.color = "";
        message.innerHTML = "";
    }
    // Con-Password ------------------------------------------------
    if(pass2.value != ''){
        if(pass1.value == pass2.value ){
            pass2.style.backgroundColor = goodColor ;
            message2.style.color = goodColor ;
            message2.innerHTML = "Password is match !!";
        }else {
            pass2.style.backgroundColor = badColor ;
            message2.style.color = badColor ;
            message2.innerHTML = "Password isn't match !!";
        }
    }
    }