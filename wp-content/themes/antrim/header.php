<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_site_url(); ?>/wp-content/uploads/2019/09/favicon-32x32.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="google-site-verification" content="AMEWWZC-IOVw2wG2v2YqpLrRdOPcTnfNPhV-rEhqltM" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<!-- Facebook Pixel Code -->

		<script>

			!function(f,b,e,v,n,t,s)

			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

			n.callMethod.apply(n,arguments):n.queue.push(arguments)};

			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

			n.queue=[];t=b.createElement(e);t.async=!0;

			t.src=v;s=b.getElementsByTagName(e)[0];

			s.parentNode.insertBefore(t,s)}(window,document,'script',

			'https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '1224472591072807');

			fbq('track', 'PageView');

			</script>

			<noscript>

			<img height="1" width="1"

			src="https://www.facebook.com/tr?id=1224472591072807&ev=PageView

			&noscript=1"/>

			</noscript>

		<!-- End Facebook Pixel Code -->

	</head>
	<body <?php body_class(); ?>>	

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147711320-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-147711320-1');
		</script>
		
		<?php 
			$page_id = $post->ID; 
			$fb_url = get_option('facebook-url'); 
			$ins_url = get_option('instagram-url');
			$logo = get_option('website-logo');
			$banner = get_option('banner-image');
		?>
		<script>
			var js_fb_url = "<?php echo $fb_url; ?>";
			var js_ins_url = "<?php echo $ins_url; ?>";
		</script>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="header">

					<!-- top bar -->

					<section class="top-bar" data-aos="fade-down">
						<div class="container-fluid">
						<ul class="list-inline float-right">
	<li class="list-inline-item light-text"><a class="instagram-link"> <i class="fab fa-instagram"></i> </a></li>
	<li class="list-inline-item light-text"><a class="facebook-link"> <img src="<?php echo get_site_url().'/wp-content/themes/antrim/img/f_logo.png' ?>" alt=""></a></li>
</ul>
						<?php wp_nav_menu( array(
										'menu'              => 'Top Menu',
										'theme_location'    => 'top-menu',
										'depth'             => "",
										'container'         => 'div',
										'container_class'   => '',
										'menu_class'        => 'menu list-inline float-right',
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new wp_bootstrap_navwalker())
									);
									?>



							<!-- ORIGINAL MENU -->
							<!-- <ul class="list-inline float-right">
								<li class="list-inline-item light-text"><a href="#"> about us </a></li>
								<li class="list-inline-item light-text"><a href="#"> Streamside Stories </a></li>
								<li class="list-inline-item light-text"><a href="#"> 845.747.0704 </a></li>
								<li class="list-inline-item light-text"><a href="#"> <i class="fab fa-instagram"></i> </a></li>
								<li class="list-inline-item light-text"><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
							</ul> -->
						</div>
					</section>	

					<!-- /top bar -->

					<!-- navbar -->

					<nav class="navbar main-navbar navbar-expand-md navbar-light" data-aos="fade-down">
						<div class="container-fluid">
							<a class="navbar-brand" href="<?php echo site_url(); ?>/">
								<img src="<?php echo $logo; ?>" alt="Logo">
							</a>
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-navbar-collapse" aria-controls="main-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fas fa-bars"></i>
							</button>

							<div class="collapse navbar-collapse" id="main-navbar-collapse">
							<?php wp_nav_menu( array(
										'menu'              => 'Navbar Menu',
										'theme_location'    => 'navbar-menu',
										'depth'             => "",
										'container'         => 'div',
										'container_class'   => '',
										'menu_class'        => 'menu list-inline',
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new wp_bootstrap_navwalker())
									);
									?>

								<!-- ORIGINAL MENU  -->
								<!-- <ul class="list-inline">
									<li class="list-inline-item light-text"><a href="#">about</a></li>
									<li class="list-inline-item light-text"><a href="#">accommodations</a></li>
									<li class="list-inline-item light-text"><a href="#">explore</a></li>
									<li class="list-inline-item light-text"><a href="#">streamside stories</a></li>
									<li class="list-inline-item light-text"><a href="#">wedding & events</a></li>
									<li class="list-inline-item light-text"><a href="#">contact us</a></li>
									<li class="list-inline-item light-text outline-link-container"><a href="#" class="outline-link">book now</a></li>
								</ul> -->

							</div>
						</div>
					</nav>

					<!-- /navbar -->

					<!-- hero -->
					<?php wp_reset_query(); ?>
						<section class="main-banner <?php if( strlen(get_field('mobile_background')['url']) >= 1): ?>main-banner-custom-mobile-bg<?php endif;?>" style="background-image: url(<?php if(strlen(get_field('header_background', $page_id)['url']) >= 1){
							echo get_field('header_background', $page_id)['url']; 
						}else{
							echo $banner;
						}?>);" data-aos="fade" data-aos-delay="300">

						<?php
						// check to include copyright text
						$copyright_enable = get_field('image_copyright_enable', $page_id);
						$copyright_text = get_field('image_copyright_text', $page_id);
						
						// check if we need to show it
						if(isset($copyright_enable) && $copyright_enable == 1 ){
						?>
						<p class="banner-copyright-text"><?php echo $copyright_text; ?></p>
						<?php
						}
						?>

						


						<?php if( strlen(get_field('mobile_background')['url']) >= 1): ?>
							<div class="header-mobile-background" style="background-image:url(<?php echo get_field('mobile_background', $page_id)['url']; ?>);">
							</div>
						<?php else: ?>

							<?php if(strlen(get_field('header_background', $page_id)['url']) >= 1): ?>
								<img src="<?php echo get_field('header_background', $page_id)['url']; ?>" class="hero-mobile-image" alt="Hero Banner">
							<?php else: ?>
								<img src="<?php echo $banner; ?>"  class="hero-mobile-image" alt="Hero Banner">
							<?php endif; ?>
						
						<?php endif; ?>

						<div class="banner-content">
							<h1>
							<?php if(strlen(get_field('header_title', $page_id, false)) >= 1): ?>
								<?php echo get_field('header_title', $page_id, false); ?>
							<?php else: ?>
								<?php the_title(); ?>
							<?php endif; ?>
								
							</h1>
							<h4>
							<?php if(strlen(get_field('header_description', $page_id)) >= 1): ?>
									<?php echo get_field('header_description', $page_id); ?>
							<?php else: ?>
								discover all that antrim streamside has to offer <a href="https://guest.rezstream.com/search/antrim-streamside" class="outline-link">book now</a>
							<?php endif; ?>
							</h4>
						</div>
					</section>

					<!-- /hero -->

			</header>
			<!-- /header -->
