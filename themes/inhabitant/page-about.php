<div class="about-page-container about-page-header">
	<?php
	/**
	 * The template for displaying all pages.
	 *
	 * @package RED_Starter_Theme
	 */

	get_header(); ?>
	</div>
<div class="about-container">
		<div id="primary" class="content-area about">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'about' ); ?>
				
					
					<?php endwhile; // End of the loop. ?>



			</main><!-- #main -->
		</div><!-- #primary -->
</div>

<?php get_footer(); ?>