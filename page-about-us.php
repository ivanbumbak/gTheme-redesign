<?php

get_header(); ?>

<div class="portfolio">
    <div class="about-us-background">
    </div>

    <div class="about-us">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

            <article class="container page-content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>

            <?php endwhile;

        else :
            echo '<p>No content found</p>';

        endif; ?>
    </div>
</div>

<?php get_footer(); ?>