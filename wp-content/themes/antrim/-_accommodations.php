<?php /* Template Name: Accommodations */ ?>

<?php get_header(); ?>
	<main class="main" role="main">
		<section class="accomodations-listing dinamic-section">
			<div class="container">
				<div class="row">

					<?php 
						$active = true;
						$query = new WP_query(
							array(
								'post_type' => 'accommodations',
								'post-status' => array('publish'),
								'posts_per_page' => '-1',
								'orderby' => 'date',
								'order' => 'ASC'
							));
					
					?>
						
						<?php
						
						$turn = 0;
						
						if($query->have_posts()):?>
							<?php while($query->have_posts()): ?>
								<?php 
									$query->the_post();
									$post_id = $query->ID;
									
									$accommodation_description = get_field('accommodations_description', $post_id);
									$accommodations_button = get_field('accommodations_button', $post_id);
									$accommodations_label = get_Field('accommodations_main_page_label', $page_id);
									$$accommodations_delay = 0;

									if($turn == 1){
										$accommodations_delay = 200;
										$turn = 0;
									}else{
										$accommodations_delay = 0;
										$turn = 1;
									}
								?>

									<div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $accommodations_delay; ?>">
										<div class="accommodations-listing-element">

										<?php if(strlen(get_the_post_thumbnail()) >= 1): ?>
											<?php the_post_thumbnail('large', array('class' => 'auto-adjust-image')); ?>
										<?php else: ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="">
										<?php endif; ?>
											
											<div class="accommodations-listing-element-content">
												<h3><?php the_title();?></h3>
												<p>
													<?php echo $accommodations_label; ?>
												</p>
												<span class="d-inline-block"><a href="<?php the_permalink(); ?>">Learn More</a></span>
											</div>
										</div>
									</div>

							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
			<!-- /our accommodations -->
				</div>
			</div>
		</section>
		<!-- /section -->
		<?php get_template_part('template-parts/template-part-testimonials'); ?>
		<?php get_template_part('template-parts/template-part-recent-news'); ?>
		<?php get_template_part('template-parts/template-part-contact-us'); ?>
		<?php get_template_part('template-parts/template-part-instagram-gallery'); ?>
	</main>

<?php get_footer(); ?>
