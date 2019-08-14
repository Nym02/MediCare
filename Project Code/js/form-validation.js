function regValidation() {
  var uFullName = document.getElementById('fullName').value;
  var uUserName = document.getElementById('uname').value;
  var userEmail = document.getElementById('uemail').value;
  var userPassword = document.getElementById('upass').value;
  // var userPhoneNumber = document.getElementById('uphone').value;

  var fullNameRegx = /^[a-zA-Z \.]{3,}$/;
  var userNameRegx = /^[A-Za-z0-9_]{4,}$/;
  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;
  var passwordRegx = /^[0-9a-zA-Z\.\-_$%&*#@!]{8,32}$/;
  // var phoneNumRegx = /^[0-9]{6,}$/;

  // full name validation

  if (fullNameRegx.test(uFullName)) {
    document.getElementById('fullName__label1').style.visibility = 'hidden';
    document.getElementById('fullName').style.border = '1px solid green';
  } else {
    document.getElementById('fullName__label1').style.visibility = 'visible';
    document.getElementById('fullName__label1').style.color = 'red';
    document.getElementById('fullName').style.border = '1px solid red';
    document.getElementById('fullName__label1').innerHTML =
      'Name can contain characters, space and dot(.)';
    return false;
  }
  // username validation
  if (userNameRegx.test(uUserName)) {
    document.getElementById('userName__label1').style.visibility = 'hidden';
    document.getElementById('uname').style.border = '1px solid green';
  } else {
    document.getElementById('userName__label1').style.visibility = 'visible';
    document.getElementById('userName__label1').style.color = 'red';
    document.getElementById('uname').style.border = '1px solid red';
    document.getElementById('userName__label1').innerHTML =
      'User Name can contain characters,number and underscore(_)';
    return false;
  }

  // email validation
  if (emailRegx.test(userEmail)) {
    document.getElementById('email__label1').style.visibility = 'hidden';
    document.getElementById('email__label1').style.color = 'green';
    document.getElementById('uemail').style.border = '1px solid green';
    document.getElementById('email__label1').innerHTML = 'valid';

    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').style.color = 'red';
    document.getElementById('uemail').style.border = '1px solid red';
    document.getElementById('email__label1').innerHTML =
      'Enter a valid email address. e.g. "something@example.com"';
    return false;
  }
  //Password Validation

  if (passwordRegx.test(userPassword)) {
    document.getElementById('upass__label1').style.visibility = 'hidden';
    document.getElementById('upass').style.border = '1px solid green';
  } else {
    document.getElementById('upass__label1').style.visibility = 'visible';
    document.getElementById('upass__label1').style.color = 'red';
    document.getElementById('upass').style.border = '1px solid red';
    document.getElementById('upass__label1').innerHTML =
      'Password must contain at least 8 character and can contain (0-9a-zA-Z.-_$%&*#@!)';
    return false;
  }
  //Phone number Validation
  // if (phoneNumRegx.test(userPhoneNumber)) {
  //   document.getElementById('uphone__label1').style.visibility = 'hidden';
  //   document.getElementById('uphone__label1').style.color = 'green';
  //   document.getElementById('uphone').style.border = '1px solid green';
  //   document.getElementById('uphone__label1').innerHTML = 'valid';

  //   console.log('was submitted');
  // } else {
  //   document.getElementById('uphone__label1').style.visibility = 'visible';
  //   document.getElementById('uphone__label1').style.color = 'red';
  //   document.getElementById('uphone').style.border = '1px solid red';
  //   document.getElementById('uphone__label1').innerHTML =
  //     'Enter a valid phone number. Phone number can contain only NUMBERS  (0-9)';
  //   return false;
  // }
}
//Login form validation
function loginValidation(){
  var userEmail = document.getElementById('userEmail').value;
  var userPassword = document.getElementById('userPassword').value;

  var userEmailRegx = /^$/;
  var userPasswordRegx = /^$/;

  if((!userEmailRegx.test(userEmail))){
    document.getElementById('email__label1').style.visibility = 'hidden';
    document.getElementById('userEmail').style.border = '1px solid green';
  }
  else{
    

    document.getElementById('userEmail').style.border = '1px solid red';
    document.getElementById('email__label1').style.color = 'red';
    document.getElementById('email__label1').innerHTML= 'Enter Your Email/Username';
    document.getElementById('email__label1').style.visibility = 'visible';
    return false;
  }
  
   if((userPasswordRegx.test(userPassword))){
    document.getElementById('userPassword').style.border = '1px solid red';
    document.getElementById('pass__label1').style.color = 'red';
    document.getElementById('pass__label1').innerHTML= 'Enter Your Password';
    document.getElementById('pass__label1').style.visibility = 'visible';
    return false;
    
  }
  else{
    document.getElementById('pass__label1').style.visibility = 'hidden';
    document.getElementById('userPassword').style.border = '1px solid green';
  }
}
//Book entry form validation

function bookEntryForm() {
  var isbn = document.getElementById('isbnNumber').value;

  var isbnRegx = /^[0-9]{1,}$/;

  if (isbnRegx.test(isbn)) {
    document.getElementById('isbnLabel').style.visibility = 'hidden';
    document.getElementById('isbnLabel').style.color = 'green';
    document.getElementById('isbnNumber').style.border = '1px solid green';
    document.getElementById('isbnLabel').innerHTML = 'valid';

    console.log('was submitted');
  } else {
    document.getElementById('isbnLabel').style.visibility = 'visible';
    document.getElementById('isbnLabel').style.color = 'red';
    document.getElementById('isbnNumber').style.border = '1px solid red';
    document.getElementById('isbnLabel').innerHTML =
      'Enter a valid ISBN number. ISBN number can contain only NUMBERS  (0-9)';
    return false;
  }
}
//doctor registration validation
function docRegValidation() {
  var uFullName = document.getElementById('fullName').value;
  var uUserName = document.getElementById('uname').value;
  var userEmail = document.getElementById('uemail').value;
  var docDegree = document.getElementById('docDegree').value;
  var timeSlot1 = document.getElementById('docTime1').value;
  var timeSlot2 = document.getElementById('docTime2').value;
  var userPhoneNumber = document.getElementById('uphone').value;

  var fullNameRegx = /^[a-zA-Z \.]{3,}$/;
  var userNameRegx = /^[A-Za-z0-9_]{4,}$/;
  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;
  var docDegreeRegx = /^$/;
  var timeSlot1Regx = /^$/;
  var timeSlot2Regx = /^$/;
  var phoneNumRegx = /^[0-9]{6,}$/;

  // full name validation

  if (fullNameRegx.test(uFullName)) {
    document.getElementById('fullName__label1').style.visibility = 'hidden';
    document.getElementById('fullName').style.border = '1px solid green';
  } else {
    document.getElementById('fullName__label1').style.visibility = 'visible';
    document.getElementById('fullName__label1').style.color = 'red';
    document.getElementById('fullName').style.border = '1px solid red';
    document.getElementById('fullName__label1').innerHTML =
      'Name can contain characters, space and dot(.)';
    return false;
  }
  // username validation
  if (userNameRegx.test(uUserName)) {
    document.getElementById('userName__label1').style.visibility = 'hidden';
    document.getElementById('uname').style.border = '1px solid green';
  } else {
    document.getElementById('userName__label1').style.visibility = 'visible';
    document.getElementById('userName__label1').style.color = 'red';
    document.getElementById('uname').style.border = '1px solid red';
    document.getElementById('userName__label1').innerHTML =
      'Enter Doctor Specialization';
    return false;
  }
  //doctor degree validation

  if(!docDegreeRegx.test(docDegree)){
    document.getElementById('docDegree_label1').style.visibility = 'hidden';
    document.getElementById('docDegree').style.border = '1px solid green';
  } else {
    document.getElementById('docDegree_label1').style.visibility = 'visible';
    document.getElementById('docDegree_label1').style.color = 'red';
    document.getElementById('docDegree').style.border = '1px solid red';
    document.getElementById('docDegree_label1').innerHTML =
      'Enter Doctor Degree.';
    return false;
  }
  //time slot 1 validation
  if(!timeSlot1Regx.test(timeSlot1)){
    document.getElementById('docTime1_label1').style.visibility = 'hidden';
    document.getElementById('docTime1').style.border = '1px solid green';
  } else {
    document.getElementById('docTime1_label1').style.visibility = 'visible';
    document.getElementById('docTime1_label1').style.color = 'red';
    document.getElementById('docTime1').style.border = '1px solid red';
    document.getElementById('docTime1_label1').innerHTML =
      'Enter Doctor Appointment Time Slot-1';
    return false;

  }
  //time slot 2 validation
  if(!timeSlot2Regx.test(timeSlot2)){
    document.getElementById('docTime2_label2').style.visibility = 'hidden';
    document.getElementById('docTime2').style.border = '1px solid green';
  } else {
    document.getElementById('docTime2_label2').style.visibility = 'visible';
    document.getElementById('docTime2_label2').style.color = 'red';
    document.getElementById('docTime2').style.border = '1px solid red';
    document.getElementById('docTime2_label2').innerHTML =
      'Enter Doctor Appointment Time Slot-2';
    return false;
  }
  //doctor description validation
  // email validation
  if (emailRegx.test(userEmail)) {
    document.getElementById('email__label1').style.visibility = 'hidden';
    document.getElementById('email__label1').style.color = 'green';
    document.getElementById('uemail').style.border = '1px solid green';
    document.getElementById('email__label1').innerHTML = 'valid';

    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').style.color = 'red';
    document.getElementById('uemail').style.border = '1px solid red';
    document.getElementById('email__label1').innerHTML =
      'Enter a valid email address. e.g. "something@example.com"';
    return false;
  }
  
  //Phone number Validation
  if (phoneNumRegx.test(userPhoneNumber)) {
    document.getElementById('uphone__label1').style.visibility = 'hidden';
    document.getElementById('uphone__label1').style.color = 'green';
    document.getElementById('uphone').style.border = '1px solid green';
    document.getElementById('uphone__label1').innerHTML = 'valid';

    console.log('was submitted');
  } else {
    document.getElementById('uphone__label1').style.visibility = 'visible';
    document.getElementById('uphone__label1').style.color = 'red';
    document.getElementById('uphone').style.border = '1px solid red';
    document.getElementById('uphone__label1').innerHTML =
      'Enter a valid phone number. Phone number can contain only NUMBERS  (0-9)';
    return false;
  }
}