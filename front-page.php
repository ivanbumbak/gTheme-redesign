<?php get_header(); ?>

<div class="container">
    <div class="hero">
        <div class="section-main">
            <p>Some hardcoding text goes here!</p>
        </div>
    </div>
</div>

<div class="section-news">
    <h1>Novosti</h1>

    <?php 
        // Recent News
        $news = new WP_Query('cat=1&post_per_page=2');
        
        if ($news -> have_posts()) :
            while ($news -> have_posts()) : $news -> the_post(); ?>

            <div class="container">
                <article class="recent-post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-info">
                    <?php the_time('j. F, Y'); ?> &bull; <?php the_author(); ?> &bull;
                    
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
                    <p><?php the_excerpt(); ?></p>
                </article>
            </div>

            <?php endwhile;
            
            else :
                echo '<p>No content found</p>';
            
            endif; 
            wp_reset_postdata(); 
    ?>
    
</div>

<?php get_footer(); ?>