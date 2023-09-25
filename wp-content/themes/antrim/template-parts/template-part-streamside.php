<!-- testimonials -->
<section class="streamside streamside-posts page-content dinamic-section">

        <?php
            $query = new WP_Query(array(
                'post_type' => 'streamside',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'asc'
            ));

            
            
        ?>

        <div class="container">
                <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
                    <?php 
                        $post_id = $post->ID;
                        $alt_button = get_field('streamside_button', $post_id);
                        $description = get_field('streamside_description', $post_id);
                        
                    ?>
                        <div class="row post-row">
                            <div class="col-12 col-md-6" data-aos="fade-up">
                                <a href="<?php if(strlen($alt_button['streamside_button_url']) >= 1 ): echo $alt_button['streamside_button_url']; else: the_permalink(); endif; ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <h2><a href="<?php if(strlen($alt_button['streamside_button_url']) >= 1 ): echo $alt_button['streamside_button_url']; else: the_permalink(); endif; ?>"><?php the_title(); ?></a></h2>
                                <p>
                                    <?php echo $description; ?>
                                </p>
                                <a href="<?php if(strlen($alt_button['streamside_button_url']) >= 1 ): echo $alt_button['streamside_button_url']; else: the_permalink(); endif; ?>" class="underline-link"><?php if(strlen($alt_button['streamside_button_text']) >= 1): echo $alt_button['streamside_button_text'];  else: ?>READ MORE >><?php endif; ?></a>
                            </div>
                        </div>
                <?php endwhile; endif; ?>
                <div class="row">
                    <div class="col-12 p-0 d-flex justify-content-center">
                    <button id="streamside-see-all-news" class="ml-4 underline-link"><< SEE ALL NEWS</button>
                    </div>
                </div>
        </div>

        <?php wp_reset_query(); ?>
        
</section>
<!-- /testimonials -->