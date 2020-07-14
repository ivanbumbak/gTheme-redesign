<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gambi d.o.o. - local IT company
 */

get_header(); ?>

    <div class="container">
        <div class="wrapper-error404">
            <h1>404</h1>
            <i class="fas fa-unlink"></i>
            <p>Ups! Izgleda da smo zalutali. Nalazite se na pogrešnoj poveznici.</p>
            <a href="<?php echo home_url(); ?>"><i class="far fa-arrow-alt-circle-left"></i>Povratak na početnu stranicu.</a>
        </div>
    </div>

<?php get_footer(); ?>
