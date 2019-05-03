<?php get_header(); ?>



<?php $background_image  =  get_home_url () . '/wp-content/uploads/2018/12/traveller.jpg' ; ?>
<!-- article -->
<section id="post-404"  style="background-image: url(<?php echo $background_image;  ?>">

    <div class="container">
        <h1>404 - Vous êtes perdu?</h1>
        <p>
            La page que vous recherchez n'existe pas ou a été déplacée.
        </p>

        <h6><a href="<?php echo get_home_url();?>">Retour à l'accueil</a></h6>



    </section>
    <!-- /section -->


    <?php //get_sidebar(); ?>

    <?php get_footer(); ?>
