
<?php 
	$top_left_cont = get_field('page_top_left_content' ,$page_id);
	$top_right_cont = get_field('page_top_right_content' ,$page_id);
?>
<div class="row">
	<div class="col-1"></div>
	<div class="col-12 col-md-5">
		<?php echo $top_left_cont; ?>
	</div>
	<div class="col-12 col-md-5 pad-left-65" >
		<?php echo $top_right_cont; ?>
	</div>
	<div class="col-1"></div>
</div>
<style>
.home .page-content .row img{
	width: 94%;
}
</style>