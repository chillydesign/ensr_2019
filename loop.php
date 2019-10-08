



<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <div class="column" style="margin: 0 0 30px">
        <div class="news_item_content">
            <div class="row">
         
                <div class="col-sm-9">

                    <h2><a  href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                  
                    <div class="news_excerpt"><?php echo html5wp_excerpt(); ?></div>

                </div>
            </div>

        </div>
    </div>



<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <div class="column">
        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>
    </div class="column">
    <!-- /article -->

<?php endif; ?>
