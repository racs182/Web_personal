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


<!-- Módulo Contacto -->
<div class="row">
	<div class="grid12">
		<h2>Contacto</h2>
			<div class="row">
					<div class="grid6">
						<h4>Ubicacion</h4>
								<iframe width="400" height="230" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ve/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Caracas,+Venezuela&amp;aq=&amp;sll=10.468305,-66.879508&amp;sspn=0.196826,0.220757&amp;ie=UTF8&amp;hq=&amp;hnear=Municipio+Libertador+de+Caracas,+Distrito+Metropolitano+de+Caracas&amp;t=m&amp;ll=10.487812,-66.906738&amp;spn=4.320126,7.668457&amp;z=6&amp;iwloc=A&amp;output=embed"></iframe>
					</div>
					<div class="grid6">
						<h4>Form</h4>
						<div class="formulario">
							<form action="#" autocomplete="on">
								<fieldset>
									<input type="text" name="nombre" placeholder="Nombre" required></br>
								<input type="text" name="email" placeholder="Email" required></br>
							<textarea name="mensaje" id="" cols="60" rows="5" placeholder="Mensaje" required></textarea></br>
						<button type="submit" class="btn enviar-btn">Enviar</button>
					</fieldset>
					</form>
					</div>
					</div>
				</div>
			</div>
		</div><!-- Fin Módulo Blog -->

<hr>

<?php endwhile; endif; ?>
</div> <!-- Fin de la estructura Home -->

