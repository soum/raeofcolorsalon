<?php 
/**
 * Template Name: location
 * Description: Page template without sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="map-container">
	<a href="https://maps.google.com/?q=937 4th Ave,Ford City,16226" target="_blank">
		<img src="https://maps.googleapis.com/maps/api/staticmap?center=40.7707220,-79.5312470&zoom=14&size=800x200&maptype=roadmap&&markers=color:red%7Clabel:S%7C40.7707220,-79.5312470&key=AIzaSyBvUPEUH4HERi76NZPTbS6WEaw8BLWAPgA" />
	</a>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template. No relevant for the project
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
</div>

<?php get_footer(); ?>