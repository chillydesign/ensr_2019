<?php $column_count =  sizeof(get_sub_field('column')); ?>
<?php $column_class = count_to_bootstrap_class($column_count); ?>
<?php $reverse_on_mobile =  get_sub_field('reverse_order_on_mobile'); ?>
<?php $color =  get_sub_field('color'); ?>
<?php

$rev_class = array('', '');
if ($reverse_on_mobile) :
    $rev_class = array('col-sm-push-6', 'col-sm-pull-6');
 endif;
?>

<div class="colonnes_padding <?php if ($color) {
    echo 'color_' . $color;
} ?>   " <?php if($color AND $color == 'image') : ?> style="background-image:url(<?php echo get_sub_field('background-image')['url']; ?>); background-size:cover; background-repeat:no-repeat; background-position:center;"<?php endif;?> >
	<div class="container">
		<div class="row">
			<?php $i = 0; while (have_rows('column')) : the_row(); ?>
			<?php
			$use_column_image =  get_sub_field('use_column_image');
			if( $use_column_image ) {
				$colimg =  get_sub_field('column_image');
				$column_content = focImageToDiv($colimg);
			} else {
				$column_content =   '<div class="focus_image_match_height">' . get_sub_field('column_content') ."</div>";
			}
			?>
			<div class="<?php echo $column_class   . ' ' . $rev_class[$i % $column_count] ; ?> ">
				<div class="column">
					<?php echo $column_content; ?>
				</div>
			</div>
			<?php $i++; endwhile; ?>
		</div>
		<!-- END OF ROW -->
	</div>
	<!-- END OF CONTAINER -->
</div>
