<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/bootstrap/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/icomoon1747/style.css" type="text/css">
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header" class="container">
		<div id="masthead" class="row">
			<div id="branding" role="banner" class="grid12">
				<div class="row">
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					<<?php echo $heading_tag; ?> id="site-title">
							<div class="grid6">
										<div class="row">
											<!-- Logo del site  -->
											<div class="grid3">
													<img class="img-circle site-logo" src="http://placehold.it/160x160" alt="">
											</div>
											<!-- Descripcion del site  -->
											<div id="site-description" class="grid3">
													<h3><?php bloginfo( 'description' ); ?></h3>
											</div>
									</div>
							</div>
					</<?php echo $heading_tag; ?>>

					<!-- Menu in Header access -->
						<div class="icons-box-head grid6 right">
							<!-- iconos redes -->
									<a href="#"><i class="icons-head">g</i></a>
									<a href="#"><i class="icons-head"></i></a>
									<a href="#"><i class="icons-head">h</i></a>
									<a href="#"><i class="icons-head"></i></a>
									
									
						</div>
							<div id="access" rol="navigation" class="grid6 right">
									<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
							</div> 
				</div><!--#branding -->
					<!-- Cita	 -->
					<div class="row">
						<div class="grid12">
							<div class="cita">
								<div id="div-line"></div>
									<h4>
										<i class="icons-cita"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit sapiente.- Peter Perez<i class="icons-cita"></i></h4>
								<div id="div-line"></div>
							</div>
						</div>
					</div><!-- Fin citas header -->


			<!-- </div>#branding -->
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="content" class="container">
