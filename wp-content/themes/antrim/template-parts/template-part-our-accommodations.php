

		

			<!-- our accommodations -->



			<section class="our-accommodations dinamic-section" data-aos="fade">

				<div class="d-flex justify-content-center text-center">
					<h2 class="site-title">our accommodations</h2>
				</div>

				<div class="w-100 d-block text-center">
					<a href="/Antrim-new/accommodations" class="accomodations-view-all underline-link">view all</a>
				</div>

				



				<div id="our-accommodations-slider" class="carousel slide" data-interval="12000" data-ride="carousel">

					<div class="carousel-inner">

					<?php 

						$active = true;

						$query = new WP_query(

							array(

								'post_type' => 'accommodations',

								'post-status' => 'publish',

								'posts_per_page' => '-1',

								'orderby' => 'date',

								'order' => 'DESC'

							));

					

					?>

						<?php if($query->have_posts()):?>

							<?php while($query->have_posts()): ?>

								<?php 

									$query->the_post();

									$post_id = $query->ID;

									



									$accommodation_description = get_field('accommodations_description', $post_id);

									$accommodations_button = get_field('accommodations_button', $post_id);

								?>



						<div class="carousel-item <?php if($active == true): ?>active<?php $active = false; ?><?php endif; ?>">

							<div class="bootstrap4-image-replace d-flex">

								<div class="our-accommodations-element d-flex w-100">
									<div class="container-fluid d-flex">

										<div class="row w-100 ml-3">

											<div class="col-12 col-lg-6 our-accommodations-element-img p-0">

												<?php if(strlen(get_the_post_thumbnail()) >= 1): ?>

													<?php the_post_thumbnail(); ?>

												<?php else: ?>

													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="">

												<?php endif; ?>



											</div>

											<div class="col-12 col-lg-6 our-accommodations-element-content">

												<h4><?php echo str_replace("&#039","'", get_the_title()); ?></h4>

												<article><?php echo $accommodation_description; ?></article>

										<a href="<?php if(trim(strlen($accommodations_button['accommodations_button_url'])) >= 1): ?><?php echo $accommodations_button['accommodations_button_url']; ?><?php else: ?><?php echo 'https://guest.rezstream.com/search/antrim-streamside'; ?> <?php endif; ?>" class="outline-link">



										<?php if(strlen($accommodations_button['accommodations_button_text']) >= 1): ?><?php echo $accommodations_button['accommodations_button_text']; ?><?php else: ?><?php echo 'Book Now'; ?> <?php endif; ?>



										</a>

											</div>

										</div>

										</div>
								</div>

							</div>

						</div>



							<?php endwhile; ?>

						<?php endif; ?>

						<?php wp_reset_query(); ?>



					</div>

					<a class="carousel-control-prev" href="#our-accommodations-slider" role="button" data-slide="prev">

						<i class="fas fa-caret-left"></i>

						<span class="sr-only">Previous</span>

					</a>

					<a class="carousel-control-next" href="#our-accommodations-slider" role="button" data-slide="next">

						<i class="fas fa-caret-right"></i>

						<span class="sr-only">Next</span>

					</a>

				</div>

		</section>

			<!-- /our accommodations -->

		