function chkValidUsername(){
    var username = document.getElementById('Username');
    var message = document.getElementById('error-username');
    //message.style.color = "yellow" ; 
    message.innerHTML = "Seaching...";
    if(username.value != ''){
        $.post('model/chkValidUsername.php', { username: username.value}, function(data) {
        data = $.parseJSON(data);

        if(data.count > 0 ){
            username.style.backgroundColor = badColor ;
            message.style.color = badColor ;
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