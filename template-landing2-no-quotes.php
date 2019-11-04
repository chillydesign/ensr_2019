<?php /* Template Name: Landing Page2 no quotes */ get_header(); ?>
<?php $home_url =  home_url(); ?>
<?php $tdu = get_template_directory_uri(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<?php $top_image = get_field('top_image'); ?>
<?php $title = get_field('title'); ?>
<?php $subtitle = get_field('subtitle'); ?>
<?php $services = get_field('services'); ?>
<?php $testimonials = get_field('testimonials'); ?>
<?php $contact_form = get_field('contact_form'); ?>
<?php $footer_image_1 = get_field('footer_image_1'); ?>
<?php $footer_image_2 = get_field('footer_image_2'); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <section class="section section_the_landing_header">
        <a href="<?php echo home_url(); ?>" class="branding">ENSR</a>
        </section>

        <section class="section   section_the_landing_welcome  "  style="background-image:url(<?php echo $top_image['sizes']['large']; ?>)">
            <div class="container">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>
            </div>
            <div class="white_bg"></div>

        </section>

        <section class="section section_the_landing_services">
            <div class="container">
        <div class="services_container">

        <?php foreach($services as $service):  ?>
            <div class="service">

                <div class="service_image"
         style="background-image:url(<?php echo $service['image']['sizes']['medium']; ?>)"></div>
               <div class="service_content"><?php echo $service['content']; ?></div>
            </div>

        <?php endforeach; ?>


        </div>
        </div>
        </section>



        <section class="section section_the_landing_form section_the_landing_form_blue">

        <div class="container">
            <div class="form_container">


                <h3>Contact Us</h3>

                <?php echo $contact_form; ?>



            <h3>Want to know more about ENSR International School?</h3>
                <a href="#" class="button">Go to website</a>
            </div>
        </div>


        <div class="background_image_1"
         style="background-image:url(<?php echo $footer_image_1['sizes']['medium']; ?>)"></div>
         <div class="background_image_2"
         style="background-image:url(<?php echo $footer_image_2['sizes']['medium']; ?>)"></div>


        </section>


        <section class="section section_the_landing_footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="icon_phone">+41 21 654 65 00</p>
                    <p class="icon_email"> admissions@ensr.ch</p>
                    <p class="icon_address">  Ecole Nouvelle de la Suisse Romande Ch. de Rovéréaz 20 <br>
                    C.P. 161 CH – 1000 Lausanne 12 Switzerland</p>

                </div>
                <div class="col-sm-6">

<img src="<?php echo $tdu;?>/images/landing2/accreditations.jpg" alt="accreditations" style="box-shadow:none;">

                </div>
            </div>
        </div>
        </section>




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
