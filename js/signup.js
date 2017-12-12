var errors = [];

function funcSuccessLoginSignup (data) {
  if ( data == true ) {
    errors[0] = true;
  $('#login_signup_status #cross_icon').hide();
  $('#login_signup_status #check_icon').show();
}
  else {
   errors[0] = false;
  $('#login_signup_status #check_icon').hide();
  $('#login_signup_status #cross_icon').show();
  }
}

function funcSuccessEmail (data) {
  if ( data == true ) {
    errors[1] = true;
  $('#email_signup_status #cross_icon').hide();
  $('#email_signup_status #check_icon').show();
}
  else {
    errors[1] = false;
  $('#email_signup_status #check_icon').hide();
  $('#email_signup_status #cross_icon').show();
  }
}


$('#login_signup').on('keyup input', function () {
   var login_signup = $(this).val();
   if (login_signup.length != 0) {
   $.ajax ({
     url: '/login_signup_check.php',
     type: "POST",
     data: ({login_signup}),
     dataType: "html",
     success: funcSuccessLoginSignup
   });
 } else {
   errors[0] = false;
   $('#login_signup_status #check_icon').hide();
   $('#login_signup_status #cross_icon').show();
 }
 });

$('#name_signup').on('keyup input', function () {
  var name_signup = $(this).val();
if (name_signup.length != 0) {
  errors[2] = true;
  $('#name_signup_status #cross_icon').hide();
  $('#name_signup_status #check_icon').show();
} else {
  errors[2] = false;
  $('#name_signup_status #check_icon').hide();
  $('#name_signup_status #cross_icon').show();
  }

});

$('#surname_signup').on('keyup input', function () {
   var surname_signup = $(this).val();
if (surname_signup.length != 0) {
    errors[3] = true;
  $('#surname_signup_status #cross_icon').hide();
  $('#surname_signup_status #check_icon').show();
} else {
    errors[3] = false;
  $('#surname_signup_status #check_icon').hide();
  $('#surname_signup_status #cross_icon').show();
  }

});

$('#password_signup').on('keyup input', function () {
   var password_signup = $(this).val();
if (password_signup.length >= 6) {
    errors[4] = true;
  $('#password_signup_status #cross_icon').hide();
  $('#password_signup_status #check_icon').show();
} else {
    errors[4] = false;
  $('#password_signup_status #check_icon').hide();
  $('#password_signup_status #cross_icon').show();
  }

});

function isValidEmailAddress(emailAddress) {
   var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
   return pattern.test(emailAddress);
   }

$('#email_signup').on('keyup input', function () {
     var email_signup = $(this).val();

if ( isValidEmailAddress(email_signup) ) {
   $.ajax ({
     url: '/email_check.php',
     type: "POST",
     data: ({email_signup}),
     dataType: "html",
     success: funcSuccessEmail
   });
 }  else {
     errors[1] = false;
   $('#email_signup_status #check_icon').hide();
   $('#email_signup_status #cross_icon').show();
 }
});

$('#do_signup').bind('click', function () {
    if ( $('#login_signup').val().length == 0 || $('#email_signup').val().length == 0 || $('#name_signup').val().length == 0 || $('#surname_signup').val().length == 0 || $('#password_signup').val().length == 0) {
      alert('Заповніть всі поля!');
    }
    else {
      var signup = true;
  for (i=0; i<=4; i++) {
    if (errors[i] == false) {
      signup = false;
      alert('Заповніть всі поля правильно!');
      break;
    } else {
      signup = true;
    }
  }
}

function funcSuccessSignup (data) {
  alert(data);
   $('.window-signup').hide();
   $('.window-exit').show();
}

  if (signup == true) {
    // реєструєм
    var login_signup = $('#login_signup').val();
    var name_signup = $('#name_signup').val();
    var surname_signup = $('#surname_signup').val();
    var password_signup = $('#password_signup').val();
    var email_signup = $('#email_signup').val();
    $.ajax ({
      url: '/do_signup.php',
      type: "POST",
      data: ({login_signup, name_signup, surname_signup, password_signup, email_signup}),
      dataType: "html",
      success: funcSuccessSignup
    });
  }
});
