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
    <!-- Datatables -->
    <link href="./vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
			<h3>Listado de Clientes <small></small></h3>
              <div class="title_left">
                
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>
			
			<ul class="breadcrumb" style="margin-bottom: 10px;">
			  <li><a href="index.php">Inicio</a> </li>
			  <li class="active">Lista de Clientes</li>
			</ul>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de clientes activos en el sistema <small></small></h2> 
                    <div class="clearfix"></div>
                  </div>
				  <div class="x_content">
                    <table id="client-list" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Edad</th>
						  <th></th>
                        </tr>
                      </thead>
					  <tfoot>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Edad</th>
						  <th></th>
                        </tr>
                      </tfoot>
                    </table>
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
	
	<!-- compose -->
    <div class="compose col-md-10 col-xs-12">
	  <div class="compose-header">
	    
        <button type="button" class="close compose-close">
          <span style="color:white">×</span>
        </button>
      </div>
      <div class="compose-body">
		<div id="client-panel-content">
				<!-- Render template with jQuery -->
		</div>
	  </div>
	  <div class="compose-footer">
        <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
      </div>
    </div>
    <!-- /compose -->
	

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

    <!-- Custom Theme Scripts -->
    <script src="./js/custom.js"></script>
	
	<!-- Client List Scripts -->
    <script src="./js/client-list.js?v=222"></script>
	
  </body>
</html>
