<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				

				<div class="entry-content">
					<div class="error-image">
						<img src="<?php echo get_stylesheet_directory_uri() . '/img/map.png'; ?>" />
					</div>
					<div class= "error-message">
						<h2>Whoops, Took a Wrong Turn...</h2>
						<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you. </p>
						<p>Feel free to take a look around our <a href="http://localhost/accelerate/blog/">blog</a> or some of our featured <a href="http://localhost/accelerate/case-studies/">work</a>.</p>
					</div>
					
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>