<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php $tdu = get_template_directory_uri(); ?>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $tdu; ?>/img/bullet.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $tdu; ?>/img/bullet.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $tdu; ?>/img/bullet.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $tdu; ?>/img/favicon/safari-pinned-tab.svg" color="#00476e">
        <meta name="msapplication-TileColor" content="#5bc0d5">
        <meta name="theme-color" content="#5bc0d5">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:500,700" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.2&appId=2220617461487737';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>



        <header class="header" id="header">
            <!-- <div class="container"></div> -->
            <a href="<?php echo home_url(); ?>" class="branding"><?php bloginfo('name'); ?></a>
            <div id="menu_items">
            <a href="mailto:info@e-travel.ch" id="email_button" >Email</a>
            <a href="#" id="phone_button" >Phone</a>
            <a href="#" id="menu_button" >Menu</a>
            </div>
            <div id="phone_header">
              <p>voyages d'affaires : +41 (0)22 929 8 929<br>tourisme : +41 (0)22 707 73 10</p>
            </div>
        </header>

        <nav id="navigation_menu" role="navigation">
          <ul>
            <?php chilly_nav('primary-navigation'); ?>
            </ul>
        </nav>

    <div id="rest_of_page">
