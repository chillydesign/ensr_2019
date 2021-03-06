<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php $tdu = get_template_directory_uri(); ?>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">


        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#0d2b88">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>
        <?php get_template_part('facebook_pixel'); ?>

    </head>
    <body <?php body_class(); ?>>



    <div id="top_nav">
        <div class="container">
        <div class="social_search">
            <?php get_template_part('searchform'); ?>
             <?php get_template_part('social_links'); ?>
             </div>
        <ul class="top_nav_ul">
                  <?php chilly_nav('top-navigation'); ?>
            </ul>
        </div>
    </div>

    <header>

        <div class="container">
            <nav>

                <a href="<?php echo home_url(); ?>" id="branding">ENSR</a>
               
                <ul id="primary_nav">
                    <div id="hide_lang_desktop"><?php chilly_nav('lang-navigation', ''); ?></div>
                    <?php chilly_nav('primary-navigation'); ?>
                    <div id="hide_lang_mobile"><?php chilly_nav('lang-navigation'); ?></div>
                </ul>
            
            </nav>
        </div>
        <a href="#" id="menu_button">Menu</a>
    </header>


    <main id="main">
