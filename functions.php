<?php

function gTheme_resources() {
    //Custom CSS
    wp_enqueue_style('style', get_stylesheet_uri());

    //Custom JS
    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );    
    wp_enqueue_script('script');
    
    //Icon Kits JS
    wp_register_script( 'icons', get_template_directory_uri() . '/js/icon-kits.js', array( 'jquery' ) );    
    wp_enqueue_script('icons');
}
add_action('wp_enqueue_scripts', 'gTheme_resources');

//Theme Setup
function gTheme_setup() {
    //Navigation menus
    register_nav_menus(array(
        'primary' => __('Main Menu'),
    ));

}
add_action('after_setup_theme', 'gTheme_setup');

//Thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(500, 500);
 
    add_image_size('category-thumb', 384, 170);
 }

?>