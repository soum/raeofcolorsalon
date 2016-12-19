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
			print('<h2>Color/Highlights</h2>');
			$color_highlights = get_post_meta( get_the_ID(), 'Color/Highlights' );
			//print(implode($color_highlights,'|'));
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
