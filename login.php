<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prestamos! | </title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginForm" action="./services/user/login.php">
              <h1>Formulario de ingreso</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario o correo" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" name="password"/>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Ingresar</button>
                <a class="reset_pass" href="#">Recordar contraseña</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Prestamos!</h1>
                  <p>©2019 Todos los derechos reservados. </p>
				  <p>Prestamos! control y administración de servicios.</p>
				  <p> Terminos y condiciones</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
	
	<!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    
    
	<!-- Login script -->
    <script src="./js/login.js"></script>
	
  </body>
</html>
