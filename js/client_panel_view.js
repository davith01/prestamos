var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};


// Retrive the client list and load datatable
$(document).ready(function(){

  // Retrive the client panel template
  var template_html = $('#client-panel-content').html();
 
  var url = './services/client/read-one.php',
	   id = getUrlParameter('id');
	
  // retrive the client info detail
  var posting = $.post( url, { 'id': id } );
 
  // render the template
  posting.done(function( response ) {
	var rendered = Mustache.render(template_html, { 'client' : response.data } );
	$('#client-panel-content').html(rendered);
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