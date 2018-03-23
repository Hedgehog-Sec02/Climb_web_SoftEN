function chkValidEmail(){
    var email = document.getElementById('email');
    var err_vemail = document.getElementById('error-email');
    //err_vemail.style.color = "yellow" ; 
    err_vemail.innerHTML = "Seaching...";

    if(email.value != ''){
        $.post('model/chkValidEmail.php', { email: email.value}, function(data) {
        data = $.parseJSON(data);
        if(data.count > 0 ){
            //email.style.backgroundColor = badColor ;
            err_vemail.style.color = badColor ;
            pass_EmailJS = false ;

        }if(data.count == true){
            //email.style.backgroundColor = badColor ;
            err_vemail.style.color = badColor ;
            data.count == false;
            pass_EmailJS  = false ;

        }else{
            err_vemail.innerHTML = '';
            //email.style.backgroundColor = goodColor ;
            err_vemail.style.color = goodColor ;
            pass_EmailJS = true ;

        }
        err_vemail.innerHTML = data.dataAlert  ; 
});
    }else {
        email.style.backgroundColor = "" ;
        err_vemail.innerHTML = '' ; 
    }
}