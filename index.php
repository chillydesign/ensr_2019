<?php get_header(); ?>




<section  class="section section_large_image_header">
    <h1>
        <div class="container">
            <?php _e( 'News', 'webfactor' ); ?>
        </div>
    </h1>
    <?php $image = thumbnail_of_post_url(  get_option( 'page_for_posts' ) , 'large');  ?>
    <div class="background_image" style="background-image: url(<?php echo $image; ?>);">
    </div>
</section>


<!-- section -->
<section class="section  section_colonnes">
    <div class="grey colonnes_padding">
        <div class="container">

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>
        </div>
    </div>
</section>
<!-- /section -->





<?php get_footer(); ?>
