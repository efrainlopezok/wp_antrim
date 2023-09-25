<?php get_header(); ?>
	<style>
		.main-banner{
			display: none;
		}
		main section{
			margin-top: 22rem;
    		padding: 6rem 1rem;
		}
		main section h1{
			font-family: monthoers;
    		font-size: 92px;
		}
		main section article{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		main section article i{
			color: black;
    		font-size: 80px;
		}
	</style>
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				<i class="fas fa-exclamation-triangle"></i>
				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>" class="underline-link"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
