function chkValidIden(){
    var iden = document.getElementById('idenNo');
    var err_viden = document.getElementById('error-iden_passport');
    var pattern_iden = /^$|^\d{13}$/; //13 only
    //var pattern_iden = /^([7-9]|1[0-3])$/ ;
    var pattern_passport = /(^[A-Z]{2})[0-9]{7}$/ ;
     
    if(iden.value != ''){
        $.post('model/chkValidIden.php', { iden: iden.value}, function(data) {
        data = $.parseJSON(data);
        
        if(data.count > 0 ){
            err_viden.style.color = badColor ;
            pass_iden = false ;

        }else if(!iden.value.match(pattern_iden)){
            err_viden.style.color = badColor ;
            data.dataAlert = "Identification/Passport Number must be match such as 1103702281441 or AA5555555 !!" ;
            pass_iden = false ;
                // start Check isPassport
                if(!iden.value.match(pattern_passport)){
                    err_viden.style.color = badColor ;
                    data.dataAlert = "Identification/Passport Number must be match such as 1103702281441 or AA5555555 !!" ;
                }else{
                    data.dataAlert = '' ;
                    err_viden.innerHTML = ''; 
                    pass_iden  = true ; 
                }
                // End Check isPassport

        }else if(!isIdenNo(iden.value)){
            err_viden.style.color = badColor;
            data.dataAlert = "Identification/Passport Number must be match such as 1103702281441 or AA5555555 !!" ;
            pass_iden = false ;
        }else{

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

function isIdenNo(idenNo){
    var countdown = idenNo.length ;
    var total = 0 ; 
    var finalChar = '' ;
    var finalCharOfIdenNo = '' ;

    for(i = 0 ; i < idenNo.length-1 ; i++){
        // show in web console 
        console.log(idenNo.charAt(i) + " * " + countdown);
        total = total + idenNo.charAt(i) * countdown ; 
        countdown = countdown - 1 ; 
    }

    total = total % 11 ; 
    total = 11 - total ; 
    total = total.toString() ;    
    //get last char in string
    //finalChar = total.substr(total.length - 1);
    finalChar = total.slice(-1);
    finalCharOfIdenNo = idenNo.slice(-1); 
    console.log(finalChar + " equal " + finalCharOfIdenNo);

    if(finalChar == finalCharOfIdenNo){
        return true ;
    }else{
        return false ;
    }
    
}