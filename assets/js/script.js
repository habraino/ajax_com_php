$('#form1').submit(function(e) {
   e.preventDefault();

   var u_name = $('#name').val();
   var u_comment = $('#comment').val();

   $.ajax({
      url: 'http://localhost/ajax_com_php/inserir.php',
      method: 'POST',
      data: {name: u_name, comment: u_comment},
      dataType: 'json',
      
   }).done(function(response) {
      $('#name').val('');
      $('#comment').val('');
      console.log(response);
   });

});

function getComments() {
   $.ajax({
      url: 'http://localhost/ajax_com_php/listar.php',
      method: 'GET',
      dataType: 'json',
   }).done(function(response){
      for (var i = 0; i < response.length; i++) {
         $('.box_comment').prepend('<div class="b_comm"><h4>'+ response[i].name +'</h4><p>'+ response[i].comment +'</p></div>');
      }
   });
}

getComments();
