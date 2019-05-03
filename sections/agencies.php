<div class="locations">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-push-3" style="text-align:center;">
        <?php echo get_sub_field('intro'); ?>
      </div>
    </div>
    <div class="row agency_boxes">
      <div class="col-sm-4 map_height">
        <div class="offre_box">
        <div class="offre_img" style="background-image:url(<?php echo get_sub_field('agency1_img')['url']; ?>)">
        </div>
        <div class="offre_content">
          <?php echo get_sub_field('agency1'); ?>
        </div>
        </div>
      </div>
      <div class="col-sm-4 map_height">
        <div class="offre_box">
        <div class="offre_img" style="background-image:url(<?php echo get_sub_field('agency2_img')['url']; ?>)">
        </div>
        <div class="offre_content">
          <?php echo get_sub_field('agency2'); ?>
        </div>
      </div>
      </div>
      <div class="col-sm-4"><div class="map_height" id="agencymap"></div></div>
    </div>
  </div>
</div>
