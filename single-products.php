<?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content-products', get_post_type() );
    endwhile;
?>
