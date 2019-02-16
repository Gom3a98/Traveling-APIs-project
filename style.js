//valdite sign in form
function myFunction() {
  'use strict';
  var name,pass;
  name = document.forms["myform"]["username"].value;
  if (name == "") {
    alert("you must fill username input");
    return false;
  }

  

   pass = document.forms["myform"]["password"].value;
  if (pass == "") {
    alert("you must fill password input");
    return false;
  }

  
}
//valdite sign up form
function myFunction2() {
  'use strict';
  var email,name,pass,cpass;
  email = document.forms["myform"]["email"].value;
  if (email == "") {
    alert("you must fill email input");
    return false;
  }
  name = document.forms["myform"]["username"].value;
  if (name == "") {
    alert("you must fill username input");
    return false;
  }
  
  pass = document.forms["myform"]["password"].value;
  if (pass == "") {
    alert("you must fill password input");
    return false;
  }
  cpass = document.forms["myform"]["cpassword"].value;
  if (cpass == "") {
    alert("you must confilrm your password");
    return false;
  }
  if(pass != cpass){
    alert("Password must be mathed");
    return false;
  }
  
}
//
$(function (){
    'use strict';
    $('[placeholder]').focus(function() {
        $(this).attr('data-text',$(this).attr('placeholder'));
        $(this).attr('placeholder',' ');
    }).blur(function (){
        $(this).attr('placeholder',$(this).attr('data-text'))
    })
})

//---------------------CMS Page ------------------------
