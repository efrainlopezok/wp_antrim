<?php
	$fb_url = get_option('facebook-url');
	$ins_url = get_option('instagram-url');
?>
<!-- instagram gallery -->
<section class="instagram-gallery dinamic-section" data-aos="fade-up">
	<h2>tell them you've <strong>
		<a target="__blank" href="https://www.instagram.com/explore/tags/gonestreamside/">#gonestreamside</a></strong> 
		<a class="instagram-link"><i class="fab fa-instagram" aria-hidden="true"></i></a> 
		<a class="facebook-link" style="text-decoration:none;">&nbsp;<img src="<?php echo get_site_url().'/wp-content/themes/antrim/img/f_logo_footer.png' ?>" alt=""></a>
	</h2>

	<div class="container-fluid">
		
		<div class="row  main-gall-row">


		<h3><?php echo $instagram_title; ?></h3>
           <!-- Start Code Instagram -->
            <div class="" id="antrim_instafeed">
            <script>
				var count_ins = 1;
				var aos_delay = 0;
            jQuery(document).ready(function($) {
                // var token = '11442789705.1677ed0.94d72067568945368dbdde9581db1c0f', // get from the instagram app
                    var token = '8471651642.5501314.c25d31e3c78945728151395d2bbc9c4b',
                    userid = '5501314708234084b592c0d07d61832b',
                    
                    num_photos = 9; // to show how many photos you want to display
                jQuery.ajax({
                    url: 'https://api.instagram.com/v1/users/self/media/recent',
                    dataType: 'json',
                    type: 'GET',
                    data: {
                        access_token: token,
                        count: num_photos
                    },
                    success: function(data) {
                        console.log(data);
                        var counter = 1;
                        //console.log(data);
                        for (x in data.data) {
                        var hightUrl = data.data[x].images.standard_resolution.url;
                           console.log('image is: '+ hightUrl);
                            //var text_overlay = data.data[x].caption.text;
                            
                            var text_overlay = '';
                            var text_over = '';
                            //if(data.data[x].caption){
                                text_overlay = data.data[x].caption.text;
                                if(text_overlay.length > 15){
                                    text_overlay = text_overlay.split(' ');
                                    for(var y=0; y<=15; y++ ){
                                        if(text_overlay[y] == null){
                                            break;
                                        }
                                        text_over += text_overlay[y]+' ';
                                    }
                                }
                                else {
                                    text_over = text_overlay;
                                }
                                //jQuery('#salts_instafeed').append('<div class="col-6 col-sm-6 col-md-4 col-lg-6 " style="background-image: url(' + hightUrl + ')" onclick="window.open(\''+data.data[x].link+'\',\'_blank\');"><div class="caption"><i class="fa fa-instagram"></i>'+text_over+'</div></div>');     
                            //}else{
								
                                if(count_ins == 1){
									jQuery('#antrim_instafeed').append('<div class="instagram-left-images"><div data-aos="fade-left" data-aos-delay="' + aos_delay + '" class="img-instagram photo-'+counter+'" style="background-image: url(' + hightUrl + ');background-size:cover;background-position:center;" onclick="window.open(\''+data.data[x].link+'\',\'_blank\');"><div class="caption"></div></div></div>');

									count_ins++;
									//aos_delay = aos_delay + 150;

								}else if(count_ins == 2){

									jQuery('#antrim_instafeed').append('<div class="instagram-right-images"><div data-aos="fade-left"  data-aos-delay="' + aos_delay + '" class="img-instagram photo-'+counter+'" style="background-image: url(' + hightUrl + ');background-size:cover;background-position:center;" onclick="window.open(\''+data.data[x].link+'\',\'_blank\');"><div class="caption"></div></div></div>');

									count_ins++;
									//aos_delay = aos_delay + 150;

								}else{
									jQuery('#antrim_instafeed').find('.instagram-right-images').append('<div data-aos="fade-left" data-aos-delay="' + aos_delay + '" class="img-instagram photo-'+counter+'" style="background-image: url(' + hightUrl + ');background-size:cover;background-position:center;" onclick="window.open(\''+data.data[x].link+'\',\'_blank\');"><div class="caption"></div></div>');

									//aos_delay = aos_delay + 150;
								}
                            //}
                            counter++;
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
            </script>
			</div>
			
				<!-- <div class="cta">
					<a href="https://www.instagram.com/pairingsalts/" class="btn c-red" target="_blank">Follow Us <i class="fa fa-instagram"></i></a> 
				</div> -->
            <!--/ End Code Instagram -->
    </div>


			<!--<div class="col-12 col-sm-6 col-lg-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/29-IMG_2384rev.jpg" alt="Instragram Image">
			</div>
			<div class="col-12 col-sm-6 col-lg-10">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/70-DJI_0121rev.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/70-DJI_0121rev.jpg" alt="Instragram Image">
							</div>
							<div class="col-12 col-sm-6 col-lg-2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_DSC3257_DxOd REV.jpg" alt="Instragram Image">
							</div>
						</div>
					</div>
				</div>
			</div>-->
		</div> 
	</div>
</section>
<!-- /instagram gallery -->