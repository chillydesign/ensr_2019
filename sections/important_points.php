<div class="container">
	<div class="row">
		<?php $count = count(get_sub_field('blocs')); ?>
		<?php $i=1; ?>
		<?php $marge = get_sub_field('marge_supplementaire'); ?>
		<?php while ( have_rows('blocs') ) : the_row(); ?>
			<?php $blocclass = ($i == $count && $marge == true) ?  "marginbloc" : ""; ?>
            <?php $image = get_sub_field('image')['sizes']['medium']; ?>
            <?php $even_block = ($i % 2 == 0) ? 'even_bloc' : ''; ?>
            <?php $icone = get_sub_field('icone'); ?>
			<div class="bloc <?php echo $even_block . ' ' . $blocclass; ?>">

				<div class="bloc_img" style="background-image:url('<?php echo $image; ?>');"></div>
				<div class="bloc_text">
					<h3 <?php if( $icone) {
						echo 'class="icon_title" ';
						$bg = "url('" . $icone['sizes']['small'] . "');";
						echo 'style="background-image:' . $bg . '"';
					}?>>
					<?php echo get_sub_field('titre'); ?>
				</h3>
				<div><?php echo get_sub_field('text'); ?></div>
			</div>
		</div>
		<?php $i++; ?>
	<?php endwhile; ?>
</div> <!-- END OF ROW -->
</div><!--  END OF CONTAINER -->
