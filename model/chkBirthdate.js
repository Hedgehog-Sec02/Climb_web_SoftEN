function chkValidBirthdate(){
    var birthdate = document.getElementById("birthdate");
    var err_birthdate = document.getElementById("error-birthdate");
    var pattern =/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;

    var v_birthdate = new Data(birthdate.value) ;
    var currentDate = new Data();

    if(!birthdate.value.match(pattern)){
        err_birthdate.innerHTML = "Please must match like 14-03-1997" ; 
        err_birthdate.style.color = badColor ;
        pass_birthdate = false  ;
    }else if(currentData.getFullYear()-v_birth.getFullYear() <18 ){
        
    }else{
        err_birthdate.innerHTML = "Pass!!" ;
        err_birthdate.style.color = goodColor ;
        pass_birthdate = true  ;
    }

}