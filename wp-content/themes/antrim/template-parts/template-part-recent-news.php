<!-- recent news -->
<?php

$custom_silos_enable = get_field('custom_silos_enable', $page_id);
$custom_silos = get_field('custom_silos', $page_id);

if($custom_silos_enable == true): ?>
<section class="recent-news dinamic-section">

				<div class="container">

					<div class="row">





						<?php

							$query = new WP_query(array(

								'post_type' => 'misc',

								'post_status' => 'publish',

								'posts_per_page' => '3', 
								
								'order' => 'date',

								'orderby' => 'desc'

							));

						?>


						<?php
							$fade_linetime = 0;
							$silo_item = 1;
							
							if($query->have_posts()){

								while($query->have_posts()){

									$query->the_post();

									$the_id = 0;
									if($silo_item == 1){
										$silo_item++;
										if(strlen($custom_silos['custom_silos_first']->ID) >= 1){
											$the_id = $custom_silos['custom_silos_first']->ID; 
											echo "<!-- first -->";
										}else{
											$the_id = $post->ID;

										}
										
									}elseif($silo_item == 2){
										$silo_item++;
										if(strlen($custom_silos['custom_silos_second']->ID) >= 1){
											$the_id = $custom_silos['custom_silos_second']->ID; 
											echo "<!-- second -->";
										}else{
											$the_id = $post->ID;
										}

									}elseif($silo_item == 3){
										$silo_item++;
										if(strlen($custom_silos['custom_silos_third']->ID) >= 1){
											$the_id = $custom_silos['custom_silos_third']->ID; 
											echo "<!-- third -->";
										}else{
											$the_id = $post->ID;
										}
									}


									$post_id = $the_id;
									$fade_linetime = $fade_linetime + 250;
									?>

									

									<div class="col-12 col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="<?php echo $fade_linetime; ?>">

										<div class="news-element">

											<div class="news-element-image">

												<?php echo get_the_post_thumbnail($post_id); ?>


												<div class="news-element-image-content">

													<a href="<?php echo get_the_permalink($post_id); ?>" class="outline-link"><?php echo get_field('misc_button_text', $post_id); ?></a>

												</div>

											</div>

											<div class="news-element-content">

												<h4><?php echo get_the_title($post_id); ?></h4>

												<p><?php print_r(get_post($post_id)->post_content); ?></p>
												<?php wp_reset_postdata(); ?>
											</div>

										</div>

									</div>



									<?php

								}

						}?>

						<?php wp_reset_query(); ?>

						

						





					</div>

				</div>

			</section>
		<?php endif; ?>
			<!-- /recent news -->