<?php
	get_header();
?>
<div class="container blog-container">

<div class="col-md-4">
	<h2 class="blog-main-head" style="color: #999999;">BLOG</h2>
	<h3 class="blog-sub-head">NEWS ROOM</h3>
</div>

<div class="col-md-12 full-cont-blog-post">
	<div class="row g-5">
		<div class="col-md-4">
			<img src="images/image 28.png" alt="">
		</div>
		<div class="col-md-8">
			<span class="post-date">March 2021</span>
		   <a href="blog-single.html"><h4 class="blog-post-heading">U.S. Strikes India Deal in Bid to Loosen China’s Grip on Solar Panels</h4></a> 
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
		</div>
	</div>
</div>

<hr class="blog-hr">

<div class="blog-post-sec">
	<div class="row g-5">		
		<?php if ( have_posts() ) : ?>			
		<?php while ( have_posts() ) :				
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<div class="col-4">
			<img src="images/image 28 (2).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"> <h4 class="blog-post-heading blog-post-heading-col-4">Canadian Solar raises US$150 million towards expanding energy storage presence</h4></a>
		   
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (3).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"><h4 class="blog-post-heading blog-post-heading-col-4">Solar mandate framed as weapon in emissions fight</h4></a>
			
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (4).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"><h4 class="blog-post-heading blog-post-heading-col-4">Boralex commissions French solar floater</h4></a>
			
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (5).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"> <h4 class="blog-post-heading blog-post-heading-col-4">Report details regional solar potential</h4></a>
		   
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (6).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"> <h4 class="blog-post-heading blog-post-heading-col-4">SEC investigating Tesla over whistleblower solar panel claims</h4></a>
		   
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (7).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"><h4 class="blog-post-heading blog-post-heading-col-4">JA Solar Organizes Webinar to Introduce Best LCOE Solutions for Japanese PV Market</h4></a>
			
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (8).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"><h4 class="blog-post-heading blog-post-heading-col-4">Campuswide solar project begins this month with installation of parking lot solar arrays </h4></a>
			
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
		<div class="col-4">
			<img src="images/image 28 (9).png" alt="">
			<span class="post-date">March 2021</span>
			<a href="blog-single.html"><h4 class="blog-post-heading blog-post-heading-col-4">Reliance raises $736 mn in green loan to fund REC Solar acquisition</h4></a>
			
			<p class="post-description p-d">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
		</div>
	</div>
</div>        
</div>
<div class="container">
<div class="blogs-load-more-btn-sec">
<button class="btn">Load more</button>
</div>
</div>

	<main id="primary" class="site-main">

		

	</main><!-- #main -->

<?php
get_footer();
