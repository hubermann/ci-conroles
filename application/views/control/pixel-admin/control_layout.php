<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
	<title>10en8 - Admin Dashboard </title>
	<!-- Bootstrap Core CSS -->
	<?php #echo base_url('public_folder/css/normalize.min.css'); ?>
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/html/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css'); ?>" rel="stylesheet">
	<!-- toast CSS -->
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/toast-master/css/jquery.toast.css'); ?>" rel="stylesheet">
	<!-- morris CSS -->
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/morrisjs/morris.css'); ?>" rel="stylesheet">
	<!-- animation CSS -->
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/html/css/animate.css'); ?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url('public_folder/pixeladmin-lite/html/css/style.css'); ?>" rel="stylesheet">
	<!-- color CSS -->

	<link href="<?php echo base_url('public_folder/pixeladmin-lite/html/css/colors/blue-dark.css'); ?>" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Preloader -->
	<!-- <div class="preloader">
		<div class="cssload-speeding-wheel"></div>
	</div> -->
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			<div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
				<div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/images/pixeladmin-logo.png'); ?>" alt="home" />
				</b><span class="hidden-xs"><img src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/images/pixeladmin-text.png'); ?>" alt="home" /></span></a></div>
				<ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
					<li>
						<form role="search" class="app-search hidden-xs">
							<input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right pull-right">

					<?php 
					if( $this->session->userdata('logged_in') )
					{
						$usuario = $this->session->userdata('logged_in');

						echo '
						<li>
							<a class="profile-pic" href="#"> 
								<!-- <img src="pixeladmin-lite/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"> -->
								'.$usuario['email'].'
							</a>
						</li>';
					}

					?>
					
					<li>
						<a href="<?php echo base_url('control/logout'); ?>"> Cerrar sesion </a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-header -->
			<!-- /.navbar-top-links -->
			<!-- /.navbar-static-side -->
		</nav>
		<!-- Left navbar-header -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse slimscrollsidebar">

				<ul class="nav" id="side-menu">
					<li style="padding: 10px 0 0;">
						<a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/usuarios');?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Usuarios</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/categoria_eventos');?>" class="waves-effect"><i class="fa fa-bookmark-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Categorias Eventos</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/notas');?>" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Notas</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/categoria_notas');?>" class="waves-effect"><i class="fa fa-bookmark-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Categorias Notas</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/beneficios');?>" class="waves-effect"><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i><span class="hide-menu">Beneficios</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/lugares');?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Lugares</span></a>
					</li>

					<li>
						<a href="<?=base_url('control/permisos');?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Permisos</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/roles');?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Roles</span></a>
					</li>
					<li>
						<a href="<?=base_url('control/useradmins');?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Admins</span></a>
					</li>

					<li>
						<a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Blank Page</span></a>
					</li>
					<li>
						<a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
					</li>
				</ul>
				<div class="center p-20">

				</div>
			</div>
		</div>
		<!-- Left navbar-header end -->
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<br>
				</div>
				<? #$this->load->view($menu); ?>

				<!-- row-->
				<div class="row">

					<div class="col-md-12">
					<!-- <ol class="breadcrumb">
							<li class="btn btn-master"><a href="<?=base_url('control/');?>">Dashboard</a></li>
							<li class="btn btn-master"><a href="<?=base_url('control/');?>">Algunos</a></li>
							<li class="btn btn-master"><a href="<?=base_url('control/');?>">Algunos</a></li>
						</ol> -->
						<?php $this->load->view($content);?>
					</div>
				</div>
				<!-- /.row -->


			</div>
			<!-- /.container-fluid -->
			<footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Bootstrap Core JavaScript -->

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/html/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js'); ?>"></script>
	<!--slimscroll JavaScript -->
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/html/js/jquery.slimscroll.js'); ?>"></script>
	<!--Wave Effects -->

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/html/js/waves.js'); ?>"></script>
	<!--Counter js -->
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/waypoints/lib/jquery.waypoints.js'); ?>"></script>
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/counterup/jquery.counterup.min.js'); ?>"></script>
	<!--Morris JavaScript -->
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/raphael/raphael-min.js'); ?>"></script>
	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/morrisjs/morris.js'); ?>"></script>
	<!-- Custom Theme JavaScript -->

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/html/js/custom.min.js'); ?>"></script>

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/html/js/dashboard1.js'); ?>"></script>

	<script src="<?php echo base_url('public_folder/pixeladmin-lite/plugins/bower_components/toast-master/js/jquery.toast.js'); ?>"></script>
	
	<?php if ($this->session->flashdata('success')): ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$.toast({
					heading: 'Mensaje',
					text: '<?= $this->session->flashdata('success') ?>',
					position: 'top-right',
					loaderBg: '#ff6849',
					icon: 'info',
					hideAfter: 3500,
					stack: 5
				})
			});
		</script>
	<?php endif; ?>

	<?php if ($this->session->flashdata('warning')): ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$.toast({
					heading: 'Mensaje',
					text: '<?= $this->session->flashdata('warning') ?>',
					position: 'top-right',
					loaderBg: 'yellow',
					icon: 'warning',
					hideAfter: 3500,
					stack: 5
				})
			});
		</script>
	<?php endif; ?>

	<?php if ($this->session->flashdata('error')): ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$.toast({
					heading: 'Mensaje',
					text: '<?= $this->session->flashdata('error') ?>',
					position: 'top-right',
					loaderBg: 'red',
					icon: 'error',
					hideAfter: 3500,
					stack: 5
				})
			});
		</script>
	<?php endif; ?>


	<script type="text/javascript">


		$('.delete').on("click", function (e) {
			e.preventDefault();
			var choice = confirm($(this).attr('data-confirm'));
			if (choice) {
				window.location.href = $(this).attr('href');
			}
		});

  </script>
</body>

</html>
