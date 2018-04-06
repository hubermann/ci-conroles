<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>10en8 | Algo mas..</title>

	<!-- Required Meta Tags Always Come First -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('public_folder/frontend/favicon.ico'); ?>">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/bootstrap/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/icon-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/icon-hs/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/dzsparallaxer/dzsparallaxer.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/dzsparallaxer/dzsscroller/scroller.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/dzsparallaxer/advancedscroller/plugin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/hs-bg-video/hs-bg-video.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/fancybox/jquery.fancybox.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/hs-megamenu/src/hs.megamenu.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/vendor/hamburgers/hamburgers.min.css'); ?>">


	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/font-awesome/fontawesome-all.min.css'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS Unify -->
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/css/unify-core.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/css/unify-components.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/css/unify-globals.css'); ?>">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url('public_folder/frontend/assets/css/custom.css'); ?>">

</head>

<body>
	<main>
	<?php include_once('frontend/header.php'); ?>

	<?php include_once('frontend/notificaciones.php'); ?>

	<?php (isset($content)) ? $this->load->view($content) : $this->load->view('frontend/inicio'); ?>

	<?php #include_once('frontend/profile-settings.php'); ?>

	<?php include_once('frontend/footer.php'); ?>

	<?php include_once('frontend/link_to_up.php'); ?>

	</main>

	<div class="u-outer-spaces-helper"></div>

	<!-- JS Global Compulsory -->
	<script  src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('public_folder/frontend/assets/vendor/jquery/jquery-3.2.1.js');?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/vendor/jquery.easing/js/jquery.easing.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/vendor/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/vendor/bootstrap/bootstrap.min.js') ?>"></script>

	<!-- JS Implementing Plugins -->
	<script src="<?php echo base_url('public_folder/frontend/assets/vendor/hs-megamenu/src/hs.megamenu.js') ?>"></script>

	<!-- JS Unify -->
	<script src="<?php echo base_url('public_folder/frontend/assets/js/hs.core.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/js/components/hs.header.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/js/helpers/hs.hamburgers.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/js/components/hs.tabs.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/js/components/hs.go-to.js') ?>"></script>
	<script src="<?php echo base_url('public_folder/frontend/assets/js/helpers/hs.focus-state.js') ?>"></script>

	<!-- JS Customization -->
	<script src="<?php echo base_url('public_folder/frontend/assets/js/custom.js') ?>"></script>

	<!-- JS Plugins Init. -->
	<script>
		$(document).on('ready', function () {
				// initialization of tabs
				$.HSCore.components.HSTabs.init('[role="tablist"]');

				// initialization of go to
				$.HSCore.components.HSGoTo.init('.js-go-to');

				// Form Focus State
				$.HSCore.helpers.HSFocusState.init();
			});

			$(window).on('load', function () {
				// initialization of header
				$.HSCore.components.HSHeader.init($('#js-header'));
				$.HSCore.helpers.HSHamburgers.init('.hamburger');

				// initialization of HSMegaMenu component
				$('.js-mega-menu').HSMegaMenu({
					event: 'hover',
					pageContainer: $('.container'),
					breakpoint: 991
				});
			});

			$(window).on('resize', function () {
				setTimeout(function () {
					$.HSCore.components.HSTabs.init('[role="tablist"]');
				}, 200);
			});
	</script>



</body>
</html>
