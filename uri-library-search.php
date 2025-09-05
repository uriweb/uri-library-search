<?php
/**
 * Plugin Name: URI Library Search
 * Plugin URI: http://www.uri.edu
 * Description: A Search Box for the URI Library homepage
 * Version: 1.0.1
 * Author: URI Web Communications
 * Author URI: https://today.uri.edu/
 *
 * @author: Alexandra Gauss <alexandra_gauss@uri.edu>
 * @package uri-library-search
 */

// Block direct requests
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

define( 'URI_LIBRARY_SEARCH_DIR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Returns version from package.json to be used for cache busting
 *
 * @return str
 */
function uri_library_search_cache_buster() {
	static $cache_buster;
	if ( empty( $cache_buster ) && function_exists( 'get_plugin_data' ) ) {
		$values = get_plugin_data( URI_LIBRARY_SEARCH_DIR_PATH . 'uri-library-search.php', false );
		$cache_buster = $values['Version'];
	} else {
		$cache_buster = gmdate( 'Ymd', strtotime( 'now' ) );
	}
	return $cache_buster;
}

/**
 * Include css and js
 */
function uri_library_search_enqueues() {

	wp_register_style( 'uri-library-search-css', plugins_url( '/css/style.built.css', __FILE__ ), array(), uri_library_search_cache_buster(), 'all'  );
	wp_enqueue_style( 'uri-library-search-css' );

	//Only Enqueue script if page has shortcode 
	global $post;
	if ( is_a( $post, 'WP_POST' ) && has_shortcode( $post->post_content, 'uri-library-search')) {
		wp_register_script( 'uri-library-search-js', plugins_url( '/js/script.built.js', __FILE__ ), array('jquery'), uri_library_search_cache_buster(), true );
	wp_enqueue_script( 'uri-library-search-js' );

	}

	// Enqueue Dashicons 
	wp_enqueue_style( 'dashicons' );

}
add_action( 'wp_enqueue_scripts', 'uri_library_search_enqueues' );


// Include shortcode
include( URI_LIBRARY_SEARCH_DIR_PATH . 'inc/uri-library-search-shortcode.php' );

// Include search box 
include( URI_LIBRARY_SEARCH_DIR_PATH . 'inc/uri-library-search-box.php' );
