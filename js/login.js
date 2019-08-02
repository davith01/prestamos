/**
 * HTTP login function 
 * Jquery
 */
function sendLogin() {
	$.post( "test.php", { name: "John", time: "2pm" } );	
}

 // Attach a submit handler to the form
$( "#loginForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    username = $form.find( "input[name='username']" ).val(),
	password = $form.find( "input[name='password']" ).val(),
    url = $form.attr( "action" );
 
  // Send the data using post
  var posting = $.post( url, { username: username, password: password } );
 
  // redirect to the login
  posting.done(function( data ) {
	console.log(data);
    window.location.href = "./index.php";
  });
  
  // show message error
  posting.fail(function(response) {
	if(response && response.status) {
		alert( "Usuario o contraseña inválidos!!" );
	}
	else {
		alert( "error!!" );
	}
  })
});