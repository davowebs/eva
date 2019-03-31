<?php
/**
 * eva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eva
 */

if ( ! function_exists( 'eva_setup' ) ) :

/**
 * Enqueue scripts and styles.
 */
function eva_scripts() {
	wp_enqueue_style( 'eva-style', get_stylesheet_uri() );

	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/eva.min.css',false,'1.1','all');

	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '20151215', true );

	wp_enqueue_script( 'eva', get_template_directory_uri() . '/assets/js/eva.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eva_scripts' );

endif;

/* Remove emoji */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* Disable the Gutenberg editor. */
function remove_block_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_script( 'wp-embed' );
	}
	add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
	remove_action( 'wp_head',      'wp_oembed_add_discovery_links'         );

	/* Remove query string */
	function remove_query_strings() {
		if(!is_admin()) {
			add_filter('script_loader_src', 'remove_query_strings_split', 15);
			add_filter('style_loader_src', 'remove_query_strings_split', 15);
		}
	 }
	 
	 function remove_query_strings_split($src){
		$output = preg_split("/(&ver|\?ver)/", $src);
		return $output[0];
	 }
	 add_action('init', 'remove_query_strings');
	 remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
	 remove_action( 'wp_head', 'feed_links', 2 ); 

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');


function remove_version() {
	return '';
}
add_filter('the_generator', 'remove_version');
