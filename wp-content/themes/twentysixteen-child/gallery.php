<?php 
/**
 * Template Name: gallery
 * Description: Page template without sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main instagram-image" role="main">
		<?php

			$instagram_access_token = get_post_custom_values("instagram_access_token")[0];
			$instagram_account_id = get_post_custom_values("instagram_account_id")[0];

			$call = file_get_contents('https://api.instagram.com/v1/users/'.$instagram_account_id.'/media/recent/?access_token='.$instagram_access_token);
			
			$obj = json_decode($call)->data;
			for( $i = 0; $i < sizeof($obj); $i++){
				echo "<div class='instagram-image-class'>";
				$img = $obj[$i]->images->standard_resolution->url;
				echo '<img width="315px" alt="'.$obj[$i]->caption->text.'" src="' . $img . '"/>';
				if($obj[$i]->caption){
					echo '<div class="instagram-image-caption">' .$obj[$i]->caption->text. '</div>';
				}
				echo "</div>";
			};

		?>
	</main>
</div>
<?php get_footer(); ?>