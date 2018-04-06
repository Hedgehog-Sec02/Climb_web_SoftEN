//var pattern = /[a-zA-Zก-๛]{1,}$/;
var pattern = /(?=^[A-Za-zก-์]+\s+[A-Za-zก-์]+$).{1,}/ ;
function chkValidFirstName(){

    var fname = document.getElementById("fname");
    var err_fname = document.getElementById("error-fname");

    if(fname.value!=''){
        if(!fname.value.match(pattern)){
            err_fname.style.color = badColor ;
            err_fname.innerHTML = "Don't special character in firstname and lastname such as atisit thongbai!" ; 
            pass_fname = false ;
        }else {
            err_fname.innerHTML = "" ; 
            pass_fname = true ;
        }
    }else{
        err_fname.innerHTML = "" ; 
    }
    
}
/*function chkValidLastName(){
    var lname = document.getElementById("lname");
    var err_lname = document.getElementById("error-lname");
    
    if(lname.value!=''){
        if(!lname.value.match(pattern)){
            err_lname.innerHTML = "Don't special character in lastname!" ;
            err_lname.style.color = badColor ;
            pass_lname = false ; 
        }else {
            err_lname.innerHTML = "" ;
            pass_lname = true ;
        }
    }else{
        err_lname.innerHTML = "" ;
    }
}*/