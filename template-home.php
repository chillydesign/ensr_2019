<?php /* Template Name: Home Page */ get_header(); ?>
<?php $home_url =  home_url(); ?>
<?php $tdu = get_template_directory_uri(); ?>


<?php if (isset($_GET['your-email'])) : ?>
  <div class="message message_success closable">
    <p>
<?php echo translateString("Merci pour votre message. Nous revenons vers vous rapidement avec plus d'information sur notre école."); ?>
</p>
</div>
<?php endif; ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <section class="section section_welcome">



              <?php $welcome_slider = get_field('welcome_slider'); ?>
              <?php if ($welcome_slider) : ?>
                <div class="slick_slider_no_dots">
                  <?php foreach ($welcome_slider as $slide) : ?>

                  <?php $image = ($slide['image']['sizes']['large']); ?>
                  <div class="slide">
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-6 col-sm-push-6 homebottomalign">
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


                <ul class="quick_links">
                <?php if (site_language() == 'en') : ?>
                    <li><a class="scroll_link" href="#section_l_ensr">ENSR</a></li>
                    <li><a class="scroll_link" href="#section_nos_services">Our Services</a></li>
                    <li><a class="scroll_link" href="#section_nos_atouts">Our Strengths</a></li>
                    <li><a class="scroll_link" href="#section_actualites">News</a></li>
                    <li><a class="scroll_link" href="#section_s_inscrire">Apply</a></li>
                    <?php else : ?>
                    <li><a class="scroll_link" href="#section_l_ensr">L'Ensr</a></li>
                    <li><a class="scroll_link" href="#section_nos_services">Nos Services</a></li>
                    <li><a class="scroll_link" href="#section_nos_atouts">Nos Atouts</a></li>
                    <li><a class="scroll_link" href="#section_actualites">Actualités</a></li>
                    <li><a class="scroll_link" href="#section_s_inscrire">S'Inscrire</a></li>
                    <?php endif; ?>
                </ul>





        </section>



        <section class="section section_school_sections">

            <div class="container" id="section_l_ensr">
                <div class="row">
                    <div class="col-sm-6">
                        <?php $school_text = get_field('school_text'); ?>
                        <?php if ($school_text): ?>
                            <?php echo $school_text; ?>
                        <?php endif;  // end if $school_text?>

                    </div>
                    <div class="col-sm-6">



                        <div class="school_areas_container" style="position:relative;">
                          <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/60137322?color=000000&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> -->
                          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                          <div class='embed-container'><iframe id="ytplayer" type="text/html"
src="https://www.youtube.com/embed/bmQYywa3JAM?loop=1&modestbranding=1"
frameborder="0" allowfullscreen> </iframe> </div>


                            <!-- <div class="shield_background"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <section class="section section_icons">
            <div class="container" id="section_nos_services">
            <?php $suffix =  ( site_language() == 'en' ) ? '_en' :  '' ;  ?>
              <ul>
                  <li class="ramassage_scolaire">
                      <a href="<?php echo $home_url; ?>/infos-pratiques/le-bus-scolaire"><img src="<?php echo $tdu; ?>/images/icon_bus<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Ramassage scolaire'); ?></span></a>
                  </li>
                  <li class="restauration_de_qualite">
                      <a href="<?php echo get_link_by_slug('restaurant'); ?>"><img src="<?php echo $tdu; ?>/images/icon_restauration<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Restauration de qualité'); ?></span>
                      </a>
                  </li>
                  <li class="etude_surveillee">
                      <a href="<?php echo $home_url; ?>/journee-continue"><img src="<?php echo $tdu; ?>/images/icon_etude<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Étude surveillée'); ?></span></a>
                  </li>
                  <li class="internat">
                      <a href="<?php echo get_link_by_slug('internat'); ?>/presentation"><img src="<?php echo $tdu; ?>/images/icon_internat<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Internat'); ?></span></a>
                  </li>
                  <li class="activites_et_camps">
                      <a href="<?php echo $home_url; ?>/le-sport-au-sein-de-lensr"><img src="<?php echo $tdu; ?>/images/icon_activities<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Activités et camps'); ?></span></a>
                  </li>
                  <li class="accent_surles_langues">
                      <a href="<?php echo $home_url; ?>/baccalaureat-international"><img src="<?php echo $tdu; ?>/images/icon_langues<?php echo $suffix; ?>.png" alt="" /><span><?php echo translateString('Accent sur les langues'); ?></span></a>
                  </li>
              </ul>
            </div>
        </section>


        <?php if (have_rows('nos_atouts')) : ?>
            <section class="section section_slider_with_image">
                <div class="container" id="section_nos_atouts">
                    <div class="slick_slider">

                        <?php while (have_rows('nos_atouts')) : the_row(); ?>

                            <?php $texte = get_sub_field('texte'); ?>
                            <?php $image = get_sub_field('image'); ?>

                            <div class="slide">
                                <div class="row flex_row">
                                    <div class="col-sm-6 col-sm-push-6">
                                        <div class="section_text">
                                            <?php echo $texte; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-sm-pull-6">
                                        <div class="white_gradients">
                                            <div class="white_gradient_img" style="background-image:url( <?php echo $image['sizes']['medium']; ?>)">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END OF .row -->
                            </div><!-- END OF .slide -->

                        <?php endwhile; ?>
                    </div><!-- END OF .slick_slider -->
                </div><!-- END OF .container -->
            </section>

        <?php endif; // end if have_rows $nos_atouts?>






        <?php  $news_loop = new WP_Query(
    array(
      'post_type' => 'post',
      'posts_per_page' => 8 ,
      'meta_key' => 'date',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'meta_query' => array(
        array(  //    ONLY SHOW EVENTS THAT HAVENT FINISHED YET
          'key' => 'date',
          'value' => date('Y-m-d'),  // today
          'compare' => '>=',
          'type' => 'DATE'
        )
      )
    )
); ?>
        <?php if ($news_loop->have_posts()) : ?>

            <section class="section section_events">
                <div class="container" id="section_actualites">
                    <div class="row title_row">
                        <div class="col-sm-6 col-sm-push-3" >
                        <?php if (site_language() == 'en') : ?>
                            <h2>ENSR News</h2>
                            <?php else : ?>
                            <h2>L’Actualité ENSR</h2>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3 col-sm-pull-6">
                            <!-- <a href="#" class="button">Toute l'actualité </a> -->
                        </div>

                        <div class="col-sm-3">
                            <!-- <a href="#" class="button">Calendrier</a> -->
                        </div>
                    </div><!--  END OF ROW -->

                    <ul>
                        <?php $p = 0; while ($news_loop->have_posts()) : $news_loop->the_post(); ?>
                            <?php $date = get_field('date'); ?>
                            <?php $post_classes = array(); ?>
                            <?php $has_pic = (($p + floor($p / 4)) % 2);   // 4 is number of cols  same as in_array( $p, array(1,3,4,6)?>
                            <?php
                            if ($has_pic) {
                                array_push($post_classes, 'event_with_picture');
                            }
                            if ($p >= 4) {
                                array_push($post_classes, 'hide_on_mobile');
                            }
                            ?>
                            <?php $style = ($has_pic) ? 'style="background-image:url(' . thumbnail_of_post_url(get_the_ID(), 'medium') . ')"' : ''; ?>
                            <li class="ensr_event <?php echo implode($post_classes, ' ');  ?>"  <?php echo $style; ?>>
                                <a href="<?php echo get_the_permalink(); ?>">

                                    <?php if ($date) : ?>
                                        <div class="date_container">
                                            <?php
                                            $event_date  = new DateTime($date);
                                            // $event_date->format('l')
                                            $day =  strftime("%A", $event_date->getTimestamp());
                                            $date =  strftime("%d", $event_date->getTimestamp());
                                            $month =  strftime("%B", $event_date->getTimestamp());
                                            ?>
                                            <div class="day"><?php echo $day ; ?></div>
                                            <div class="date"><?php echo $date; ?></div>
                                            <div class="month"><?php echo $month; ?></div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="event_content">
                                        <p><?php echo get_the_excerpt(); ?> </p>
                                    </div>
                                </a>
                            </li>
                            <?php $p++; endwhile; // end while of news loop?>

                        </ul>
                    </div><!--  END OF .container -->
                    <div class="shield_background"></div>
                </section>

            <?php endif;  // end if have news?>
            <?php wp_reset_query(); ?>





            <section class="section section_text_with_image">

                <div class="container" id="section_s_inscrire">
                    <div class="row">
                        <div class="col-sm-6">

                            <?php $inscription_text = get_field('inscription_text'); ?>
                            <?php if ($inscription_text): ?>
                                <div class="section_text">
                                    <?php echo $inscription_text; ?>
                                </div>
                            <?php endif;  // end if $inscription_text?>
                        </div>


                        <div class="col-sm-6">
                            <div class="white_gradients">
                                <?php $inscription_image = get_field('inscription_image'); ?>
                                <?php if ($inscription_image) : ?>
                                <div class="white_gradient_img" style="background-image:url(<?php echo $inscription_image['sizes']['medium']; ?>)">
                                <?php endif;  // end if $inscription_image?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!--  END OF .container -->
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
