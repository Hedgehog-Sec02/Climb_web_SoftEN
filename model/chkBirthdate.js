function chkValidBirthdate(){
    var birthdate = document.getElementById("birthdate");
    var err_birthdate = document.getElementById("error-birthdate");
    var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;

    if(!birthdate.value.match(pattern)){
        err_birthdate.innerHTML = "Date must be match such as 14/03/1997" ; 
        err_birthdate.style.color = badColor ;
        pass_birthdate = false  ;
    }else if(calculateAge(parseDate($('#birthdate').val()), new Date()) < 15){
        //err_birthdate.innerHTML = calculateAge(parseDate($('#birthdate').val()), new Date());
        err_birthdate.innerHTML = "Age must be more than 15 years" ;
        err_birthdate.style.color = badColor ;
    }else{
        err_birthdate.innerHTML = "" ;
        err_birthdate.style.color = goodColor ;
        pass_birthdate = true  ;
    }

}

    // credit https://codepen.io/tipsoftheday/pen/hwFde
  //convert the date string in the format of dd/mm/yyyy into a JS date object
  function parseDate(dateStr) {
    var dateParts = dateStr.split("/");
    return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
  }
  
  //is valid date format
  function calculateAge (dateOfBirth, dateToCalculate) {
      var calculateYear = dateToCalculate.getFullYear();
      var calculateMonth = dateToCalculate.getMonth();
      var calculateDay = dateToCalculate.getDate();
  
      var birthYear = dateOfBirth.getFullYear();
      var birthMonth = dateOfBirth.getMonth();
      var birthDay = dateOfBirth.getDate();
  
      var age = calculateYear - birthYear;
      var ageMonth = calculateMonth - birthMonth;
      var ageDay = calculateDay - birthDay;
  
      if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
          age = parseInt(age) - 1;
      }
      return age;
  }
  
  function isDate(txtDate) {
    var currVal = txtDate;
    if (currVal == '')
      return true;
  
    //Declare Regex
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var dtArray = currVal.match(rxDatePattern); // is format OK?
  
    if (dtArray == null)
      return false;
  
    //Checks for dd/mm/yyyy format.
    var dtDay = dtArray[1];
    var dtMonth = dtArray[3];
    var dtYear = dtArray[5];
  
    if (dtMonth < 1 || dtMonth > 12)
      return false;
    else if (dtDay < 1 || dtDay > 31)
      return false;
    else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
      return false;
    else if (dtMonth == 2) {
      var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
      if (dtDay > 29 || (dtDay == 29 && !isleap))
        return false;
    }
  
    return true;
  }
  