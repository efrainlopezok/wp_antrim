

<?php 

	$top_left_cont = get_field('page_top_left_content' ,$page_id, $format = false);

	$top_right_cont = get_field('page_top_right_content' ,$page_id, $format = false);

?>

<div class="row">

	<div class="col-12 col-md-6">

		<?php  echo apply_filters('the_content', $top_left_cont); //echo $top_left_cont; ?>

	</div>

	<div class="col-12 col-md-6">

		<?php echo apply_filters('the_content', $top_right_cont); //echo ($top_right_cont); ?>

	</div>

</div>