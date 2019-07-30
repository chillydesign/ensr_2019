<?php $images =  get_sub_field('images'); ?>



<ul class="gallery_images clearfix"   data-featherlight-gallery data-featherlight-filter="a">
	<?php  foreach ($images as $image) : ?>
	<li  class="gallery_image">
		<a class="gallery"  href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>"  alt="" /></a>
	</li>
	<?php endforeach; ?>
</ul>
