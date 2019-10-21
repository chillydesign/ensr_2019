<?php get_header(); ?>

<div class="slick_slider_no_dots">

  <div class="slide">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-push-3" style="text-align: center">

          <div class="welcome_text_inner">
            <h1>404 - Vous êtes perdu?</h1>
            <p>
                La page que vous recherchez n'existe pas ou a été déplacée.
            </p>

            <h6><a href="<?php echo get_home_url();?>">Retour à l'accueil</a></h6>
          </div>

        </div>

      </div>
    </div>
    <div class="background_image" style="background-image:url('<?php get_home_url () . '/wp-content/uploads/2019/07/buildings_1.jpg' ; ?>')"></div>

  </div>
</div>
<!-- end slick_slider_no_dots -->



    <?php //get_sidebar(); ?>

    <?php get_footer(); ?>
