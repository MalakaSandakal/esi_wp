<?php get_header();?>

<section id="blogs-sec">
    <div class="container blog-container">
        <div class="col-md-4">
            <h2 class="blog-main-head" style="color: #999999;">BLOG</h2>
            <h3 class="blog-sub-head">NEWS ROOM</h3>
        </div>
        <div class="blogs-archs-container">
            <?php
            $sticky = get_option('sticky_posts');
            
            if($sticky){

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'orderby' => 'date',

                );

            }else{

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                );

            }                
            
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
                <div class="row" id="posts-ajax" data-count="<?php echo ceil($query->found_posts/9)?>">                     
                    <?php
                    $sticky = get_option('sticky_posts');
                    if($sticky){
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'post__not_in' => get_option( 'sticky_posts'),
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged'=>1
                        );
                        $args1 = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'post__not_in' => get_option( 'sticky_posts'),
                        );
                    }else{
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => '1',
                            'post__not_in' => get_option( 'sticky_posts'),
                            'paged'=>1
                        );
                        $args1 = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'offset' => '1',
                            'post__not_in' => get_option( 'sticky_posts'),
                        );
                    }
                $query = new WP_query($args1);    
                $query = new WP_query($args);
                if ($query->have_posts())
            { ?>	
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="col-4 single-blog-arch">
                    <img src="<?php echo the_post_thumbnail_url()?>" alt="">
                    <span class="post-date"><?php echo get_the_date()?></span>
                    <a href="<?php echo get_permalink()?>">
                    <h4 class="blog-post-heading blog-post-heading-col-4"><?php the_title()?></h4>
                    </a>
                    <?php the_excerpt()?>
                    </div>
                <?php endwhile; ?> 
            <?php } ?> 
                </div>      
            <div class="blogs-load-more-btn-sec">                        
                <button id="load_more">Load More</button> 
            </div>                
            </div>
        </div>        
    </div>
    <!-- <button class="btn" id="loadmore">Load more</button> -->
</section>



<?php
get_footer();