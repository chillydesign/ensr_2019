


<div class="slick_slider">


<?php while ( have_rows('slides') ) : the_row() ; ?>


        <?php $image =  get_sub_field('image'); ?>
        <?php $slide_content =  get_sub_field('slide_content'); ?>
        <?php if (!$slide_content || $slide_content == ''  )  $slide_content = get_the_title();  ?>
        <div class="slide">
        <div  class="slide_photo_background" style="background-image: url(<?php echo $image['sizes']['large']; ?>);" >
            <div class="slide_content"><?php echo $slide_content; ?></div>
        </div>
        </div>
<?php endwhile; ?>


</div>   
