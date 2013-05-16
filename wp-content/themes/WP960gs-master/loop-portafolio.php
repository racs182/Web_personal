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


<!-- Módulo Portafolio -->

<div class="row">
	<div class="grid12">
		<h2>Portafolio</h2>
			<div class="row">
				<div class="grid12">
					<h4>Recent project</h4>
						<div class="row">
							<!-- aqui -->
							<div class="box-proj grid3">
								<div>
									<a href="#">
										<img data-toggle="modal" data-target="#myModal" src="http://placehold.it/220x200" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div class="meta-proj">
										<h5><a href="#" data-toggle="modal" data-target="#myModal">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>
							<!-- aqui -->
							<div class="box-proj grid3">
								<div>
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div>
										<h5><a href="#">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>

							<div class="box-proj grid3">
								<div>
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div>
										<h5><a href="#">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>

							<div class="box-proj grid3">
								<div>
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div>
										<h5><a href="#">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
	</div>
</div>
<!-- Fin Módulo Portafolio -->


<!-- Modal 1 -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Modal header</h3>
	</div>
	<div class="modal-body">
		<img src="" alt="">
		<div class="grid8">
			<div class="row">
				<div class="grid4">
					<img class="img" src="http://placehold.it/250x300" alt=""></div>
				<div class="row">
					<div class="des-proj grid4">
						<h4>Titulo</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus, veniam, impedit reiciendis quas enim saepe nam molestias soluta autem ipsum maiores sapiente eaque atque quo velit eos sequi iste?
							orem ipsum dolor sit amet, consectetur adipisicing elit. Qui, inventore ducimus a.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">by lastname</div>
</div>
<!-- Fin Modal bootstrap -->
<hr>
<?php endwhile; endif; ?>
</div> <!-- Fin de la estructura Home -->

