
<!-- Breadcrumb -->
<section class="g-my-30">
	<div class="container">
		<ul class="u-list-inline">
			<li class="list-inline-item g-mr-7">
				<a class="u-link-v5 g-color-main g-color-primary--hover" href="#">Home</a>
				<i class="fa fa-angle-right g-ml-7"></i>
			</li>
			<li class="list-inline-item g-mr-7">
				<a class="u-link-v5 g-color-main g-color-primary--hover" href="#">Pages</a>
				<i class="fa fa-angle-right g-ml-7"></i>
			</li>
			<li class="list-inline-item g-color-primary">
				<span>Profile Settings</span>
			</li>
		</ul>
	</div>
</section>
<!-- End Breadcrumb -->

<section class="g-mb-100">
	<div class="container">
		<div class="row">

			<?php include_once('profile-sidebar.php'); ?>


			<!-- Profle Content -->
			<div class="col-lg-9">
				<!-- Nav tabs -->
				<h3>Mis eventos</h3>

<style media="screen">
.evento_pendiente{border-right: 2px solid red;}
.evento_aprobado{border-right: 2px solid green;}
.card_logo{ width: 15%; float: left;}
.card_descripcion{ width: 60%; float: left;}
.card_button{ width: 22%; float: left;}
.card_wrapper{border: 1px solid #ddd}
.bg-gray{background: #ddd; padding: .2em .4em; border-radius: .4em;}
</style>

<div class="row">
	<?php

$datos_user =$this->session->userdata();

var_dump($datos_user);


	 ?>
</div>

<?php
	foreach ($eventos_disponibles as $evento_disp) {
		$imagen_logo = (strlen($evento_disp->logo_lugar) > 0) ? '<img src="'.base_url('images-lugares/'.$evento_disp->logo_lugar).' " width="100" />' : "[no-image]";

		$precio_usuario = ($datos_user['user_sexo'] == "0") ? $evento_disp->precio :$evento_disp->precio_hombres;
		echo '<div class="row card_wrapper evento_pendiente">
			<div class="card_logo">'.$imagen_logo.' '.$evento_disp->logo_lugar.'</div>
			<div class="card_descripcion">
				<h3>'.$evento_disp->fecha.' - '.$evento_disp->hora.' '.$precio_usuario.' </h3>
				<p>'.$evento_disp->categoria_nombre.'
				<br><span>'.$evento_disp->evento_direccion.'</span>
				<br><span class="bg-gray">'.$evento_disp->edad_minima.' a '.$evento_disp->edad_maxima.' años.</span>
				<span class="bg-gray">'.$evento_disp->evento_tipo.' </span>
				</p>

			</div>
			<div class="card_button">
				<a class="btn btn-primary" name="button">Quiero irrrr!</a>
			</div>
		</div>';
	}



?>





<div class="row card_wrapper evento_pendiente">
	<div class="card_logo">logo</div>
	<div class="card_descripcion">
		<h3>Evento de tomar sopa</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="card_button">
		<a class="btn btn-primary" name="button">Quiero irrrr!</a>
	</div>
</div>

        </div>
				<!-- End Tab panes -->
			</div>
			<!-- End Profle Content -->
		</div>
	</div>
</section>
