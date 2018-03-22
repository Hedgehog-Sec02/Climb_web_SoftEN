function chkValidIden(){
    var iden = document.getElementById('idenNo');
    var err_viden = document.getElementById('error-iden_passport');
    var pattern_iden = /^$|^\d{13}$/; //13 only
    //var pattern_iden = /^([7-9]|1[0-3])$/ ;
    var pattern_passport = /^(?=.*\d)^(?=.*[A-Z])[0-9A-Z]{7,}$/ ; 
     
    if(iden.value != ''){
        $.post('model/chkValidIden.php', { iden: iden.value}, function(data) {
        data = $.parseJSON(data);
        
        if(data.count > 0 ){
            err_viden.style.color = badColor ;
            pass_iden = false ;

        }else if(!iden.value.match(pattern_iden)){
            err_viden.style.color = badColor ;
            data.dataAlert = "identification Number must be match such as 1112223334445 !!" ;
            pass_iden = false ;
            
                if(!iden.value.match(pattern_passport)){
                    err_viden.style.color = badColor ;
                    data.dataAlert = "Passport Number must be match such as AA5555555 !!" ;
                }else{
                    data.dataAlert = '' ;
                    err_viden.innerHTML = ''; 
                    pass_iden  = true ; 
                }
        }else {
            data.dataAlert = '' ;
            err_viden.innerHTML = ''; 
            pass_iden  = true ; 
            
        }
      
        err_viden.innerHTML = data.dataAlert  ;  
        });

    }else {
        err_viden.style.color = "";
        err_viden.innerHTML = "";
    }
}