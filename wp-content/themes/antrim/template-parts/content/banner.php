<?php
    $banner_enable = get_field('page_banner_enable', $page_id);
    $banner_image = get_field('page_banner_image', $page_id);
    $banner_text  = get_field('page_banner_description', $page_id);
?>

<?php if($banner_enable == true): ?>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12 middle-banner p-0" style="background-image:url(<?php echo $banner_image['url'] ?>);">
                
                <?php if(strlen($banner_text) >= 1): ?>
                <div class="middle-banner-content">

                    <div class="quote-div">
                    <i class="fas fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <?php echo $banner_text; ?>
                    					
                </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
<?php endif;?>