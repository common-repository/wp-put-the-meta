<?php 
/*

Plugin Name: WP Put The Meta
Description: This simple plugin will allow you to put the contents of a custom field where you put the shortcode [putthemeta key=""] where key is the key of the requested custom field.
Author: Aubrey Portwood
Plugin URI: http://bitbucket.org/enethrie/wp-put-the-meta
Author URI: http://enethrie.com/
Version: 0.1

	WP-Ref:
	
		http://codex.wordpress.org/Function_Reference/get_post_meta

*/


function wpPutTheMeta($atts){

	global $post;

	extract( shortcode_atts( array(
		'key' => '0'
	), $atts ) );
	
	return get_post_meta($post->ID, $key, true);

}

add_shortcode('putthemeta','wpPutTheMeta');


?>