<div class="slick_slider_no_dots">
  <?php $i=1; ?>
  <?php while (have_rows('slides')) : the_row() ; ?>

  <?php $image =  get_sub_field('image'); ?>
  <?php $slide_content =  get_sub_field('slide_content'); ?>

  <?php $content_is_html = isHTML($slide_content); ?>

  <div class="slide">
    <div class="container">
      <div class="row">

        <?php if ($content_is_html): ?>
        <div class="col-sm-6 ">

          <div class="welcome_text_inner">
            <?php echo $slide_content; ?>
            &nbsp;
          </div>

        </div>

      <?php else : ?>
        <div class="col-sm-6 col-sm-push-3" style="text-align: center">

          <div class="welcome_text_inner">
            <?php if($i == 1) : ?>
              <h1><?php echo $slide_content; ?></h1>
            <?php else : ?>
              <h2><?php echo $slide_content; ?></h2>
            <?php endif; ?>
            &nbsp;
          </div>

        </div>
        <?php endif; ?>

      </div>
    </div>
    <div class="background_image" style="background-image:url('<?php echo $image['sizes']['large'];  ?>')"></div>

  </div>
<?php $i++; ?>
  <?php endwhile; ?>
</div>
<!-- end slick_slider_no_dots -->
