<?php $content = get_sub_field('content'); ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php if ($content): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <?php echo $content; ?>
            </div>
        </div>


    </div>
<?php endif; ?>
<div class="background_image" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
