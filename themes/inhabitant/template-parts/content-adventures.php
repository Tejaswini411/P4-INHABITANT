<div class="story-wrapper">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?>
            </a>
        <?php endif; ?>
        <div class="story-info">
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <a class="white-btn" href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>