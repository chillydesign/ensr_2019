<?php /* Template Name: Home Page */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        <section class="section section_welcome">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-push-6">

                        <div class="welcome_text_inner">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in lacus hendrerit nunc elementum blandit. </h2>
                            <a href="#" class="button">Nous contacter</a>
                        </div>

                    </div>
                </div>


                <ul class="quick_links">
                    <li><a class="scroll_link" href="#section_l_ensr">L'Ensr</a></li>
                    <li><a class="scroll_link" href="#section_nos_services">Nos Services</a></li>
                    <li><a class="scroll_link" href="#section_nos_atouts">Nos Atouts</a></li>
                    <li><a class="scroll_link" href="#section_actualites">Actualités</a></li>
                    <li><a class="scroll_link" href="#section_s_inscrire">S'Inscrire</a></li>
                </ul>

            </div>


            <div class="background_image" style="background-image:url('images/buildings_1.jpg')"></div>
        </section>



        <section class="section section_school_sections">

            <div class="container" id="section_l_ensr">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="dropcap">L’Ecole Nouvelle de Suisse Romande dolor sit amet, consectetur adipiscing elit. Praesent in lacus hendrerit nunc elementum blandit.  dolor sit amet, consectetur adipiscing elit. Praesent in lacus hendrerit nunc elementum </h2>


                    </div>
                    <div class="col-sm-6">


                        <div class="school_areas_container">
                            <ul class="school_areas">
                                <li class="school_maternelle">
                                    <a href="#">
                                        <strong>Maternelle</strong>
                                        <span>de 3 à 6 ans</span>
                                    </a>
                                </li>
                                <li class="school_primaire">
                                    <a href="#">
                                        <strong>Primaire</strong>
                                        <span>de 7 à 10 ans</span>
                                    </a>
                                </li>
                                <li class="school_college">
                                    <a href="#">
                                        <strong>Collège</strong>
                                        <span>de 11 à 14 ans</span>
                                    </a>
                                </li>
                                <li class="school_gymnase">
                                    <a href="#">
                                        <strong>Gymnase</strong>
                                        <span>de 15 à 18 ans</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="shield_background"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_icons">
            <div class="container" id="section_nos_services">
                <ul>
                    <li class="ramassage_scolaire"><a href="#"><img src="images/icon_bus.png" alt="" /><span>Ramassage scolaire</span></a></li>
                    <li class="restauration_de_qualite"><a href="#"><img src="images/icon_restauration.png" alt="" /><span>Restauration de qualité</span></a></li>
                    <li class="etude_surveillee"><a href="#"><img src="images/icon_etude.png" alt="" /><span>Étude surveillée</span></a></li>
                    <li class="internat"><a href="#"><img src="images/icon_internat.png" alt="" /><span>Internat</span></a></li>
                    <li class="activites_et_camps"><a href="#"><img src="images/icon_activities.png" alt="" /><span>Activités et camps</span></a></li>
                    <li class="accent_surles_langues"><a href="#"><img src="images/icon_langues.png" alt="" /><span>Accent sur les langues</span></a></li>
                </ul>
            </div>
        </section>


        <?php if (have_rows('nos_atouts')) : ?>
            <section class="section section_slider_with_image">
                <div class="container" id="section_nos_atouts">
                    <div class="slick_slider">

                        <?php while ( have_rows('nos_atouts') ) : the_row(); ?>

                        <?php $texte = get_sub_field('texte'); ?>
                        <?php $image = get_sub_field('image'); ?>

                        <div class="slide">
                            <div class="row">
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

    <?php endif; // end if have_rows $nos_atouts ?>



    <section class="section section_events">
        <div class="container" id="section_actualites">
            <div class="row title_row">
                <div class="col-sm-6 col-sm-push-3" >
                    <h2>L’Actualité ENSR</h2>
                </div>
                <div class="col-sm-3 col-sm-pull-6">
                    <a href="#" class="button">Toute l'actualité </a>
                </div>

                <div class="col-sm-3">
                    <a href="#" class="button">Calendrier</a>
                </div>
            </div>

            <ul>
                <li class="ensr_event">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">23</div>
                            <div class="month">septembre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>

                    </a>

                </li>
                <li class="ensr_event event_with_picture" style="background-image:url('images/schoolwork_1.jpg')">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">27</div>
                            <div class="month">septembre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>
                    </a>
                </li>
                <li class="ensr_event">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">30</div>
                            <div class="month">septembre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>

                    </a>

                </li>
                <li class="ensr_event event_with_picture" style="background-image:url('images/classroom_1.jpg')">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">02</div>
                            <div class="month">octobre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>
                    </a>
                </li>

                <li class="ensr_event event_with_picture hide_on_mobile" style="background-image:url('images/students_1.jpg')">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">12</div>
                            <div class="month">octobre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>
                    </a>
                </li>

                <li class="ensr_event hide_on_mobile">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">13</div>
                            <div class="month">octobre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>

                    </a>

                </li>
                <li class="ensr_event event_with_picture hide_on_mobile" style="background-image:url('images/skiing_1.jpg')">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">21</div>
                            <div class="month">octobre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>
                    </a>
                </li>
                <li class="ensr_event hide_on_mobile">
                    <a href="#">
                        <div class="date_container">
                            <div class="day">mercredi</div>
                            <div class="date">23</div>
                            <div class="month">septembre</div>
                        </div>

                        <div class="event_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est... </p>
                        </div>

                    </a>

                </li>

            </ul>
        </div><!--  END OF .container -->
        <div class="shield_background"></div>
    </section>


    <section class="section section_text_with_image">

        <div class="container" id="section_s_inscrire">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section_text">
                        <h2>Un enseignement de qualité</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est. Nulla facilisi. Mauris ut nulla tempor, vulputate ligula ac, maximus nisi. Vivamus blandit finibus nisl, ut rhoncus est Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec volutpat massa, et cursus est. Nulla facilisi. Mauris ut nulla tempor, vulputate ligula ac, maximus nisi. Vivamus blandit finibus nisl, ut rhoncus est Lorem ipsum.</p>
                        <a href="#" class="button">Plus d’informations</a>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="white_gradients">
                        <div class="white_gradient_img" style="background-image:url(images/building_1.jpg)">
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

        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>




<?php get_footer(); ?>
