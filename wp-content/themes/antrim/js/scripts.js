(function (jQuery, root, undefined) {
	jQuery(function () {
		AOS.init();

		jQuery(document).on('scroll', function(){
			jQuery('.main-navbar').toggleClass('scrolled', jQuery(this).scrollTop() > jQuery('.main-navbar').height() - 50);
			jQuery('.top-bar').toggleClass('scrolled', jQuery(this).scrollTop() > jQuery('.main-navbar').height() - 50);
		});
		jQuery('.main-navbar').toggleClass('scrolled', jQuery(this).scrollTop() > jQuery('.main-navbar').height() - 50);
			jQuery('.top-bar').toggleClass('scrolled', jQuery(this).scrollTop() > jQuery('.main-navbar').height() - 50);

			jQuery('.testimonials-slider').slick({
				dots: false,
				infinite: true,
				speed: 1500,
				fade: true,
				cssEase: 'linear',
				autoplay: true,
				autoplaySpeed: 7000,
			});
			jQuery('.news-element-content').matchHeight({
				byRow: true,
				property: 'height',
				target: null,
				remove: false
			});
			jQuery('.navbar-toggler').on('click', function(){
				if(jQuery('.navbar-toggler').hasClass('collapsed')){
					jQuery('.main-navbar').addClass('navbar-menu-open');
				}else{
					jQuery('.main-navbar').removeClass('navbar-menu-open');
				}
			});

			jQuery('.dropdown-toggle').on('click', function(){
				var href = jQuery(this).attr('href');
				location.replace(href);
			})
			if(jQuery(window).width() > 767){
				jQuery('.dropdown, .dropdown-menu').hover(function() {
					jQuery(this).find('.dropdown-menu').toggleClass('show');
				});
			}else{
				jQuery('.dropdown-toggle').removeAttr('data-toggle');
				jQuery('.dropdown').append('<i class="fas fa-sort-down" data-toggle="dropdown" class="dropdown-toggle"></i>');
			}

		if(jQuery('.streamside-posts').find('.post-row').length > 3){
			jQuery('#streamside-see-all-news').addClass('streamside-btn-active')
		}

		jQuery('.streamside-posts').find('.post-row').attr('style', 'display: none;');
		jQuery('.streamside-posts').find('.post-row:eq(0), .post-row:eq(1), .post-row:eq(2)').removeAttr('style');

		jQuery('#streamside-see-all-news').on('click', function(){
			jQuery('.streamside-posts').find('.post-row').removeAttr('style');
			jQuery('#streamside-see-all-news').removeClass('streamside-btn-active');
		});
		var url = document.location.origin;

		jQuery('.photo-gallery > .row').slick({
			slidesToShow: 4,
  			slidesToScroll: 2,
  			nextArrow: '<a href="javascript:;" class="btn-next"><img src="'+url+'/wp-content/themes/antrim/img/right-arrow.png" alt="" /></a>',
        	prevArrow: '<a href="javascript:;" class="btn-prev"><img src="'+url+'/wp-content/themes/antrim/img/left-arrow.png" alt="" /></a>',
        	responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    nextArrow: '<a href="javascript:;" class="btn-next"><img src="'+url+'/wp-content/themes/antrim/img/right-arrow.png" alt="" /></a>',
        			prevArrow: '<a href="javascript:;" class="btn-prev"><img src="'+url+'/wp-content/themes/antrim/img/left-arrow.png" alt="" /></a>',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        	]
		});

		jQuery( ".fas.fa-sort-down" ).click(function() {
			jQuery(this).parent().find('dropdown-menu').addClass('show');
		});

		// Paralax
		var image = document.getElementsByClassName('thumbnail-paralax');

        if(image) {
            new simpleParallax(image, {
                delay: 1,
                scale: 1.3,
                transition: 'cubic-bezier(0,0,0,1)'
            });
        }
		
		// Transfom Capitalize text on tab browser
	    if (jQuery('body.terms-conditions').length == 1) {
		    var val_text = jQuery('.main-banner .banner-content h1').text();
			var val_text = val_text.replace("t", "T");
			jQuery('.main-banner .banner-content h1').text(val_text);	
	    }
	});

})(jQuery, this);

jQuery(document).ready(function() {
	var isIphone = navigator.userAgent.indexOf("iPhone") != -1 ;
	var isIpad = navigator.userAgent.indexOf("iPad") != -1 ;

	// now set one variable for all iOS devices
	var isIos = isIphone || isIpad;
	if(isIos) {
		jQuery('body').addClass('isiOS');
	}
	else {
		jQuery('body').removeClass('isiOS');
	}
});