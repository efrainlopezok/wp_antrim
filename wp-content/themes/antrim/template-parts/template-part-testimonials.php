<!-- testimonials -->

<?php 
$bg_image = 0;
$bg_image2 = 0;

$bg_desk_image = get_option('testimonials-image');
$bg_desk_image2 = get_option('testimonials-image2');

$bg_mobile_image = get_option('testimonials-mobile-image');
$bg_mobile_image2 = get_option('testimonials-mobile-image2');

$bg_image = $bg_desk_image;
$bg_image2 = $bg_desk_image2;
?>


<!-- <section class="testimonials testimonials_background_1 dinamic-section" style="background-image: url(<?php echo $bg_image; ?>), url(<?php echo $bg_image2; ?>); background-position: right bottom, left top; ">
        <?php 
            $active = true;
            $query = new WP_query(
            array(
                'post_type' => 'testimonials',
                'post-status' => 'publish',
                'posts_per_page' => '-1',
                'orderby' => 'date',
                'order' => 'desc'
            ));
        ?> 
</section>-->

<section class="parallax-window">
        <?php 
            $active = true;
            $query = new WP_query(
            array(
                'post_type' => 'testimonials',
                'post-status' => 'publish',
                'posts_per_page' => '-1',
                'orderby' => 'date',
                'order' => 'desc'
            ));
        ?> 
    <img class="thumbnail-paralax" src="<?php echo $bg_image; ?>">
</section>

<div class="container-fluid px-5">
<div class="testimonials-content">
    <div class="testimonials-slider">
        <?php if($query->have_posts()):?>

            <?php while($query->have_posts()): ?>

                <?php 

                    $query->the_post(); ?>

                    <div data-aos="fade" data-aos-duration="600">

                        <i class="fas fa-quote-left"></i>

                        <article><?php the_content(); ?></article>

                        <hr>

                        <h5><?php the_title(); ?></h5>

                    </div>

            <?php endwhile; ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

            </div>

        </div>
        </div>
<section class="testimonials testimonials_background_2 dinamic-section" style="background-image: url(<?php echo $bg_image2; ?>)">
<!-- <img src="<?php echo $bg_image; ?>" style="width:100%; clear:both;" />
<img src="<?php echo $bg_image2; ?>" style="width:100%; clear:both" /> -->
        <?php 
            $active = true;
            $query = new WP_query(
                array(
                    'post_type' => 'testimonials',
                    'post-status' => 'publish',
                    'posts_per_page' => '-1',
                    'orderby' => 'date',
                    'order' => 'desc'
                ));
        ?>
</section>
<!-- /testimonials -->