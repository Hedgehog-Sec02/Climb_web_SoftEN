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
        }else{
            username.style.backgroundColor = goodColor ;
            message.style.color = goodColor ;
        }

        message.innerHTML = data.dataAlert  ; 
        console.log(data.count);
        console.log(data.dataAlert);
});
    }else {
        message.innerHTML = '' ; 
    }
}