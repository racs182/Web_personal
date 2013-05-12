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

<!-- Citas header -->
<div class="grid12">
	<div class="cita">
		<hr>
			<h4>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, molestiae dolorum"</h4>
		<hr>
	</div><!-- Fin citas header -->

<?php if (have_posts()): while ( have_posts() ) : the_post(); ?>


<!-- Módulo Profile -->
<div class="row">
	<div class="grid12">
		<h2>Perfil</h2>
			<div class="row">	
				<div class="grid6">
					<h4>About me</h4>
						<div class="row">
							<div class="grid2">
								<img src="http://placehold.it/80x80" alt="">
							</div>
							<div class="grid4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, repellat porro repudiandae laboriosam  Consectetur!</p>
							</div>
						</div>
						<div class="row">
							<div class="grid2">
								<img src="http://placehold.it/80x80" alt="">
							</div>
							<div class="grid4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, repellat porro repudiandae laboriosam  Consectetur!</p>
							</div>
						</div>
				</div>
				<div class="grid6">		
					<h4>My jobs</h4>
						<img src="http://placehold.it/60x60" alt=""> 
						<img src="http://placehold.it/60x60" alt=""> 
						<img src="http://placehold.it/60x60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, rem, ullam deleniti officia ad impedit dolores explicabo perspiciatis est obcaecati consequuntur suscipit minima vitae porro quia vero ab aliquam dolore.</p>
				</div>
			</div>
	</div>
</div><!-- Fin Módulo Profile -->




<!-- Módulo Portafolio -->
<div class="row">
	<div class="grid12">
		<h2>Portafolio</h2>
			<div class="row">
				<div class="grid12">
					<h4>Recent project</h4>
						<div class="row">
							<div class="grid3">
									<h6>Titulo</h6>
									<img src="http://placehold.it/200x180" alt="">
							</div>
							<div class="grid3">
								<h6>Titulo</h6>
									<img src="http://placehold.it/200x180" alt="">
							</div>
							<div class="grid3">
								<h6>Titulo</h6>
									<img src="http://placehold.it/200x180" alt="">
							</div>
							<div class="grid3">
								<h6>Titulo</h6>
									<img src="http://placehold.it/200x180" alt="">
							</div>
						</div>
				</div>
			</div>
	</div>
</div><!-- Fin Módulo Portafolio -->



<!-- Módulo Blog -->
<div class="row">
	<div class="grid12">
		<h2>Blog</h2>
			<div class="row">
				<div class="grid12">
					<h4>Lastest Post</h4>
						<div class="row">
							<div class="grid4">
									<h6>Titulo</h6>
										<img src="http://placehold.it/300x250" alt="">
							</div>
							<div class="grid4">
								<h6>Titulo</h6>
									<img src="http://placehold.it/300x250" alt="">
							</div>
							<div class="grid4">
								<h6>Titulo</h6>
									<img src="http://placehold.it/300x250" alt="">
							</div>
					</div>
				</div>
			</div>
		</div>
</div><!-- Módulo Blog -->




<!-- Módulo Contacto -->
<div class="row">
	<div class="grid12">
		<h2>Contacto</h2>
			<div class="row">
					<div class="grid6">
						<h4>Ubicacion</h4>
							<img src="http://placehold.it/420x250" alt="">
					</div>
					<div class="grid6">
						<h4>Form</h4>
							<img src="http://placehold.it/420x250" alt="">
					</div>
				</div>
			</div>
		</div><!-- Fin Módulo Blog -->





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
						<img src="http://placehold.it/300x250" alt="">
				</div>
			</div>
		</div>
	</div>



<!-- Pie de Página -->
<footer>
	<hr>
	<h6>Develop by Last Name</h6>
</footer><!-- Fin pie de Página -->



<?php endwhile; endif; ?>
</div> <!-- Fin de la estructura Home -->

