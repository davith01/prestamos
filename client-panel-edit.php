<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Prestamos! | </title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="./vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="./css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
			<!-- navbar-nav-title -->
			<?php require 'templates/navbar-nav-title.php'?>
			<!-- navbar-nav-title -->

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
			<?php require 'templates/menu-profile-quick-info.php'?>
			<!-- menu profile quick info -->

            <br />

            <!-- sidebar menu -->
			<?php require './templates/sidebar-menu.php'?>
			<!-- sidebar menu -->
			
			
            <!-- /menu footer buttons -->
			<?php require 'templates/menu-footer-buttons.php'?>
			<!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php require 'templates/top-navigation.php'?>
		<!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
			  <h3>Información del Cliente <small></small></h3>
			  <div class="title_right">
              </div>
            </div>
			
            <div class="clearfix"></div>
			
			<ul class="breadcrumb" style="margin-bottom: 10px;">
			  <li><a href="client-list.php" class="btn-primary btn-xs btn-default btn-back-nav"><i class="fa fa-arrow-left"></i></a></li>
			  <li><a href="index.php">Inicio</a> </li>
			  <li><a href="client-list.php">Lista de Clientes</a></li>
			  <li class="active">Editar cliente</li>
			</ul>

			<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="x_panel">
				  <div class="x_title">
					<h3>Editar Cliente <i class="fa fa-chevron-right" style="opacity: 0.4;"></i> <small>Formulario de edición</small></h3>
					
					<div class="clearfix"></div>
				  </div>
				  <div class="x_content">
					<br />
					<form class="form-horizontal form-label-left input_mask" id="form-client-edit">

					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" id="name" placeholder="Nombre" value="{{client.name}}">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					  </div>

					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control" id="last_name" placeholder="Apellido"  value="{{client.last_name}}">
						<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
					  </div>

					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" id="email" placeholder="Email"  value="{{client.email}}">
						<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
					  </div>

					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control" id="inputSuccess5" id="phone" placeholder="Phone"  value="{{client.phone}}">
						<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
					  </div>

					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de cliente</label> <span class="required">*</span>
						<input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Oficina
						<div class="col-md-9 col-sm-9 col-xs-12">
						  
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de nacimiento
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						  <input class="date-picker form-control col-md-7 col-xs-12" type="text">
						</div>
					  </div>
					  <div class="ln_solid"></div>
					  <div class="form-group">
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						  <button type="button" class="btn btn-primary">Cancelar</button>
						   <button class="btn btn-primary" type="reset">Limpiar</button>
						  <button type="submit" class="btn btn-success">Guardar</button>
						</div>
					  </div>

					</form>
				  </div>
				</div>
			  </div>
            </div>
            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
		<?php require 'templates/footer-content.php'?>
		<!-- footer content -->
        
      </div>
    </div>
	
    <!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="./vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="./vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="./vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="./vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="./vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="./vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="./vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="./vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="./vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="./vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="./vendors/jszip/dist/jszip.min.js"></script>
    <script src="./vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="./vendors/pdfmake/build/vfs_fonts.js"></script>
	
	<!-- Mustache librery -->
	<script src="./vendors/mustache.js/mustache.min.js"></script>

	<!-- Switchery -->
    <script src="./vendors/switchery/dist/switchery.min.js"></script>
    
	<!-- Custom Theme Scripts -->
    <script src="./js/custom.js"></script>
	
	
	<!-- Client List Scripts -->
    <script src="./js/client-panel-edit.js"></script>
	
  </body>
</html>
