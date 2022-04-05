<?php /*** Template part for displaying posts ** @link https://developer.wordpress.org/themes/basics/template-hierarchy/ ** @package Energy_Security*/  ?>

<div class="container">
    <div class="top-bg-section " style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-size: cover;background-position: center;">          
        <div class="dark-bg"></div>
        <div class="title-sec">
            <div class="col-md-6">
            <h3><?php echo get_post_meta( get_the_ID(), '_wporg_box_id', true ) ?></h3>
            <!-- <?php echo get_post_meta( get_the_ID(), '_wporg_box_id', true ) ?> -->
            </div>
        </div>            
    </div>
</div>

<div class="category-single-full container">
    <?php the_content(sprintf(wp_kses(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'energy-security'), array('span' => array('class' => array())
    )), wp_kses_post(get_the_title())));wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'energy-security'),'after' => '</div>'));?>
</div>