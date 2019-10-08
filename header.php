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

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>



    <div id="top_nav">
        <div class="container">
             <?php get_template_part('social_links'); ?>
        <ul class="top_nav_ul">
                  <?php chilly_nav('top-navigation'); ?>
            </ul>
        </div>
    </div>

    <header>

        <div class="container">
            <nav>

                <a href="<?php echo home_url(); ?>" id="branding">ENSR</a>
                <ul>
                    <?php chilly_nav('primary-navigation'); ?>
                </ul>
            </nav>
        </div>
        <a href="#" id="menu_button">Menu</a>
    </header>


    <main id="main">
