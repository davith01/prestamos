
// Retrive the client list and load datatable
$(document).ready(function(){

  // Retrive the client panel template
  var $formClient = $('#form-client-edit');
 
  var url = './services/client/read-one.php',
	   id = getUrlParameter('id');
	
  // retrive the client info detail
  var posting = $.post( url, { 'id': id } );
 
  // render the template
  posting.done(function( response ) {
	var rendered = Mustache.render($formClient.html(), { 'client' : response.data } );
	$formClient.html(rendered);
  });
  
  // show message error
  posting.fail(function(response) {
	if(response && response.status) {
		alert( "Usuario o contraseña inválidos!!" );
	}
	else {
		alert( "error!!" );
	}
  });

    
   $('#reload-table').on('click', function(){
    	table.ajax.reload();
   });
   
});