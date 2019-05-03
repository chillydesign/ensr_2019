<?php $background_image = get_sub_field('background_image'); ?>

    <h1>
      <div class="container">
        <?php the_title(); ?>
      </div>
    </h1>


<div class="background_image" style="background-image: url(<?php echo $background_image['sizes']['large']; ?>);">

</div>
