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
							<div class="box-proj grid3">
								<div class="post-proj">
									<a href="#">
										<img class="img-polaroid" data-toggle="modal" data-target="#myModal" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div class="meta-proj">
										<h5><a href="#" data-toggle="modal" data-target="#myModal">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>
							<div class="box-proj grid3">
								<div class="post-proj">
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div class="meta-proj">
										<h5><a href="#">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>

							<div class="box-proj grid3">
								<div class="post-proj">
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div class="meta-proj">
										<h5><a href="#">Titulo aquí
											<span id="badge-proj" class="badge">+</span></a></h5>
									</div>
								</div>
							</div>

							<div class="box-proj grid3">
								<div class="post-proj">
									<a href="#">
										<img class="img-polaroid" src="http://placehold.it/200x180" alt=""> </a>
								</div>
								<div class="box-meta grid3">
									<div class="meta-proj">
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
<!-- Fin Módulo Portafolio-->
<!-- Modal bootstrap -->
<!-- Button to trigger modal -->
<!-- <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a> -->
 
<!-- Modal -->
<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Modal header</h3>
	</div>
	<div class="modal-body">
		<img src="" alt="">
		<div class="grid8">
			<div class="row">
				<div class="grid4">
					<img class="img" src="http://placehold.it/200x300" alt=""></div>
				<div class="row">
					<div class="des-proj grid4">
						<p>
							One fine body… Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus, veniam, impedit reiciendis quas enim saepe nam molestias soluta autem ipsum maiores sapiente eaque atque quo velit eos sequi iste?
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">by lastname</div>
</div> -->
<!-- Fin Modal bootstrap -->


<hr>

<!-- PRUEBA DE CODROPS -->
<!-- <div class="row">
	<div class="grid12">
		<h2>Portafolio</h2>
		<div class="row">
			<div class="grid12">
				<h4>Recent project</h4>
				<div class="row">
					<div class="box-proj grid3">ss
						<ul id="og-grid" class="og-grid">
							<li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="http://placehold.it/250x250" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
									<img src="images/thumbs/1.jpg" alt="img01"/>
								</a>
							</li>
							<li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="http://placehold.it/250x250" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
									<img src="images/thumbs/2.jpg" alt="img02"/>
								</a>
							</li> -->
	<!-- Markup -->
							<!-- <li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="http://placehold.it/400x400" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
									<img data-largesrc="http://placehold.it/400x400" alt="img02"/>							
								</a>

								<div class="og-expander">
									<div class="og-expander-inner">
										<span class="og-close"></span>
										<div class="og-fullimg">
											<div class="og-loading"></div>
											<img src="images/2.jpg"></div>
										<div class="og-details">
											<h3>Veggies sunt bona vobis</h3>
											<p>
												Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.
											</p>
											<a href="http://cargocollective.com/jaimemartinez/">Visit website</a>
										</div>
									</div>
								</div>

							</li>
						</ul>
					</div>ss
				</div>
			</div>
		</div>
	</div>
</div> -->



<?php endwhile; endif; ?>
</div> <!-- Fin de la estructura Home -->

