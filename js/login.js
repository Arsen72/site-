var error;

function funcSuccessLogin (data) {
  if ( data == true ) {
   error_login = true;
  $('#login_status #cross_icon').hide();
  $('#login_status #check_icon').show();
}
  else {
   error_login = false;
  $('#login_status #check_icon').hide();
  $('#login_status #cross_icon').show();
  }
}

$('#login').on('keyup input', function () {
   var login = $(this).val();
   if (login.length != 0) {
   $.ajax ({
     url: '/login_check.php',
     type: "POST",
     data: ({login}),
     dataType: "html",
     success: funcSuccessLogin
   });
 } else {
   error_login = false;
   $('#login_status #check_icon').hide();
   $('#login_status #cross_icon').show();
 }
 });

 function funcSuccessDoLogin (data) {
   if ( data == true ) {
   $('#password_status #cross_icon').hide();
   $('#password_status #check_icon').show();
   alert('Ви успішно ввійшли!')
   $('.window-exit').hide();
   $('.w-fon').hide();
 }
   else {
   $('#password_status #check_icon').hide();
   $('#password_status #cross_icon').show();
   alert('Пароль введно не правильно!');
   }
 }

$('#do_login').bind('click', function () {
    var login = $('#login').val();
    var password = $('#password').val();
    if ( error_login == true ) {
      // перевірка логіна
      $.ajax ({
        url: '/do_login.php',
        type: "POST",
        data: ({login, password}),
        dataType: "html",
        success: funcSuccessDoLogin
      });
    }
    else {
      alert('Введіть ваш логін правильно!');
    }
});
