<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gambi d.o.o. - local IT company
 */

get_header(); ?>

    <div class="container error404">
        <div class="wrapper-error404">
            <div class="not-found-icon">
                <i class="fal fa-dizzy"></i><h1>404</h1>
            </div>
            <p id="not-found-heading">Stranica nije pronađena</p>
            <p id="not-found-text">Ups! Izgleda da smo zalutali. Nalazite se na pogrešnoj ili nepostojućoj poveznici.</p>
            <a href="<?php echo home_url(); ?>"><i class="fal fa-backward"></i>Povratak na početnu stranicu.</a>
        </div>
    </div>