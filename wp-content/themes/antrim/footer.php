
			
			<!-- footer -->
			<footer class="footer main-footer" role="contentinfo">

				<!-- copyright -->
				<div class="container-fluid">
					<div class="row">
						<?php if(get_field('footer_top_section_visible', $page_id) == true): ?>

							<div class="col-12 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="150">
								<?php dynamic_sidebar( 'footer-top-section' ); ?>
							</div>

						<?php endif; ?>
						<div class="col-12">
							<div data-aos="fade-left" data-aos-delay="150">
								<?php dynamic_sidebar( 'footer-middle-section' ); ?>
							</div>
							

						</div>
						<div class="col-12 d-flex justify-content-center flex-direction-column"  data-aos="fade-right" data-aos-delay="150">
							
							<?php dynamic_sidebar( 'footer-bottom-section' ); ?>

						</div>
					</div>
				</div>
				
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script>

		jQuery(function(){
			jQuery('.facebook-link').attr('href', js_fb_url);
			jQuery('.instagram-link').attr('href', js_ins_url);

			jQuery('.facebook-link').attr('target', '__blank');
			jQuery('.instagram-link').attr('target', '__blank');
		});

		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
