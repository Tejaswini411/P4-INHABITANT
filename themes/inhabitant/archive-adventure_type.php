<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area adventures content-wrapper">
    <main id="main" class="site-main" role="main">


        <?php if (have_posts()) : ?>
            <header class="adventures__header">
                <h1 class="adventures__title">Latest Adventures</h1>
            </header>
            <div class="adventures__grid">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="adventures__item">
                        <?php
                        get_template_part('template-parts/content', 'adventures');
                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
