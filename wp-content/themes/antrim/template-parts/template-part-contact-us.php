<!-- contact us -->

<?php



	$shortcode = get_field('contactus_shortcode', 14);

	$extra_title = get_field('contactus_extratitle', $page_id);



?>

<section class="contact-us dinamic-section" data-aos="fade-up">

	

	<?php if(strlen($extra_title) >= 1): ?>

		<h2 class="site-title">

			CONTACT us 

		</h2>

	<?php endif; ?>





	<div class="container">
		<?php if(strlen($shortcode) >= 1): ?>

		<?php echo do_shortcode($shortcode); ?>

		<?php else: ?>

		<?php echo do_shortcode('[contact-form-7 id="21" title="Contact Us"]'); ?>

		<?php endif; ?>
	</div>

</section>

<!-- /contact us -->