<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product">
		<div class="product__img">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>
		</div>
		<div class="product__content">
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p class="product__price">$<?php echo get_post_meta(get_the_ID(), 'price', true) ?>.00</p>
				<?php the_content(); ?>
				<div class="social">
					<button type="button" class="social__btn"><i class="fab fa-facebook-f"></i>Like</button>
					<button type="button" class="social__btn"><i class="fab fa-twitter"></i>Tweet</button>
					<button type="button" class="social__btn"><i class="fab fa-pinterest"></i>Pin</button>
				</div>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
