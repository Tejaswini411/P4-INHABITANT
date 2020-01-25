<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<article class="one-product container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-img">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
				<div class="product-desc">
					<h1><?php the_title(); ?></h1>
					<div class="dots"></div>
					<h2><?php echo "<div>" . get_post_meta($post->ID, 'Price', true) . "</div>"; ?></h2>
					<?php the_content(); ?>
					<div class="social-wrap">
						<button type="button" class="black-btn"><i class="fab fa-facebook" aria-hidden="true"></i> Like </button>
						<button type="button" class="black-btn"><i class="fab fa-twitter" aria-hidden="true"></i> Tweet </button>
						<button type="button" class="black-btn"><i class="fab fa-pinterest" aria-hidden="true"></i> Pin </button>
					</div><!--.social-wrap-->
				</div><!--.product-desc-->
			<?php endwhile; // End of the loop. ?>
		</article><!--.container-->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
