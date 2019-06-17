document.addEventListener("DOMContentLoaded", function(event) {
  $.ajaxSetup({
          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });



  $("#contact").submit(function(e){
  e.preventDefault();

  var texte = $('#message').val();
  var ressource =$("#ressource").val();
  // var tip_name_input =$("#tip_name_input").val();
  var avatar=$('#tip_file_input').val();

          $.ajax({

             url:'ajax/insert',
             data:  { texte:texte, ressource:ressource, /*nom:tip_name_input,*/ avatar:avatar},
             method:'get',
             success:function(reponsePHP){
            if (reponsePHP ==1 ||1 ){
                var code = '<div class=\"post-reply\"><div class="nom-reply-post">'+texte+'</div><div>'+avatar+'</div></div>';
              $('#liste').append(code).find('li:first').hide().slideDown();
            };
          },

             error: function(){
               alert("Problème durant la transaction !");
             }

          });
    });
})

/*<div class=\"text-reply-post">'+tip_name_input+'</div>*/
