

<div class="slick_slider_no_dots">
<?php while (have_rows('slides')) : the_row() ; ?>

  <?php $image =  get_sub_field('image'); ?>
  <?php $slide_content =  get_sub_field('slide_content'); ?>

  <div class="slide">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-sm-push-3" style="text-align: center">

                      <div class="welcome_text_inner">
                        <h2>  <?php echo $slide_content; ?></h2>
                          &nbsp;
                      </div>

              </div>
          </div>
    </div>
    <div class="background_image" style="background-image:url('<?php echo $image['sizes']['large'];  ?>')"></div>

  </div>

<?php endwhile; ?>
</div> <!-- end slick_slider_no_dots -->
