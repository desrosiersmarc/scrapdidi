// $(document).ready(function() {
//   $('.buttonAjouterPanier').on('click', function(e){
//     e.preventDefault();
//     // console.log(e);
//     var $idTarget = e.target.id;
//     // console.log($idTarget);
//     window.location.href= "#" + $idTarget;

//     var result = $.ajax({
//         url: 'php_file/fonctions.php',
//         type: 'post',
//         data: { "articleValue": $idTarget,
//                 "idCommande": 54
//               },
//         success: function(response) { console.log(response); }
//     });

//     console.log(result);
//   });
// });

// function goToTarget(target) {
//   window.location.href= "#" + target;
// };

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


});
