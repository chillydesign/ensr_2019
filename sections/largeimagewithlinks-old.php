<?php $content = get_sub_field('content'); ?>
<?php $links = get_sub_field('links'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
        <div class="col-sm-6 col-sm-push-6">
        <?php echo $content; ?>
        </div>
        </div>

    </div>
<?php endif; ?>

<!-- <div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"> -->
<div class="background_image">
  <?php $images = get_sub_field('slider'); ?>
  <ul class="homeslider">
      <?php foreach ($images as $image): ?>
          <li>
              <div class="slide_image" style="background-image: url(<?php echo $image['sizes']['large']; ?>);" ></div>
          </li>
      <?php endforeach; ?>
  </ul>
</div>
<div class="grey_back_forlinks">
<div class="container">
  <div class="large_image_links">
      <?php foreach($links as $link): ?>
          <?php $page = $link['page']; ?>
          <?php $image = $link['image']; ?>
          <a class="large_image_link" href="<?php echo $page->guid; ?>" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);" >
              <span><?php echo $page->post_title; ?></span>
          </a>
      <?php endforeach; ?>
  </div>
</div>
</div>
