<?php
/**
 * Template Name: Home Page middle
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article>


<?php 

$args = array(
    'post_type' => 'post',
    's' => 'home-page',
    'post_status' => 'publish',
    'orderby'     => 'title', 
    'order'       => 'ASC'        
);
// the query
$the_query = new WP_Query( $args ); ?>


<?php if ( $the_query->have_posts() ) : ?>
	<ul class="home-page-middle">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><?php the_content(); ?></li>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</ul>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</article>
