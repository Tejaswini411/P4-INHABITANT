<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area archive-product-type">

<header class="shop-page-header">
	<h2>Shop Stuff</h2>
	<ul class ="product-type-list">
		<?php 
		$args = array(
			'taxonomy' => 'product_taxonomy',
			'hide_empty' => false, );
		 $terms = get_terms( $args );

		 foreach($terms as $term){
			echo '<div class="taxonomy-button-container">';
			
			echo '<a href="' . get_term_link( $term ) . '" class="taxonomy-button">' . $term->name . '</a>';
		echo '</div>';
		};
		  
		?>
	</ul>
	<?php ?>
</header> <!-- .shop-page-header -->
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'products' );
					
				?>
					
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
