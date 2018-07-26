<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

			<!-- FAVICONS -->
	    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fav/10x10.png">
	    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fav/20x20.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fav/72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fav/114x114.png">
	    <link rel="icon" sizes="192x192" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fav/192x192.png">

	<!-- CSS -->
	    <!-- ADDONS -->
	    <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	    <!-- REVOSLIDER CSS SETTINGS -->
	    <!-- REVOLUTION STYLE SHEETS -->
	    <link href="<?php bloginfo('stylesheet_directory');?>/assets/revo-slider/css/settings.css" rel="stylesheet" type="text/css">
	    <!-- REVOLUTION NAVIGATION STYLES -->
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/revo-slider/css/navigation-skins/hermes-custom.css">
	    <!-- BOOTSTRAP -->
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
	    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/icons-fonts.css" >
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.min.css" >
	    <!-- IE Warning CSS -->
			<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/ie-warning.css" ><![endif]-->
			<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/ie8-fix.css" ><![endif]-->

	    <!-- Magnific popup, Owl Carousel Assets in style.css -->

	<!-- CSS end -->

	<!-- JS begin some js files in bottom of file-->

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'harris-disability' ); ?></a>


	<!-- LOADER -->
	<div id="loader-overflow">
		<div id="loader3" class="loader-cont">Please enable JS</div>
	</div>

	<div id="wrap" class="boxed ">
		<div class="grey-bg"> <!-- Grey BG  -->

			<!--[if lte IE 8]>
			<div id="ie-container">
				<div id="ie-cont-close">
					<a href="#" onclick="javascript&#058;this.parentNode.parentNode.style.display="none"; return false;"><img src="assets/images/ie-warn/ie-warning-close.jpg" style="border: none;" alt="Close"></a>
				</div>
				<div id="ie-cont-content" >
					<div id="ie-cont-warning">
						<img src="assets/images/ie-warn/ie-warning.jpg" alt="Warning!">
					</div>
					<div id="ie-cont-text" >
						<div id="ie-text-bold">
							You are using an outdated browser
						</div>
						<div id="ie-text">
							For a better experience using this site, please upgrade to a modern web browser.
						</div>
					</div>
					<div id="ie-cont-brows" >
						<a href="http://www.firefox.com" target="_blank"><img src="assets/images/ie-warn/ie-warning-firefox.jpg" alt="Download Firefox"></a>
						<a href="http://www.opera.com/download/" target="_blank"><img src="assets/images/ie-warn/ie-warning-opera.jpg" alt="Download Opera"></a>
						<a href="http://www.apple.com/safari/download/" target="_blank"><img src="assets/images/ie-warn/ie-warning-safari.jpg" alt="Download Safari"></a>
						<a href="http://www.google.com/chrome" target="_blank"><img src="assets/images/ie-warn/ie-warning-chrome.jpg" alt="Download Google Chrome"></a>
					</div>
				</div>
			</div>
			<![endif]-->

			<!-- HEADER TOP BAR FONT BLACK NO TRANSPARENT NO MOBILE TRANSPARENT -->
			<header id="nav" class="header header-1 no-transparent mobile-no-transparent">

				<!-- TOP BAR -->
				<div class="top-bar">
					<div class="padding-lr-15p container-m-30 clearfix">

						<!-- LEFT SECTION -->
						<ul class="social top-bar-section left display-xxs-no">
							<?php $social = new WP_Query(array('post_type'=>'social_medias', 'post_per_page'=>'3', 'category_name'=>'Social Media','order'=>'ASC')); if($social->have_posts()):while($social->have_posts()):$social->the_post(); ?>
							<li><a href="<?php the_field('sm_link'); ?>" title="<?php the_title(); ?>"><i class="fab <?php the_field('sm_ico') ?>"></i></a></li>
						<?php endwhile; endif; wp_reset_query(); ?>

						</ul>

						<!-- RIGHT SECTION -->
						<ul class="top-bar-section right">
							<?php $social = new WP_Query(array('post_type'=>'social_medias', 'post_per_page'=>'2', 'category_name'=>'Contacts','order'=>'ASC')); if($social->have_posts()):while($social->have_posts()):$social->the_post(); ?>

							<li class="<?php the_field('class'); ?>"><a href="<?php the_field('sm_link'); ?>" title="Phone"><i class="<?php the_field('sm_ico'); ?> mr-7"></i><?php the_title(); ?></a></li>
						<?php endwhile; endif; wp_reset_query(); ?>

						</ul>

					</div>
				</div>

				<div class="header-wrapper">
				<div class="padding-lr-15p container-m-30 clearfix">
					<div class="logo-row">

					<!-- LOGO -->
					<div class="logo-container-2">
							<div class="logo-2">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="clearfix">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/top-logo-200.png" class="logo-img" alt="Logo">
								</a>
							</div>
						</div>
					<!-- BUTTON -->
					<div class="menu-btn-respons-container">
						<button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
							<span aria-hidden="true" class="fas fa-bars"></span>
						</button>
					</div>
				 </div>
				</div>

				<!-- MAIN MENU CONTAINER -->
				<div class="main-menu-container">

						<div class="padding-r-12p container-m-30 clearfix">

							<!-- MAIN MENU -->
							<div id="main-menu" >
								<div class="navbar navbar-default" role="navigation">

									<!-- MAIN MENU LIST -->
									<nav class="collapse collapsing navbar-collapse right-1024">
										<?php
										$walker = new myNavWalker;
										$args = array(
											'theme_location'=>'menu-1',
											'container'=>'div',
											'container_class'=>'',
											'menu_class'=>'nav navbar-nav',
											'depth'=>2,
											'walker'=>$walker
										);

										wp_nav_menu($args);
										?>


									</nav>

								</div>
							</div>
							<!-- END main-menu -->

						</div>
						<!-- END container-m-30 -->
				</div>
				<!-- END main-menu-container -->

				<!-- SEARCH READ DOCUMENTATION -->
				<ul class="padding-r-10p cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
				</ul> <!-- cd-header-buttons -->
				<div id="cd-search" class="cd-search">
					<form class="form-search" id="searchForm" action="<?php echo home_url('/'); ?>" method="get">
						<input type="text" value="<?php echo get_search_query() ?>" name="s" id="q" placeholder="Search...">
					</form>
				</div>

				</div>
				<!-- END header-wrapper -->

			</header>
