<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<!-- Definicion de Estructura Home -->
<div class="grid12">
	

<?php if (have_posts()): while ( have_posts() ) : the_post(); ?>


<!-- Módulo huella digital -->
<div class="row">
	<div class="grid12">
		<h2>Redes</h2>
			<div class="row">
				<div class="grid4">
					<h4>Github Repository</h4>
						<img src="http://placehold.it/300x250" alt="">
				</div>	
				<div class="grid4">
					<h4>Twitter @nickname</h4>
						<img src="http://placehold.it/300x250" alt="">
				</div>
				<div class="grid4">
					<h4>Social Network</h4>
					<div class="box-huella">
						

						<div class="icons-box-footer">
							<a href="#"><i class="icons-footer">g</i></a>
							<a href="#"><i class="icons-footer"></i></a>
							<a href="#"><i class="icons-footer">h</i></a>
							<a href="#"><i class="icons-footer"></i></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div><!-- Fin módulo huella digital -->




<?php endwhile; endif; ?>
</div> <!-- Fin de la estructura Home -->

