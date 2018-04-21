*** Setting ***

Library    Selenium2Library

*** Variable ***
${URL}    http://10.199.66.227/SoftEn2018/Sec02_Hedge/registration.php
${Browser}    Chrome
${validFname}    อธิสิต ทองใบ
${validIdenNumber}    1103702281441
${personImage}    555.jpg
${validUsername}    atisit
${validPass}    aB_1111111111111
${validCon_Pass}    aB_1111111111111
${birthdate}    01/02/1995
${answer1}    หมา
${answer2}    แดง
${answer3}    spiderman
${validEmail}    atisit_thongbai@hotmail.com

${invalidFname}    อาทิตย์123
${invalidIdenNumber}    14699
${alreadyIdenNumber}    1409901491881
${alreadyUsername}    janthakan
${invalidPass}    aB_1
${invalidCon_Pass}    aB_2
${notAllowBirthdate}    01/02/2003
${invalidBirthdate}    1995-09-01
${alreadyEmail}    janthakankan789@gmail.com
${invalidEmail}    artit1150


*** Keywords ***
open web climb
    open browser    ${URL}    ${Browser}
input fname
    Input Text    fname    ${validFname}
input validIdenNumber
    Input Text    idenNo    ${validIdenNumber}
input uploadImage
    Choose File    imgInp    C:/xampp/htdocs/climb_web/img/atisit_iden.jpg
input username
    Input Text    Username    ${validUsername}
input pass
    Input Text    Password    ${validPass}
input conPass
    Input Text    con-Password    ${validCon_Pass}
input birthdate
    Input Text    birthdate    ${birthdate}
input answer1
    Input Text    Q1    ${answer1}
input answer2
    Input Text    Q2    ${answer2}
input answer3
    Input Text    Q3    ${answer3}
input email
    Input Text    email    ${validEmail}	

input invalidFname
	Input Text    fname    ${invalidFname}
input invalidIdenNumber
    Input Text    idenNo    ${invalidIdenNumber}
input alreadyIdenNumber
    Input Text    idenNo    ${alreadyIdenNumber}
input alreadyUsername
    Input Text    Username    ${alreadyUsername}
input invalidPass
    Input Text    Password    ${invalidPass}
input invalidCon_Pass
    Input Text    con-Password    ${invalidCon_Pass}
input notAllowBirthdate
    Input Text    birthdate    ${notAllowBirthdate}
input invalidBirthdate
    Input Text    birthdate    ${invalidBirthdate}	
input invalidEmail
    Input Text    email    ${invalidEmail}
input alreadyEmail
    Input Text    email    ${alreadyEmail}
	
*** Test Cases ***
testcase1 : invalidFname
    open web climb
	Set Selenium Speed    0.1
    input invalidFname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Don't special character in firstname and lastname such as atisit thongbai!
	
testcase2 : invalidIdenNumber
	Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input invalidIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Identification/Passport Number must be match such as 1103702281441 or AA5555555 !!
	
	
testcase3 : already identification number
    Go To    ${URL}
	Set Selenium Speed    0.5
    input fname
    input alreadyIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    identification/Passport Number already exist

	
testcase4 : already username
    Go To    ${URL}
	Set Selenium Speed    0.5
    input fname
    input validIdenNumber
    input uploadImage
    input alreadyUsername
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Username already exist

testcase5 : invalid password
    Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input invalidPass
    input invalidPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Password must contain at least (A-Z,a-z,0-9, _ , -) and 16 digit!

testcase6 : confirm password doesn't match password
    Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input invalidCon_Pass
    input birthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Password isn't match !!

testcase7 : not allow birthdate
    Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input notAllowBirthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Age must be more than 20 years

testcase8 : invalid birthdate
    Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input invalidBirthdate
    input answer1
    input answer2
    input answer3
    input email
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    Date must be match such as 14/03/1997

testcase9 : invalid email
    Go To    ${URL}
	Set Selenium Speed    0.1
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input invalidEmail
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    email should be example@gmail.com

testcase10 : already exist email
    Go To    ${URL}
	Set Selenium Speed    0.5
    input fname
    input validIdenNumber
    input uploadImage
    input username
    input pass
    input conPass
    input birthdate
    input answer1
    input answer2
    input answer3
    input alreadyEmail
    Select Checkbox    exampleCheck1
    Click Button    myRegister
    Wait Until Page Contains    email already exist
    
    Close Browser	