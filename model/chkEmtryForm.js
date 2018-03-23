function chkEmtryForm(){

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var iden = document.getElementById("idenNo");
    var person_img = document.getElementById("person_img");
    var username = document.getElementById("Username");
    var password =document.getElementById("Password");
    var con_password = document.getElementById("con-Password");
    var Birthdate = document.getElementById("birthdate");
    var Question1 = document.getElementById("Q1");
    var Question2 = document.getElementById("Q2");
    var Question3 = document.getElementById("Q3");
    var email = document.getElementById("email");
    var chk = document.getElementById("exampleCheck1");


    var err_fname = document.getElementById("error-fname");
    var err_lname = document.getElementById("error-lname");
    var err_iden = document.getElementById("error-iden_passport");
    var err_person_img = document.getElementById("error-person-img");
    var err_username = document.getElementById("error-username");
    var err_password =document.getElementById("error-al");
    var err_con_password = document.getElementById("error-al2");
    var err_Birthdate = document.getElementById("error-birthdate");
    var err_Question1 = document.getElementById("error-question1");
    var err_Question2 = document.getElementById("error-question2");
    var err_Question3 = document.getElementById("error-question3");
    var err_email = document.getElementById("error-email");
    var err_chk = document.getElementById("error-checkbox");

    
    var myObj = {} ; 
    myObj.pass = true ; 
    // firstname is '' 
    if(fname.value == ''){
        err_fname.innerHTML = " Please fill firstname";
        err_fname.style.color = badColor;
        myObj.pass = false ; 
    }else {
        //err_fname.innerHTML = '' ;
        myObj.fname = fname.value ; 
        //myObj['fname'] = fname.value ; 
    }  

    // lastname is '' 
    if(lname.value == ''){
        err_lname.innerHTML = " Please fill lastname";
        err_lname.style.color = badColor;
        myObj.pass = false ; 
    }else {
        //err_lname.innerHTML = '' ;
        myObj.lname = lname.value ; 
        //myObj['lname'] = lname.value ; 
    }   

    // idenfication is '' 
    if(iden.value == ''){
        err_iden.innerHTML = "Please fill idenfication/Password Number";
        err_iden.style.color = badColor ;
        myObj.pass = false ; 
    }else {
        //err_iden.innerHTML = ''; 
        myObj.iden = iden.value ;
        //myObj['iden'] = iden.value ;
    }

    // pimg is '' 
    if(person_img.value == ''){
        err_person_img.innerHTML = "Please upload idenfication/Password image" 
        err_person_img.style.color = badColor;
        myObj.pass = false ; 
    }else{
        //err_iden.innerHTML = '' ; 
        myObj.person_img = person_img.value ; 
        //myObj['person_img'] = person_img.value ;
    }

    // username is '' 
    if(username.value == ''){
        err_username.innerHTML = "Please fill username" ; 
        err_username.style.color = badColor;
        myObj.pass = false ; 
    }else {
        //err_username.innerHTML = '' ;
        myObj.username = username.value ;
        //myObj['username'] = username.value ;
    }

    // password is ''
    if(password.value == ''){
        err_password.innerHTML = "Please fill password" ;
        err_password.style.color = badColor;
        myObj.pass = false ; 
    }else{
        //err_password.innerHTML = '' ; 
        myObj.password = password.value ;
        //myObj['password'] = password.value ;
    }

    //con-password is '' 
    if(con_password.value == ''){
        err_con_password.innerHTML = "Please fill con-password" ;
        err_con_password.style.color = badColor;
        myObj.pass = false ; 
    }else{
        //err_con_password.innerHTML = '' ; 
    }

    //birthdate is '' 
    if(Birthdate.value == ''){
        err_Birthdate.innerHTML = "Please fill birthdate" ;
        err_Birthdate.style.color = badColor;
        myObj.pass = false ; 
    }else{
        //err_Birthdate.innerHTML = '' ; 
        myObj.Birthdate = Birthdate.value ;
        //myObj['Birthdate'] = Birthdate.value ;
    }

    //Question false is '' 
    if(Question1.value == ''){
        err_Question1.innerHTML = "Please fill Answer"; 
        err_Question1.style.color = badColor;
        myObj.pass = false ; 
    }else{
        err_Question1.innerHTML = '' ;
        myObj.Question1 = Question1.value ;
       //myObj['Question1'] = Question1.value ;
    }

    //Question 2 is '' 
    if(Question2.value == ''){
        err_Question2.innerHTML = "Please fill Answer";
        err_Question2.style.color = badColor;
        myObj.pass = false ; 
    }else{
        err_Question2.innerHTML = '' ;
        myObj.Question2 = Question2.value ;
        //myObj['Question2'] = Question1.value ;
    }

    //Question 3 is ''
    if(Question3.value == ''){
        err_Question3.innerHTML = "Please fill Answer"; 
        err_Question3.style.color = badColor;
        myObj.pass = false ; 
    }else{
        err_Question3.innerHTML = '' ;
        myObj.Question3 = Question3.value ;
        //myObj['Question3'] = Question1.value ;
    }

    // Email is '' 
    if(email.value == ''){
        err_email.innerHTML = "Please fill Email";
        err_email.style.color = badColor;
        myObj.pass = false ; 
    }else{
        //err_email.innerHTML = '';
        myObj.email = email.value ;  
       // myObj['email'] = email.value ;  
    }

    // check box is ''
    if(chk.checked == false){
        err_chk.innerHTML = "Please take accept policy in checkbox!!";
        err_chk.style.color = badColor;
        myObj.pass = false ; 
    }else{
        err_chk.innerHTML = '' ;
    }
    return myObj ;
}
// real time chkbox
function doalert(checkboxElem) {
    var err_chk = document.getElementById("error-checkbox");
    if (checkboxElem.checked) {
        err_chk.innerHTML = '' ;
    } else {

    }
}