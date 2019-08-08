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
			  <li class="active">Consulta cliente</li>
			</ul>

			
            <div class="row" >
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  </div>
				  <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-12 profile_details">
						<div class="well profile_view" id="client-panel-content">
						  <div class="col-sm-12">
							<h4 class="brief"><i>{{client.type}}</i></h4>
							<div class="left col-xs-7" style="margin-top: 5px;">
							  <h2>{{client.name}} {{client.last_name}}</h2>
							  <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
							  <ul class="list-unstyled">
								<li><i class="fa fa-building"></i> Abono a Capital: {{client.capital_format}}</li>
								<li><i class="fa fa-phone"></i> Abono a Intereses: {{client.interest_format}}</li>
								<li><i class="fa fa-phone"></i> Meses atrasados: {{client.overdue_months_format}}</li>
							  </ul>
							</div>
							<div class="right col-xs-5 text-center">
							  <img src="{{client.image}}" alt="" class="img-circle img-responsive">
							</div>
						  </div>
						  <div class="col-xs-12 bottom text-center">
							<div class="col-xs-12 col-sm-6 emphasis">
							  <p class="ratings">
								<a>4.0</a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star-o"></span></a>
							  </p>
							</div>
							<div class="col-xs-12 col-sm-6 emphasis">
							  <button type="button" class="btn btn-primary btn-xs" onclick="getEditClient('{{client.id}}')">
								</i> <i class="fa fa-edit"></i> Editar Perfil</button>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Novedades</a>
							  </li>
							  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Movimientos</a>
							  </li>
							</ul>
							<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
								<!-- start recent activity -->
								<ul class="messages">
								  <li>
									<img src="images/img.jpg" class="avatar" alt="Avatar">
									<div class="message_date">
									  <h3 class="date text-info">24</h3>
									  <p class="month">May</p>
									</div>
									<div class="message_wrapper">
									  <h4 class="heading">Desmond Davison</h4>
									  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
									  <br />
									  <p class="url">
										<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
										<a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
									  </p>
									</div>
								  </li>
								</ul>
								<!-- end recent activity -->
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
								<!-- start user projects -->
								<table class="data table table-striped no-margin">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Project Name</th>
									  <th>Client Company</th>
									  <th class="hidden-phone">Hours Spent</th>
									  <th>Contribution</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>1</td>
									  <td>New Company Takeover Review</td>
									  <td>Deveint Inc</td>
									  <td class="hidden-phone">18</td>
									  <td class="vertical-align-mid">
										 
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>New Partner Contracts Consultanci</td>
									  <td>Deveint Inc</td>
									  <td class="hidden-phone">13</td>
									  <td class="vertical-align-mid">
										 
									  </td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>Partners and Inverstors report</td>
									  <td>Deveint Inc</td>
									  <td class="hidden-phone">30</td>
									  <td class="vertical-align-mid">
										 
									  </td>
									</tr>
									<tr>
									  <td>4</td>
									  <td>New Company Takeover Review</td>
									  <td>Deveint Inc</td>
									  <td class="hidden-phone">28</td>
									  <td class="vertical-align-mid">
										 
									  </td>
									</tr>
								  </tbody>
								</table>
								<!-- end user projects -->
							  </div>
							</div>
						  </div>
					</div>
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

    <!-- Custom Theme Scripts -->
    <script src="./js/custom.js"></script>
	
	<!-- Client List Scripts -->
    <script src="./js/client-panel-view.js"></script>
	
  </body>
</html>
