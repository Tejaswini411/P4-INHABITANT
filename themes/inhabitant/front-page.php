<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="home-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
        </section>
        <div class="content-wrapper">
            <section class="home__products">
                <h2>Shop Stuff</h2>
                <div class="home__productsWrapper">
                    <div class="home__productsType">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/do.svg" alt="Do">
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>/product/do/" class="btn">Do Stuff</a></p>
                    </div>
                    <div class="home__productsType">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/eat.svg" alt="Eat">
                        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>/product/eat/" class="btn">Eat Stuff</a></p>
                    </div>
                    <div class="home__productsType">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/sleep.svg" alt="Sleep">
                        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>/product/sleep/" class="btn">Sleep Stuff</a></p>
                    </div>
                    <div class="home__productsType">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/wear.svg" alt="Wear">
                        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>/product/wear/" class="btn">Wear Stuff</a></p>
                    </div>
                </div>
            </section><!-- home__products -->

            <section class="home__journals">
                <h2>Inhabitent Journal</h2>
                <ul>
                    <?php query_posts('posts_per_page=3'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <div class="home__journalsThumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="home__journalsInfo">
                                <?php if ('post' === get_post_type()) : ?>
                                    <div class="entry-meta">
                                        <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                    </div><!-- .entry-meta -->
                                <?php endif; ?>
                                <?php the_title(sprintf('<a href="%s" rel="bookmark"><h3 class="entry-title">', esc_url(get_permalink())), '</h3></a>'); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read entry</a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </section><!-- home__journals -->

            <section class="home__adventures">
                <h2>Latest Adventures</h2>
                <?php
                $args = array(
                    'post_type' => 'adventures',
                    'posts_per_page' => 4,
                ); ?>

                <?php $my_query = new WP_Query($args); ?>

                <ul>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li>
                            <?php
                            get_template_part('template-parts/content', 'adventures');
                            ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <a href="<?php echo esc_url(home_url('/')); ?>/adventures" class="btn">More Adventures</a>
            </section>
        </div>
</div><!-- content-wrapper -->
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
