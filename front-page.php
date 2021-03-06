<?php get_header(); ?>

<div class="hero">
    <div class="hero-wrapper">
    </div>
</div>

<!-- Recent News Section -->
<div class="section-news">
    <h1>Novosti</h1>
    
    <div class="articles">
        <?php $news = new WP_Query('cat=1&post_per_page=2');

        if ($news -> have_posts()) :
            while ($news -> have_posts()) : $news -> the_post(); ?>

                    <article class="recent-post">
                        <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('recent-post-thumb');
                        } ?> 
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-info">
                        <?php the_time('j. F, Y'); ?> &bull; <?php the_author(); ?>
                        
                        <?php 
                        
                        /* $categories = get_the_category();
                        $output = '';

                        if ($categories) {
                            foreach ($categories as $category) {
                                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                            }

                            echo $output;
                        } */
                        
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

<!-- Section Services -->
<div class="section-service">
    <div class="container">
        <div class="wrapper-service">
            <div class="service">
                <i class="fal fa-laptop-medical"></i>
                <h1>Servis računala</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Saznaj više</a>
            </div>

            <div class="service">
                <i class="fal fa-air-conditioner"></i>
                <h1>Klimatizacija</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Saznaj više</a>
            </div>

            <div class="service">
                <i class="fal fa-cash-register"></i>
                <h1>Fiskalne blagajne</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Saznaj više</a>
            </div>

            <div class="service">
                <i class="fal fa-balance-scale"></i>
                <h1>Servis vaga</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Saznaj više</a>
            </div>

            <div class="service">
                <i class="fal fa-print"></i>
                <h1>Uredski materijal</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Saznaj više</a>
            </div>
        </div>
    </div>
</div>

<!-- Section Nutshell -->
<div class="section-nutshell">
    <div class="container">
        <div class="wrapper-nutshell">
            <div class="nutshell-third">
                <h4>Tko smo?</h4>
                <div class="nutshell-icon">
                    <i class="fal fa-user"></i>
                </div>
                <p>Gambi d.o.o. je privatna tvrtka osnovana 1991. godine. Osnovna djelatnost bila je prodaja mjerila mase i vaga i registar blagajni.
                S vremenom proširuje svoju djelatnost i danas izvodi instalacije rashladnih sistema, elektro i strojarskih instalacija, 
                te na informatički inženjering.</p>
                <a href="<?php the_permalink(13); ?>">Saznaj više</a>
            </div>

            <div class="nutshell-third">
                <h4>Što radimo?</h4>
                <div class="nutshell-icon">
                    <i class="fal fa-cog"></i>
                </div>
                <p>Prodaja, servis i montaža rashladnih sistema, elektro i strojarske instalacije. Servis, prodaja i baždaranje
                mjerila mase, vage i utega. Instalacija nadzornog sustava. Servis i prodaja informatičke opreme, projektiranje i instalacija računalnih mreža.</p>
                <a href="<?php the_permalink(3); ?>">Saznaj više</a>
            </div>

            <div class="nutshell-third">
                <h4>Gdje smo?</h4>
                <div class="nutshell-icon">
                    <i class="fal fa-building"></i>
                </div>
                <p>Sjedište i servis tvrtke smješteno je u Bilicama, na adresi Novo Naselje 28 u neposrednoj blizini autokuće Mazda, pokraj biličkog spomenika. 
                U sklopu servisa uključena je i veleprodaja tvrtke.</p>
                <a href="<?php the_permalink(22); ?>">Saznaj više</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>