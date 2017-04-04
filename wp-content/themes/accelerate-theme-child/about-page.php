<?php
/*
 * Template Name: Custom About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="service-content">
	<div class="site-content">

		<h2 id="our-service">Our Services</h2>
		<p id="service-blurb">We take pride in our clients and the content we create for them.<br>
	Here's a brief overview of our offered services.</p>
			
			<?php query_posts('post_type=services') ?>
			  <?php while (have_posts()) : the_post(); 
			  	$service_title = get_field('service_title');
			  	$service_image = get_field('service_image');
			  	$size="medium";?>
			 <div class="row">
			  <div class="service-images">
			  	<?php if($service_image){echo wp_get_attachment_image($service_image, $size); } ?>
			  </div>
			  <div class="service-desc">
			  	<h2><?php echo $service_title; ?></h2>
			  	<p><?php the_content(); ?> </p>
			  </div>
			 </div>		
			   <?php endwhile; //end of loop ?> 
			   <?php wp_reset_query(); ?>
	   <hr />
				
	</div>
</section>
<section class="about-contact">
	
	<div class="site-content">
		<h2 id="contact-text"> Interested in working with us? 
		<a class="button" id="contact-button" href="staging.zlynndesign.com">Contact Us</a></h2>
	</div>

</section>
			
	
	
  



<?php get_footer(); ?>