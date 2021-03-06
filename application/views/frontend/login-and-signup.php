<!-- Login & Signup -->
		<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(<?= base_url('public_folder/frontend/assets/img/bg/full_images/10en8-img1.jpg'); ?>);">
			<div class="container u-bg-overlay__inner">
				<div class="row justify-content-center text-center mb-5">
					<div class="col-lg-8">
						<!-- Heading -->
						<h1 class="g-color-white text-uppercase mb-4">Login or register an account</h1>
						<div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
						<p class="lead g-color-white">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
						<!-- End Heading -->
					</div>
				</div>

				<div class="row justify-content-center align-items-center no-gutters">
					<div class="col-lg-5 g-bg-teal g-rounded-left-5--lg-up">
						<div class="g-pa-50" height="100%">

							<!-- Form -->
							<form class="g-py-15" method="POST" action="<?php echo base_url('ingreso'); ?>">
								<h2 class="h3 g-color-white mb-4">Login</h2>
								<div class="mb-4">
									<div class="input-group">
										<span class="input-group-addon g-width-45 g-brd-white g-color-white">
												<i class="icon-finance-067 u-line-icon-pro"></i>
											</span>
										<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
									</div>
									<?php echo form_error('email','<p class="error">', '</p>'); ?>
								</div>

								<div class="g-mb-40">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-white g-color-white">
													<i class="icon-communication-062 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" name="password" type="password" placeholder="Password">
									</div>
									<?php echo form_error('password','<p class="error">', '</p>'); ?>
								</div>

								<div class="g-mb-60">
									<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Login</button>
								</div>

								<br>
								<br>
								<br>
								<br>

								<br>
								<br>
								<br>
								<br>

								<br><br>
								<br>
								<br>
								<!-- <div class="text-center g-pos-rel pb-2 g-mb-60">
									<div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
									<span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">OR</span>
								</div> -->

								<!-- <button class="btn btn-block u-btn-facebook rounded text-uppercase g-py-13 g-mb-15" type="submit">
									<i class="mr-3 fa fa-facebook"></i>
									<span class="g-hidden-xs-down">Login with</span> Facebook
								</button>
								<button class="btn btn-block u-btn-twitter rounded text-uppercase g-py-13" type="button">
									<i class="mr-3 fa fa-twitter"></i>
									<span class="g-hidden-xs-down">Login with</span> Twitter
								</button> -->
							</form>
							<!-- End Form -->
						</div>
					</div>

					<div class="col-lg-5 g-bg-white g-rounded-right-5--lg-up">
						<div class="g-pa-50">
							<!-- Form -->
							<form class="g-py-15" method="POST" action="<?php echo base_url('registro'); ?>">
								<h2 class="h3 g-color-black mb-4">Registro</h2>
								<p class="mb-4">Profitable contracts, invoices &amp; payments for the best cases!</p>

								<div class="mb-4">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
													<i class="icon-communication-128 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" name="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="Nombre">

									</div>
									<?php echo form_error('nombre','<p class="error">', '</p>'); ?>
								</div>


								<div class="mb-4">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
													<i class="icon-communication-128 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" name="apellido" value="<?php echo set_value('apellido'); ?>" placeholder="Apellido">

									</div>
									<?php echo form_error('apellido','<p class="error">', '</p>'); ?>
								</div>

								<div class="mb-4">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
													<i class="icon-finance-067 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" name="nickname" value="<?php echo set_value('nickname'); ?>" placeholder="Nickname">

									</div>
									<?php echo form_error('nickname','<p class="error">', '</p>'); ?>
								</div>

								<div class="mb-4">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
													<i class="icon-communication-062 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">

									</div>
									<?php echo form_error('email','<p class="error">', '</p>'); ?>
								</div>

								<div class="mb-4">
									<div class="input-group rounded">
										<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
													<i class="icon-media-094 u-line-icon-pro"></i>
												</span>
										<input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" name="password" type="password" placeholder="Password">
									</div>
									<?php echo form_error('password','<p class="error">', '</p>'); ?>
								</div>

								<div class="mb-1">
									<p>Al crear mi cuenta acepto los <a href="#">Terminos y condiciones de uso</a></p>
									<!-- <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
										<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox"> -->
										<!-- <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
											<i class="fa" data-check-icon="&#xf00c"></i>
										</div>
										Al crear mi cuenta acepto los <a href="#">Terminos y condiciones de uso</a>
									</label> -->
								</div>

								<div class="mb-3">
									<!-- <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
										<input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
										<div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
											<i class="fa" data-check-icon="&#xf00c"></i>
										</div>
										Subscribir al newsletter
									</label> -->
								</div>

								<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Registro</button>
							</form>
							<!-- End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Login & Signup -->
