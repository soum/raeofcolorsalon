<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//wp_enqueue_script( "email", "/js/email.js", $in_footer);
wp_enqueue_script( 'script', get_template_directory_uri() . '-child/js/email.js', array ( 'jquery' ), 1.0, true);