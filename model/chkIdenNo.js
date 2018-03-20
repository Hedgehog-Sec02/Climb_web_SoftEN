function chkValidIden(){
    var iden = document.getElementById('idenNo');
    var err_iden = document.getElementById('error-iden_passport');
    var pattern_iden = /[0-9]{13}$/;
    var pattern_passport = true ; 
     
    if(iden.value != ''){
        $.post('model/chkValidIden.php', { iden: iden.value}, function(data) {
        data = $.parseJSON(data);
        
        if(data.count > 0 ){
            err_iden.style.color = badColor ;
            pass_iden = false ;

        }else if(!iden.value.match(pattern_iden) /*|| !iden.value.match(pattern_passport)*/){
            console.log("xx");
            err_iden.style.color = badColor ;
            data.dataAlert = "identification/Passport Number must be match such as 1112223334445 !!" ;
            pass_iden = false ;
        }else{
            data.dataAlert = '' ;
            err_iden.innerHTML = ''; 
            pass_iden  = true ; 
            
        }
      
        err_iden.innerHTML = data.dataAlert  ;  
        });

    }else {
        err_iden.style.color = "";
        err_iden.innerHTML = "";
    }
}