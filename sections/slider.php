<?php $title = get_sub_field('title'); ?>
<?php $images = get_sub_field('images'); ?>
<?php if ($title): ?>
<h2><?php echo $title; ?></h2>
<?php endif; ?>

<ul class="slickslider_img">
    <?php foreach ($images as $image): ?>
        <li>
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" />
        </li>
    <?php endforeach; ?>
</ul>


<?php if ( false) : ?><div class="slide_image" style="background-image: url(<?php echo $image['url']; ?>);" ></div>
<p><?php echo $image['title']; ?></p> <?php endif; ?>
