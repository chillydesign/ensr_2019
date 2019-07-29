<?php $small_col_position = get_sub_field('small_col_position'); ?>
<?php $classes = ($small_col_position == 'right') ?  [ 'col-sm-8 col-sm-text-right', 'col-sm-4' ]  :  [ 'col-sm-8 col-sm-push-4', 'col-sm-4 col-sm-pull-8' ]  ; ?>
<div class="container">
	<div class="row">

		<div class="<?php echo $classes[0]; ?>">
			<?php echo get_sub_field('two_thirds_content'); ?>
		</div>

		<div class="<?php echo $classes[1]; ?>">
			<?php echo get_sub_field('one_third_content'); ?>
		</div>

	</div>
	<!-- END OF ROW -->
</div>
