<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section  class="section section_large_image_header">
            <h1>
                <div class="container">
                    <?php the_title(); ?>
                </div>
            </h1>

            <?php
            $image = get_field('image');
            if ($image):
                $image_url = $image['sizes']['large'];
                else :
                    $image_url = thumbnail_of_post_url(  get_option( 'page_for_posts' ) , 'large');
                endif;
                ?>

            <div class="background_image" style="background-image: url(<?php echo $image_url; ?>);"></div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <?php if (has_post_thumbnail() ) : ?>
                            <img src="<?php echo thumbnail_of_post_url( get_the_ID(), 'small'); ?>" alt=""/>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">

                        <p class="date">Le <?php echo get_the_date(); ?></p>

                        <?php the_content(); // Dynamic Content ?>
                        <?php if(get_field('attachment')) : ?>
                            <p class="attachment"><a href="<?php echo get_field('attachment')['url']; ?>" target="_blank"><?php echo get_field('nom_du_fichier_joint'); ?></a></p>
                        <?php endif; ?>

                        <?php edit_post_link(); // Always handy to leave Edit Post Links available ?>
                    </div>
                 </div><!-- END OF ROW -->
            </div>
        </section>


        <?php //comments_template(); ?>

    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>
        <section>


            <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

        </section>
        <!-- /section -->
    </article>
    <!-- /article -->

<?php endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>
