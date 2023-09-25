<?php /* Template Name: Explore */ ?>

<?php get_header(); ?>

	<main class="main" role="main">
	<?php 
		$bottom_content = get_field('aboutus_last_content', $page_id);
	?>
		<section class="recent-news explore-section dinamic-section">
			<div class="container ">
			<?php
				$position = true;
				
			
					$args = array(
					'type'                     => 'explores',
					'child_of'                 => 0,
					'parent'                   => '',
					'orderby'                  => 'name',
					'order'                    => 'DESC',
					'hide_empty'               => 1,
					'hierarchical'             => 1 
					);
  
				   $categories = get_categories($args);
				   //print_r($categories); //exit;
					
					foreach ($categories as $category) {

						
						$element_linetime = 0; 
						//print_r($category);

						echo '<div class="explore-container" data-aos="fade"><h2 class="section-title">' . $category->name . '</h2>';

						echo '<p>' . $category->description . '</p><div class="row">';

						$loop = new WP_Query( array(
							'post_type' => 'explores', 
							'cat' => $category->term_id, // Whatever the category ID is for your aerial category
							'posts_per_page' => 3,
							'orderby' => 'date', // Purely optional - just for some ordering
							'order' => 'ASC' // Ditto
						) );
						
						if( $loop->have_posts() ){
							while ( $loop->have_posts() ) : $loop->the_post(); $element_linetime = $element_linetime + 250;?>
							<div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $element_linetime; ?>">
									<div class="news-element">
										<div class="news-element-image <?php if(!$position == true){ echo 'news-element-small';  }; ?>">
											<?php the_post_thumbnail(); ?>
											<div class="news-element-image-content">
						<a href="<?php echo get_the_permalink(); ?>" class="outline-link"><?php if(strlen( get_field('explore_button', $post_id)['explore_button_text']) >= 1): ?><?php echo get_field('explore_button', $post_id)['explore_button_text']; ?><?php else: ?> Learn More<?php endif; ?></a>
											</div>
										</div>
										<div class="news-element-content">
											<h4><?php the_title(); ?></h4>
											<p><?php echo get_field('explore_description', $page_id); ?></p>
										</div>
									</div>
								</div>

							<?php 
							endwhile;
						}
						?></div></div><?php
						wp_reset_query();
						$position = false;
						?>
				
<?php

}		
			?>

</div>


			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-12 col-md-5 left-content">
						<?php echo $bottom_content['aboutus_last_content_left_content']; ?>
					</div>
					<div class="col-12 col-md-7 right-content">
						<?php echo $bottom_content['aboutus_last_content_right_content']; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->

		<?php
			$first_section = get_field('explore_first_section', $page_id);
			$second_section = get_field('explore_second_section', $page_id);
			$third_section = get_field('explore_third_section', $page_id);
		?>

			<section class="page-content dinamic-section" data-aos="fade-up">
				<div class="container">
					<?php get_template_part('template-parts/content/top-5-7'); ?>
				</div>
				<?php get_template_part('template-parts/content/banner'); ?>
				<?php get_template_part('template-parts/content/lightbox-gallery'); ?>
				<div class="container">
					<?php get_template_part('template-parts/content/bottom-6-6'); ?>
				</div>
			</section>

					
		
		<?php get_template_part('template-parts/template-part-testimonials'); ?>

		<?php get_template_part('template-parts/template-part-recent-news'); ?>

		<?php get_template_part('template-parts/template-part-contact-us'); ?>
			
		<?php get_template_part('template-parts/template-part-instagram-gallery'); ?>

	</main>

<?php get_footer(); ?>
