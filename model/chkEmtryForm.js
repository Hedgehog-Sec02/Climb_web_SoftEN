function chkEmtryForm(){

    var name = document.getElementById("name");
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

    var err_name = document.getElementById("error-name");
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

    // name is '' 
    if(name.value == ''){
        err_name.innerHTML = " Please fill name";
        err_name.style.color = badColor;
    }else {
       
    }   

    // idenfication is '' 
    if(iden.value == ''){
        err_iden.innerHTML = "Please fill idenfication/Password Number";
        err_iden.style.color = badColor ;
    }else {

    }

    // pimg is '' 
    if(person_img.value == ''){
        err_person_img.style.color = badColor;
    }else{

    }

    // username is '' 
    if(username.value == ''){
        err_username.style.color = badColor;
    }else {

    }

    // password is ''
    if(password.value == ''){
        err_password.style.color = badColor;
    }else{

    }

    //con-password is '' 
    if(con_password.value == ''){
        err_con_password.style.color = badColor;
    }else{

    }

    //birthdate is '' 
    if(Birthdate.value == ''){
        err_Birthdate.style.color = badColor;
    }else{

    }

    //Question 1 is '' 
    if(Question1.value == ''){
        err_Question1.style.color = badColor;
    }else{

    }

    //Question 2 is '' 
    if(Question2.value == ''){
        err_Question2.style.color = badColor;
    }else{

    }

    //Question 3 is ''
    if(Question3.value == ''){
        err_Question3.style.color = badColor;
    }else{

    }

    // Email is '' 
    if(email.value == ''){
        err_email.style.color = badColor;
    }else{

    }

    // check box is ''
    if(chk.checked == ''){
        err_chk.innerHTML = "Please take accept policy in checkbox!!";
        err_chk.style.color = badColor;
    }else{

    }

}