<?php get_header(); ?>

<div class="content">
    <div class="hero">
        <div class="section-main">
            <p>Some hardcoding text goes here!</p>
        </div>
    </div>
</div>

<div class="section-news">
    <div class="content">
    <h1>Novosti</h1>

    <?php 
        // Recent News
        $news = new WP_Query('cat=1&post_per_page=2');
        
        if ($news -> have_posts()) :
            while ($news -> have_posts()) : $news -> the_post(); ?>

            <article class="recent-news">
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
                <p><?php the_excerpt(); ?></p>
            </article>

            <?php endwhile;
            
            else :
                echo '<p>No content found</p>';
            
            endif; 
            wp_reset_postdata(); 
    ?>
    </div>
</div>

<?php get_footer(); ?>