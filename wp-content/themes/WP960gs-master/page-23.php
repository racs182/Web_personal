<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_front_page() ) : ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php else : ?>
			<!-- titulo -->
			
			<!-- resumen -->
			
				<div class="grid12">
					<h1><?php the_title(); ?></h1>
					<div class="row">
						<div class="grid12">
							<div class="row">
								<div clas="grid4">
									<?php the_post_thumbnail("thumbnail");?>
								</div>
								<div class="row">
									<div class="grid8">
										<p><?php the_excerpt();?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			

			<!-- meta -->
			<?php the_time('F jS')?> | By 
			<?php the_author_posts_link()?> |
			<?php the_category(' | ');?>

		<?php endif; ?>
	</div><!-- #post-## -->


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
