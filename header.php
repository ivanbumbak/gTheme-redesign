<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="alexaVerifyID" content="XtfZVf-q78GnEI_taqRy4NABkq0"/>
		<meta name="google-site-verification" content="GiIU8RuEFeXKL8fxOJ96i2i27ck8tXl725Pw_vDg0Vc" />
		<meta name="keywords" content="gambi, gambi doo, gambi šibenik, šibenik, fiskalne blagajne, fiskalizacija, klimatizacija, klima uređaj, samsung, gree, rashladni sustavi, vrf sustavi, instalacije, servis računala, uredski materijal">
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="canonical" href="http://www.gambi.hr" /> 
		<link rel="alternate" href="http://www.gambi.hr/" hreflang="hr-hr" />
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous"> -->
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <!-- site-header -->
    <header class="<?php 
        if (is_front_page()) :
            echo 'home-header';
        elseif (is_404() || is_page('thank-you')) :
            echo 'respond-header';
        else : 
            echo 'page-header';
        endif; ?>">
        <div class="header-wrapper">
            <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php bloginfo('template_url'); ?>/img/header-logo.png" alt="Logo"></a>

            <nav class="main-nav">
                <?php $args = array(
                    'theme_location' => 'primary'
                ); ?>

                <?php wp_nav_menu($args); ?>
            </nav>
        </div>
    </header>