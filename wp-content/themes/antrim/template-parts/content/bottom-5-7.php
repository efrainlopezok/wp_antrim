
<?php 
	$bottom_left_cont = get_field('page_bottom_left_content' ,$page_id);
	$bottom_right_cont = get_field('page_bottom_right_content' ,$page_id);
?>
<div class="row">
	<div class="col-12 col-md-5">
		<?php echo $bottom_left_cont; ?>
	</div>
	<div class="col-12 col-md-7">
		<?php echo $bottom_right_cont; ?>
	</div>
</div>