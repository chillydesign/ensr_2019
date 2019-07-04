<?php $column_count =  sizeof(  get_sub_field('columns')  ); ?>
<?php $column_class = count_to_bootstrap_class($column_count); ?>

<?php $bg = ( get_sub_field('bg') == 'grey' ) ? 'grey' : ''; ?>
<?php $marginclass = ( get_sub_field('nomargin')  ) ? 'nomargin' : ''; ?>

<div class="<?php echo $bg; ?> <?php echo $marginclass; ?> colonnes_padding">
<div class="container">
	<div class="row">
	<?php while ( have_rows('columns') ) : the_row(); ?>
		<div class="<?php echo $column_class; ?> ">
			<div class="column">
				<?php echo get_sub_field('content'); ?>
			</div>
		</div>
	<?php endwhile; ?>
	</div> <!-- END OF ROW -->
</div><!--  END OF CONTAINER -->
</div>
