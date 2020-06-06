<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <!-- site-header -->
    <header class="site-header">
        <img src="https://via.placeholder.com/200x35" alt="Logo">

        <nav class="main-nav">
            <?php $args = array(
                'theme_location' => 'primary'
            ); ?>

            <?php wp_nav_menu($args); ?>
        </nav>
    </header>