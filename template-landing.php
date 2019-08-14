<?php /* Template Name: Landing Page */ get_header(); ?>
<?php $home_url =  home_url(); ?>
<?php $tdu = get_template_directory_uri(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <section class="section section_welcome section_landing_welcome" style="position:relative;">



              <?php $welcome_slider = get_field('welcome_slider'); ?>
              <?php if ($welcome_slider) : ?>
                <div class="slick_slider_no_dots">
                  <?php foreach ($welcome_slider as $slide) : ?>

                  <?php $image = ($slide['image']['sizes']['large']); ?>
                  <div class="slide">
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-6">
                                  <?php $welcome_text = $slide['text']; ?>
                                  <?php if ($welcome_text): ?>
                                      <div class="welcome_text_inner">
                                          <?php echo $welcome_text; ?>
                                      </div>
                                  <?php endif;  // end if $welcome_text?>
                              </div>
                          </div>
                    </div>
                    <div class="background_image" style="background-image:url('<?php echo $image;  ?>')"></div>

                  </div>

                  <?php endforeach; ?>
            </div> <!-- end slick_slider_no_dots -->
              <?php else :?>
                <div class="background_image" style="background-image:url('<?php echo $tdu;  ?>/images/buildings_1.jpg')"></div>
              <?php endif; ?>

              <div style="position: absolute; top: 100px; width: 100%;">
                <div class="container">
                <div class="row">
                <div class="col-sm-6 col-sm-push-6">
                  <div class="landingform"><?php the_field('form'); ?></div>
                </div>
                </div>
                </div>

        </section>


            <?php include('section-loop.php'); ?>


        </article>
        <!-- /article -->




    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article class="container">

        <h2><?php _e('Sorry, nothing to display.', 'webfactor'); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>




<?php get_footer(); ?>
