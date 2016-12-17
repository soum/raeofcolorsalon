<?php
/**
 * Template Name: pricing
 * Description: Page template without sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		$p = get_page();
		print_r($p);
		print("test".$p->filter);
		while ( have_posts() ) : the_post();

			// Include the page content template.
			//get_template_part( 'template-parts/home-top-content', 'page' );
			//get_template_part( 'template-parts/home-middle-content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template. No relevant for the project
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
