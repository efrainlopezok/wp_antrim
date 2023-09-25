<!-- section -->

<?php 

	$top_style = get_field('page_top_cols', $page_id);

	$bottom_style = get_field('page_bottom_cols', $page_id);

?>

<section class="page-content dinamic-section">

	<div class="container" data-aos="fade-up">

		<?php 

		if($top_style == 1){

			get_template_part('template-parts/content/top-8-4'); 

		}else if($top_style == 2){

			get_template_part('template-parts/content/top-7-5'); 

		}else if($top_style == 3){

			get_template_part('template-parts/content/top-6-6'); 

		}else if($top_style == 4){

			get_template_part('template-parts/content/top-5-7'); 

		}else if($top_style == 5){

			get_template_part('template-parts/content/top-4-8'); 

		}else{

			get_template_part('template-parts/content/top-6-6');

		}



		?>



	</div>

	<?php get_template_part('template-parts/content/banner'); ?>

	<?php get_template_part('template-parts/content/photo-gallery'); ?>

	<div class="container" data-aos="fade-up">

		<?php

		

		if($bottom_style == 1){

			get_template_part('template-parts/content/bottom-8-4'); 

		}else if($bottom_style == 2){

			get_template_part('template-parts/content/bottom-7-5'); 

		}else if($bottom_style == 3){

			get_template_part('template-parts/content/bottom-6-6'); 

		}else if($bottom_style == 4){

			get_template_part('template-parts/content/bottom-5-7'); 

		}else if($bottom_style == 5){

			get_template_part('template-parts/content/bottom-4-8'); 

		}else{

			get_template_part('template-parts/content/bottom-6-6');

		}

		

		?>

	</div>

</section>

<!-- /section -->