$(document).ready(function(){
  $('#button_to_animate').click(function(){
    $('#h2animate').addClass('animated hinge');
  });
  $('#mailClientVerification').blur(function(){
    var mail_first = $('#mailClient')[0].value;
    var mail_second = $('#mailClientVerification')[0].value;
    if (mail_first != mail_second)
      {$('#mail-alert').slideDown();}
    else
      {$('#mail-alert').slideUp();}
  });

  $('#namePasswordVerification').blur(function(){
    var password_first = $('#namePassword')[0].value;
    var password_second = $('#namePasswordVerification')[0].value;
    if (password_first != password_second)
      {$('#password-alert').slideDown();}
    else
      {$('#password-alert').slideUp();}
  });

  $('#cgv').click(function(){
    $('#shipping-cgv-alert').hide();
    $('#shipping-validation').hide();
    $('#shipping-validation').removeClass('shipping-button-hide');
    $('#shipping-validation').slideDown();
  });

  // #TODO find a solution toggle ? to hide button if checkbox is uncheck if checkbox or not

});

