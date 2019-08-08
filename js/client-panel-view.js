
// click on row button
function getEditClient(id){
	window.location.href = './client-panel-edit.php?id='+id;	
}

// Retrive the client list and load datatable
$(document).ready(function(){

  function MoneyCurrencyFormat(strNumber){
	  if(strNumber.length===0) return '$0';
	  return '$'+strNumber.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
  }
  
  // Retrive the client panel template
  var template_html = $('#client-panel-content').html();
 
  var url = './services/client/read-one.php',
	   id = getUrlParameter('id');
	
  // retrive the client info detail
  var posting = $.post( url, { 'id': id } );
 
  // render the template
  posting.done(function( response ) {
	if(response.data) {
		
		response.data.capital_format = MoneyCurrencyFormat(response.data.capital);
		response.data.interest_format = MoneyCurrencyFormat(response.data.interest);
		response.data.overdue_months_format = MoneyCurrencyFormat(response.data.overdue_months);
		
		var rendered = Mustache.render(template_html, { 'client' : response.data } );
		
		$('#client-panel-content').html(rendered);
	}
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