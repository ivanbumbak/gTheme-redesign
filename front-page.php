<?php get_header(); ?>

<div class="hero">
    <div class="section-main">
        <div class="hero-wrapper">
            <div class="first-row">
                <p id="fiskal">Fiskalne blagajne. Klimatizacija.<br>Uredska oprema.</p><br>
                <p id="vaga">Ovlašteni servis i prodaja mjerila mase, vage i utega.</p>
            </div>

            <div class="news">
                <!-- Recent News -->
                <h1>Novosti</h1>
                
                <?php $news = new WP_Query('cat=1&post_per_page=2');
        
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
                wp_reset_postdata(); ?>

                <a href="<?php echo home_url() ?>/category/news">Vidi više novosti...</a>

            </div>
        </div>
    </div>
    <div class="section-image"></div>
</div>

<?php get_footer(); ?>