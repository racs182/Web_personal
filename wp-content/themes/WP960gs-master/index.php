<?php get_header(); ?>

		<div class="row">
			<div id="main" class="grid12">

			<?php get_template_part( 'loop-profile', 'index' );	?>
			<?php get_template_part( 'loop-portafolio','index' );	?>
			<?php get_template_part( 'loop-blog','index' );	?>
			<?php get_template_part( 'loop-contacto','index' );	?>
			<?php get_template_part( 'loop-huella','index' );	?>

			</div><!-- #main -->

			<!-- <div id="sidebar" class="grid4">

				<?php get_sidebar(); ?>

			</div> <!-- #sidebar  -->
		</div><!-- .row -->

<?php get_footer(); ?>
