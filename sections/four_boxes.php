
<?php $background_image = get_sub_field('background_image'); ?>
<?php $imageurl = ($background_image) ? $background_image['sizes']['large'] : ''; ?>

<div class="grey colonnes_padding"  style="background-image: url(<?php echo  $imageurl; ?>">
    <div class="container">
        <div class="row">
            <?php $c = 0; while ( have_rows('boxes') ) : the_row(); ?>
                    <?php $image = get_sub_field('image'); ?>
                <div class="col-sm-6 ">
                    <div class="column">
                        <?php if ($image): ?>
                            <p><img class="inlineimg alignnone wp-image-184 size-full" src="<?php echo $image['url']; ?>" alt="" width="200" height="200" srcset="<?php echo $image['url']; ?> 200w, <?php echo $image['sizes']['small']; ?> 150w" sizes="(max-width: 200px) 100vw, 200px" /></p>
                        <?php endif; ?>
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </div>
                <?php if ($c == 1): ?>
                </div> <!-- END OF ROW -->

                <div style="margin-top:50px" class="row">
            <?php endif; ?>
            <?php $c++; endwhile; ?>
        </div> <!-- END OF ROW -->
    </div><!--  END OF CONTAINER -->
</div>
