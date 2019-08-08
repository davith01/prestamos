var Services = function() {
	
}

Services.prototype.get = function(url){
	return new Promise(function(resolve, reject) {
	  $.get(url)
	  .done(function(response) {
		  reject(response);
	  })
	  .fail(function(response) {
		  Error(reject(response));
	  });
	});
}

Error(response) {
	var message = 'Error invocando el servicio';
	if(response.status === 401 ) {
		message = 'Usuario o contraseña inválidos';
	}
	return { 'status': response.status, 'message': message };
}