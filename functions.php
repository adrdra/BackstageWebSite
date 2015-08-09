<?php
//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'backstagetheme' ),
	) );


?>