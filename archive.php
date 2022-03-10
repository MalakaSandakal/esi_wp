<?php get_header();?>

<section id="blogs-sec">
    <div class="container blog-container">
        <div class="col-md-4">
            <h2 class="blog-main-head" style="color: #999999;">BLOG</h2>
            <h3 class="blog-sub-head">NEWS ROOM</h3>
        </div>
        <div class="blogs-archs-container">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1
                );
                $query = new WP_query($args);
                if ($query->have_posts())
            { ?>	
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="col-md-12 full-cont-blog-post">
                        <div class="row g-5">
                            <div class="col-md-4">
                                <img src="<?php echo the_post_thumbnail_url() ?>" alt="">
                            </div>
                            <div class="col-md-8">
                                <span class="post-date"><?php echo get_the_date() ?></span>
                                <a href="<?php echo get_permalink() ?>" target="_blank">
                                    <h4 class="blog-post-heading"><?php the_title() ?></h4>
                                </a>
                                <?php the_excerpt() ?>
                            </div>
                        </div> 
                    </div> 
                <?php endwhile; ?> 
            <?php } ?> 

            <hr class="blog-hr">
            
            <div class="blog-post-sec">
                <div class="row"> 
                    <?php echo do_shortcode("[ajax_load_more posts_per_page='1' button_label='Load More' scroll='false' offset='1']"); ?>
                </div>        
            </div>
        </div>        
    </div>
</section>



<?php
get_footer();