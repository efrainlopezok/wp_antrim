<div class="container-fluid photo-gallery">

    <div class="row">
    
        <?php
            $galleries = get_field('new_gallery_images', $page_id);
            //Get the images ids from the post_metadata
    
            global $post;
            $count = 0;
            $images = acf_photo_gallery('photo_gallery', $galleries[0]->ID);
    
            //Check if return array has anything in it
    
            if( count($images) ):
    
                //Cool, we got some data so now let's loop over it
    
                foreach($images as $image):
    
                    $id = $image['id']; // The attachment id of the media
    
                    $title = $image['title']; //The title
    
                    $caption= $image['caption']; //The caption
    
                    $full_image_url_original= $image['full_image_url']; //Full size image url
    
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url_original, 375, 375); //Resized size to 262px width by 160px height image url
    
                    $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
    
                    $url= $image['url']; //Goto any link when clicked
    
                    $target= $image['target']; //Open normal or new tab
    
                    $alt = $image['caption']; //Get the alt which is a extra field (See below how to add extra fields)
    
                    $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
    
         
        $count++; ?>
    
        <div class="col-12 <?php if($count <= 4){echo 'gallery-image-visible';} ?>">
    
            <div class="thumbnail">
                <?php //if( !empty($url) ){ ?><a href="<?php echo $full_image_url_original; ?>" data-toggle="lightbox" data-gallery="e-gallery" data-type="image"  data-max-width="1000" data-max-height="800" data-footer="<?php echo $caption = ($caption && $caption != "") ? $caption : ''; ?>"><?php //} ?>
    
                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title=" <?php echo $title; ?>">
                    <?php if ($caption && $caption != ""): ?>
                        <span class="credits-img"><?php echo $caption; ?></span>
                    <?php endif ?>
                    <div><?php //print_r($alt); ?></div>
    
                <?php //if( !empty($url) ){ ?></a><?php //} ?>
    
            </div>
    
        </div>
    
        <?php endforeach; endif; ?>
    
    </div>
    
    </div>