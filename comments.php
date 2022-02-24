<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Energy_Security
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comments-section">
    <h5 class="comment-sec-head">Post A Comment</h5>
    <?php comment_form();?>
    <div class="old-comments-sec">
        <div class="single-comment">
            <?php 
				wp_list_comments(
					array(
						'section' => 'div'
					)
				);
			?>
        </div>
    </div>
</div>