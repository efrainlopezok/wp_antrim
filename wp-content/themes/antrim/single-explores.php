<?php get_header(); ?>

	<main class="main" role="main">
			
		<?php get_template_part('template-parts/template-part-page-acf-content'); ?>

		<section class="page-content dinamic-section">
			<div class="container">
				<h2><?php echo get_field('accommodations_amenities_section_title', $page_id); ?></h2>
				<p><?php echo get_field('accommodations_amenities_section_description', $page_id); ?></p>
				<div class="row">
					<div class="col-12 col-md-6">
					<?php echo get_field('accommodations_amenities_section_left_content', $page_id); ?>
					</div>
					<div class="col-12 col-md-6">
					<?php echo get_field('accommodations_amenities_section_right_content', $page_id); ?>
					</div>
				</div>
				<p><?php echo get_field('accommodations_amenities_section_paragraph', $page_id); ?></p>
			</div>
		</section>

		<?php get_template_part('template-parts/template-part-recent-news'); ?>

		<?php get_template_part('template-parts/template-part-contact-us'); ?>

		<?php get_template_part('template-parts/template-part-instagram-gallery'); ?>

	</main>

<?php get_footer(); ?>
