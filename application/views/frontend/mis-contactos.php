
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
				<h3>Mis contactos</h3>

<div class="row">
	<?php $datos_user =$this->session->userdata(); ?>
</div>

<?php
    // foreach ($eventos_disponibles as $evento_disp) {
		//
		// 	$status_invitacion = $this->usuarios_evento->verificar_asistencia($this->session->userdata('user_id'), $evento_disp->id);
		// 	$boton_evento = "";
		// 	switch ($status_invitacion) {
		// 		case 5: #desconfirmado por demorar el pago
		// 			$boton_evento = '
		// 			<div class="box-notificacion-evento dashed-gray">
		// 				<a href="#">Desconfirmado por demora.</a>
		// 			</div>';
		// 			break;
		// 		case 1: # Solicitud enviada esperando aprobacion
		// 			$boton_evento = '
		// 			<div class="box-notificacion-evento dashed-orange">
		// 				<a href="#" class="btn btn-small">Aguardando aprobacion.</a>
		// 			</div>';
		// 			break;
		// 		case 2: # Solicitud aprobada. esperando El pago
		// 			$boton_evento = '
		// 			<div class="box-notificacion-evento no-border">
		// 				<p>Solicitud de asistencia aprobada!</p>
		// 				<a href="payment" class="button-blue">Pagar asistencia</a>
		// 			</div>';
		// 			break;
		// 		case 3: # Pago demorado
		// 			$boton_evento = '<div class="box-notificacion-evento dashed-sky">
		// 			<a href="volver" class="button-sky">Pago demorado. <br> Contactate con nosotros en el día de hoy para podér asistir al evento.</a>
		// 			</div>';
		// 			break;
		// 		case 4: # Pago procesado ok
		// 			$boton_evento = '
		// 			<div class="box-notificacion-evento dashed-green">
		// 			<a href="#" class="button-green">Pago realizado correctamente</a>
		// 			</div>';
		// 			break;
		// 		default: # Disponible para solicitar asistencia
		// 			$boton_evento = '<div class="box-notificacion-evento no-border">
		// 			<a href="'.base_url('solicitar_asistencia_evento/'.$evento_disp->id).'" class="button-orange">Quiero asistir!</a>
		// 			</div>';
		// 			break;
		// 	}
		//
		//
    //     $imagen_logo = (strlen($evento_disp->logo_lugar) > 0) ? '<img src="'.base_url('images-lugares/'.$evento_disp->logo_lugar).' " width="100" />' : "[no-image]";
		//
    //     $precio_usuario = ($datos_user['user_sexo'] == "0") ? $evento_disp->precio :$evento_disp->precio_hombres;
    //     echo '<div class="row card_wrapper evento_pendiente">
		// 	<div class="card_logo">'.$imagen_logo.' </div>
		// 	<div class="card_descripcion">
		// 		<h3>'.$evento_disp->fecha.' - '.$evento_disp->hora.' '.$precio_usuario.' </h3>
		// 		<p>'.$evento_disp->categoria_nombre.'
		// 		<br><span>'.$evento_disp->evento_direccion.'</span>
		// 		<br><span class="bg-gray">'.$evento_disp->edad_minima.' a '.$evento_disp->edad_maxima.' años.</span>
		// 		<span class="bg-gray">'.$evento_disp->evento_tipo.' </span>
		// 		</p>
		//
		// 	</div>
		// 	<div class="card_button">
		// 		'.$boton_evento.'
		// 	</div>
		// </div>';
    // }

?>


<div class="container">
	<div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
    <div class="row">
      <div class="col-lg-4 g-mb-40 g-mb-0--lg">
        <!-- User Image -->
        <div class="g-mb-20">
          <img class="img-fluid w-100" src="../../assets/img-temp/400x450/img5.jpg" alt="Image Description">
        </div>
        <!-- User Image -->

        <!-- User Contact Buttons -->
        <a class="btn btn-block u-btn-outline-primary g-rounded-50 g-py-12 g-mb-10" href="#">
          <i class="icon-user-follow g-pos-rel g-top-1 g-mr-5"></i> Follow Me
        </a>
        <a class="btn btn-block u-btn-darkgray g-rounded-50 g-py-12 g-mb-10" href="#">
          <i class="icon-call-in g-pos-rel g-top-1 g-mr-5"></i> Contact Me
        </a>
        <!-- End User Contact Buttons -->
      </div>

      <div class="col-lg-8">
        <!-- User Details -->
        <div class="d-flex align-items-center justify-content-sm-between g-mb-5">
          <h2 class="g-font-weight-300 g-mr-10">Johne Doe</h2>
          <ul class="list-inline mb-0">
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="#">
                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="#">
                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="#">
                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-dribbble"></i>
                <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-dribbble"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-2">
              <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="#">
                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- End User Details -->

        <!-- User Position -->
        <h4 class="h6 g-font-weight-300 g-mb-10">
            <i class="icon-badge g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Project Manager at Pixeel Ltd.
          </h4>
        <!-- End User Position -->

        <!-- User Info -->
        <ul class="list-inline g-font-weight-300">
          <li class="list-inline-item g-mr-20">
            <i class="icon-location-pin g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> London, UK
          </li>
          <li class="list-inline-item g-mr-20">
            <i class="icon-check g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> Verified User
          </li>
          <li class="list-inline-item g-mr-20">
            <i class="icon-link g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>  <a class="g-color-main g-color-primary--hover" href="#">hs.c/hsu20</a>
          </li>
        </ul>
        <!-- End User Info -->

        <hr class="g-brd-gray-light-v4 g-my-20">

        <p class="lead g-line-height-1_8">About elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellusimp imperdiet molestie est. Dell viverra cursus nibh volutpat at.</p>

        <hr class="g-brd-gray-light-v4 g-my-20">

        <!-- User Skills -->
        <div class="d-flex flex-wrap text-center">
          <!-- Counter Pie Chart -->
          <div class="g-mr-40 g-mb-20 g-mb-0--xl">
            <div class="js-pie g-color-purple g-mb-5" data-circles-value="54" data-circles-max-value="100" data-circles-bg-color="#d3b6c6" data-circles-fg-color="#9b6bcc" data-circles-radius="30" data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-font-size="14" id="hs-pie-1"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><path fill="transparent" stroke="#d3b6c6" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 29.96041407176496 1.5000274920433334 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#9b6bcc" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 22.943363074828525 57.61256734362646 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 14px; height: 60px; line-height: 60px;">54%</div></div></div>
            <h4 class="h6 g-font-weight-300">Consulting</h4>
          </div>
          <!-- End Counter Pie Chart -->

          <!-- Counter Pie Chart -->
          <div class="g-mr-40 g-mb-20 g-mb-0--xl">
            <div class="js-pie g-color-blue g-mb-5" data-circles-value="72" data-circles-max-value="100" data-circles-bg-color="#bee3f7" data-circles-fg-color="#3498db" data-circles-radius="30" data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-font-size="14" id="hs-pie-2"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><path fill="transparent" stroke="#bee3f7" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 29.96041407176496 1.5000274920433334 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#3498db" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 2.0106890878874566 35.37107760743576 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 14px; height: 60px; line-height: 60px;">72%</div></div></div>
            <h4 class="h6 g-font-weight-300">Branding</h4>
          </div>
          <!-- End Counter Pie Chart -->

          <!-- Counter Pie Chart -->
          <div class="g-mr-40 g-mb-20 g-mb-0--xl">
            <div class="js-pie g-color-lightred g-mb-5" data-circles-value="81" data-circles-max-value="100" data-circles-bg-color="#ffc2bb" data-circles-fg-color="#e74c3c" data-circles-radius="30" data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-font-size="14" id="hs-pie-3"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><path fill="transparent" stroke="#ffc2bb" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 29.96041407176496 1.5000274920433334 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#e74c3c" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 3.4952499945662545 19.523921194002977 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 14px; height: 60px; line-height: 60px;">81%</div></div></div>
            <h4 class="h6 g-font-weight-300">Copywriting</h4>
          </div>
          <!-- End Counter Pie Chart -->

          <!-- Counter Pie Chart -->
          <div class="g-mr-40 g-mb-20 g-mb-0--xl">
            <div class="js-pie g-color-primary g-mb-5" data-circles-value="83" data-circles-max-value="100" data-circles-bg-color="#c9ff97" data-circles-fg-color="#72c02c" data-circles-radius="30" data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-font-size="14" id="hs-pie-4"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><path fill="transparent" stroke="#c9ff97" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 29.96041407176496 1.5000274920433334 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#72c02c" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 5.008151206172407 16.301186406609574 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 14px; height: 60px; line-height: 60px;">83%</div></div></div>
            <h4 class="h6 g-font-weight-300">Marketing</h4>
          </div>
          <!-- End Counter Pie Chart -->

          <!-- Counter Pie Chart -->
          <div class="g-mb-20 g-mb-0--lg">
            <div class="js-pie g-mb-5" data-circles-value="92" data-circles-max-value="100" data-circles-bg-color="#eeeeee" data-circles-fg-color="#111111" data-circles-radius="30" data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-font-size="14" id="hs-pie-5"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><path fill="transparent" stroke="#eeeeee" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 29.96041407176496 1.5000274920433334 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#111111" stroke-width="3" d="M 29.994195313694686 1.5000005911295347 A 28.5 28.5 0 1 1 16.251688639110682 5.035346292727358 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 14px; height: 60px; line-height: 60px;">92%</div></div></div>
            <h4 class="h6 g-font-weight-300">Management</h4>
          </div>
          <!-- End Counter Pie Chart -->
        </div>
        <!-- End User Skills -->
      </div>
    </div>
  </div>
</div>



        </div>
				<!-- End Tab panes -->
			</div>
			<!-- End Profle Content -->
		</div>
	</div>
</section>
