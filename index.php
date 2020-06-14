<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <div class="container">
        <article class="page-content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-info">
                <?php the_time('j. F, Y'); ?> &bull; Od: <?php the_author(); ?> &bull; Kategorija:
                
                <?php 
                
                $categories = get_the_category();
                $output = '';

                if ($categories) {
                    foreach ($categories as $category) {
                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                    }

                    echo $output;
                }
                
                ?>
            </p>
            <?php the_content(); ?>
        </article>
    </div>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>