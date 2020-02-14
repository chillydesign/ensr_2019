<?php

$small_col_position = get_sub_field('small_col_position'); 
$use_two_thirds_image = get_sub_field('use_two_thirds_image'); 
$use_one_third_image = get_sub_field('use_one_third_image'); 


// takes a focal image object and returns a div with background position 
function puppyFunction($focal_image) {

	$top = $focal_image['focal_point']['top'];
	$bottom = $focal_image['focal_point']['bottom'];
	$right = $focal_image['focal_point']['right'];
	$left = $focal_image['focal_point']['left'];
	$y = (($top+$bottom) /2 * 100);
	$x = (($left + $right) /2 * 100);
	$img = $focal_image['sizes']['large'];
	$content = '<div class="focus_image focus_image_match_height" style="background-image:url('.$img.'); background-position: '.$x.'%  '. $y.'%">IMAGE</div>'; 
	return $content;
}

if( $use_one_third_image ) {
	$oti =  get_sub_field('one_third_image');
	$one_third_content = puppyFunction($oti);
	
} else {
	$one_third_content =   '<div class="focus_image_match_height">' . get_sub_field('one_third_content') ."</div>";
}

if( $use_two_thirds_image ) {
	$tti =  get_sub_field('two_thirds_image');
	$two_thirds_content =  puppyFunction($tti);
} else {
	$two_thirds_content =  '<div class="focus_image_match_height">' . get_sub_field('two_thirds_content') ."</div>";
}

$classes = ($small_col_position == 'right') ?  [ 'col-sm-8 col-sm-text-right', 'col-sm-4' ]  :  [ 'col-sm-8 col-sm-push-4', 'col-sm-4 col-sm-pull-8' ]  ;

?>
<div class="container">
	<div class="row">

		<div class="<?php echo $classes[0]; ?>">
			<?php echo $two_thirds_content; ?>
		</div>

		<div class="<?php echo $classes[1]; ?>" style="height:300px">
			<?php echo $one_third_content; ?>
		</div>

	</div>
	<!-- END OF ROW -->
</div>
