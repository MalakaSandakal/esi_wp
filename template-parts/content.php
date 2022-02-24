<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Energy_Security
 */

?>
<div class="single-blog">
        <div class="fixed-right">
            <a href="contact.html"><button class="btn"><i class="fas fa-envelope"></i>CONTACT US</button></a>
        </div>
        <div class="container">
            <div class="single-blog-container">
              <div class="blog-top">
			  	<span class="blog-post-date"><?php energy_security_posted_on();?></span>
                <h2 class="blog-title">
			  	<?php			  	
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?></h2>
				<?php energy_security_post_thumbnail(); ?>
				<?php
					the_content(
						sprintf(
							wp_kses(
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'energy-security' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'energy-security' ),
							'after'  => '</div>',
						)
					);
				?>
              </div> 
			  <?php 
			 	comments_template(); 
			  ?>               
            </div>        
        </div>
    </div>