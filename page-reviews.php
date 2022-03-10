<?php
get_header();
?>
<?php if (is_active_sidebar('review-widget-area')) : ?>
    <div id="secondary-sidebar" class="review-widget-area">
        <?php dynamic_sidebar('review-widget-area'); ?>
    </div>
<?php endif; ?>
<?php
get_footer();