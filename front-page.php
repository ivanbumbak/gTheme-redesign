<?php get_header(); ?>

<div class="hero">
    <div class="hero-wrapper">
        <div class="first-row">
            <p id="fiskal">Fiskalne blagajne. Klimatizacija.<br>Uredska oprema.</p><br>
            <p id="vaga">Ovlašteni servis i prodaja mjerila mase, vage i utega.</p>
        </div>
    </div>
</div>

<div class="section-news">
    <!-- Recent News -->
    <h1>Novosti</h1>
    
    <div class="articles">
        <?php $news = new WP_Query('cat=1&post_per_page=2');

        if ($news -> have_posts()) :
            while ($news -> have_posts()) : $news -> the_post(); ?>

                
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
                

            <?php endwhile;

        else :
            echo '<p>No content found</p>';

        endif; 
        wp_reset_postdata(); ?>
    </div>
</div>

<div class="section-nutshell">
    <div class="container">
        <div class="wrapper-nutshell">
            <div class="nutshell-third">
                <div class="nutshell-icon">
                    <i class="fas fa-user"></i>
                </div>
                <p>Gambi d.o.o. je privatna tvrtka osnovana 1991. godine. Osnovna djelatnost bila je prodaja mjerila mase i vaga i registar blagajni.
                S vremenom proširuje svoju djelatnost i danas izvodi instalacije rashladnih sistema, elektro i strojarskih instalacija, 
                te na informatički inženjering.</p>
                <a href="<?php the_permalink(13); ?>">Saznaj više</a>
            </div>

            <div class="nutshell-third">
                <div class="nutshell-icon">
                    <i class="fas fa-cog"></i>
                </div>
                <p>Prodaja, servis i montaža rashladnih sistema, elektro i strojarske instalacije. Servis, prodaja i baždaranje
                mjerila mase, vage i utega. Instalacija nadzornog sustava. Servis i prodaja informatičke opreme, projektiranje i instalacija računalnih mreža.</p>
                <a href="<?php the_permalink(3); ?>">Saznaj više</a>
            </div>

            <div class="nutshell-third">
                <div class="nutshell-icon">
                    <i class="fas fa-building"></i>
                </div>
                <p>Sjedište i servis tvrtke smješteno je u Bilicama, na adresi Novo Naselje 28 u neposrednoj blizini autokuće Mazda, pokraj biličkog spomenika. 
                U sklopu servisa uključena je i veleprodaja tvrtke.</p>
                <a href="<?php the_permalink(22); ?>">Saznaj više</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>