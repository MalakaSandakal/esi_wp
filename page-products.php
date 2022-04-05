<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Energy_Security
 */

get_header();
?>

<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
    );
    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) {
        $loop->the_post();
        ?>
        <div class="entry-content">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </div>
        <?php
}?>

<?php
get_sidebar();
get_footer();
