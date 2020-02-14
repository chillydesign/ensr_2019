<?php

$small_col_position = get_sub_field('small_col_position'); 
$use_two_thirds_image = get_sub_field('use_two_thirds_image'); 
$use_one_third_image = get_sub_field('use_one_third_image'); 


if( $use_one_third_image ) {
	$one_third_content =  get_sub_field('one_third_image');
	var_dump($one_third_content); 
} else {
	$one_third_content =  get_sub_field('one_third_content');
}

if( $use_two_thirds_image ) {
	$two_thirds_content =  get_sub_field('two_thirds_image');
} else {
	$two_thirds_content =  get_sub_field('two_thirds_content');
}

$classes = ($small_col_position == 'right') ?  [ 'col-sm-8 col-sm-text-right', 'col-sm-4' ]  :  [ 'col-sm-8 col-sm-push-4', 'col-sm-4 col-sm-pull-8' ]  ;

?>
<div class="container">
	<div class="row">

		<div class="<?php echo $classes[0]; ?>">
			<?php echo $two_thirds_content; ?>
		</div>

		<div class="<?php echo $classes[1]; ?>">
			<?php echo $one_third_content; ?>
		</div>

	</div>
	<!-- END OF ROW -->
</div>
