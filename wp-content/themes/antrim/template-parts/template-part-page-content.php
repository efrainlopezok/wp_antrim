<!-- section -->

<section class="page-content dinamic-section" data-aos="fade-up">

	<div class="container">

		<div class="row px-4">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<?php the_content(); ?>



			<?php endwhile; ?>



			<?php endif; ?>

		</div>

	</div>

</section>

<!-- /section -->