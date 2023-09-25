<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

	<main class="main" role="main">
			
		<section class="page-content dinamic-section">
			<div class="container">
				<?php get_template_part('template-parts/content/home'); ?>
			</div>
		</section>
					
		<?php get_template_part('template-parts/template-part-our-accommodations'); ?>
		
		<?php get_template_part('template-parts/template-part-testimonials'); ?>

		<?php get_template_part('template-parts/template-part-recent-news'); ?>

		<?php get_template_part('template-parts/template-part-contact-us'); ?>

		<?php get_template_part('template-parts/template-part-instagram-gallery'); ?>

	</main>

<?php get_footer(); ?>