<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href=" <?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="archive-product-info">
      <div class="after-title"></div>
        <?php the_title(); ?> 
        <div class="dots"></div>
          <p class="product-price"> </p>
		  <?php echo "<div>" . get_post_meta($post->ID, 'Price', true) . "</div>"; ?> 
        </div>
</article><!-- #post-## -->
