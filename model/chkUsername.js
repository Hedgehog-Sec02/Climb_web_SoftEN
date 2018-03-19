function chkValidUsername(){
    var username = document.getElementById('Username');
    var message = document.getElementById('error-username');
    //message.style.color = "yellow" ; 
    message.innerHTML = "Seaching...";

    var pattern = /[0-9a-zA-Z]{5,}$/;
    if(username.value != ''){
        $.post('model/chkValidUsername.php', { username: username.value}, function(data) {
        data = $.parseJSON(data);
        
        if(data.count > 0 ){
            username.style.backgroundColor = badColor ;
            message.style.color = badColor ;
            pass_usernameJS = false ;

        }else if(!username.value.match(pattern)){
            username.style.backgroundColor = badColor ;
            message.style.color = badColor ;
            data.dataAlert = "Please check username pattern !!" ;
            pass_usernameJS = false ;
        }else{
            username.style.backgroundColor = goodColor ;
            message.style.color = goodColor ;
            pass_usernameJS  = true ; 
            
        }
      
        message.innerHTML = data.dataAlert  ;  
        });

    }else {
        message.innerHTML = '' ; 
    }
}