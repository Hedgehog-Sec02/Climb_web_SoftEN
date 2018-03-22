function chkValidUsername(){
    var username = document.getElementById('Username');
    var err_vusername = document.getElementById('error-username');
    //err_vusername.style.color = "yellow" ; 
    err_vusername.innerHTML = "Seaching...";

    var pattern = /[0-9a-zA-Z]{5,}$/;
    if(username.value != ''){
        $.post('model/chkValidUsername.php', { username: username.value}, function(data) {
        data = $.parseJSON(data);
        
        if(data.count > 0 ){
            //username.style.backgroundColor = badColor ;
            err_vusername.style.color = badColor ;
            pass_usernameJS = false ;

        }else if(!username.value.match(pattern)){
            //username.style.backgroundColor = badColor ;
            err_vusername.style.color = badColor ;
            data.dataAlert = "Please check username pattern !!" ;
            pass_usernameJS = false ;
        }else{
            //username.style.backgroundColor = goodColor ;
            err_vusername.innerHTML = '';
            err_vusername.style.color = goodColor ;
            pass_usernameJS  = true ; 
            
        }
      
        err_vusername.innerHTML = data.dataAlert  ;  
        });

    }else {
        username.style.backgroundColor = "" ;
        err_vusername.style.color = "";
        err_vusername.innerHTML = "";
    }
}