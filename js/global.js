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

$(document).ready(function() {
  $('#button_to_animate').click(function(){
    $('#h2animate').addClass('animated hinge');
  });


});
