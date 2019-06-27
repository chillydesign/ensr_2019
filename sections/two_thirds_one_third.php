<?php $small_col_position = get_sub_field('small_col_position'); ?> 
<?php $classes = ($small_col_position == 'right') ?  [ 'col-sm-9 col-sm-text-right', 'col-sm-3' ]  :  [ 'col-sm-9 col-sm-push-3', 'col-sm-3 col-sm-pull-9' ]  ; ?> 

	<div class="row">


		<div class="<?php echo $classes[0]; ?>">
		<?php echo get_sub_field('two_thirds_content'); ?>
		</div>


		<div class="<?php echo $classes[1]; ?>">
			<?php echo get_sub_field('one_third_content'); ?>
		</div>

	</div> <!-- END OF ROW -->
