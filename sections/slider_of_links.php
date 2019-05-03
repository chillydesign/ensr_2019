<?php $title = get_sub_field('title'); ?>
<?php $links = get_sub_field('links'); ?>

<?php if ($title): ?>
<h2><?php echo $title; ?></h2>
<?php endif; ?>

<?php if ($links) : ?>
<ul class="slickslider">
    <?php foreach ($links as $link): ?>
        <?php $page = $link['page']; ?>
        <?php $image = $link['image']; ?>
        <li>
            <a href="<?php echo $page->guid; ?>">
            <div class="slide_image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);" ></div>
            <p><?php echo $page->post_title; ?></p>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
