function chkValidEmail(){
    var email = document.getElementById('email');
    var message = document.getElementById('error-email');
    //message.style.color = "yellow" ; 
    message.innerHTML = "Seaching...";

    if(email.value != ''){
        $.post('model/chkValidEmail.php', { email: email.value}, function(data) {
        data = $.parseJSON(data);
        if(data.count > 0 ){
            email.style.backgroundColor = badColor ;
            message.style.color = badColor ;
        }if(data.count == true){
            email.style.backgroundColor = badColor ;
            message.style.color = badColor ;
            data.count == false;
        }else{
            email.style.backgroundColor = goodColor ;
            message.style.color = goodColor ;
        }

        message.innerHTML = data.dataAlert  ; 
});
    }else {
        email.style.backgroundColor = "" ;
        message.innerHTML = '' ; 
    }
}