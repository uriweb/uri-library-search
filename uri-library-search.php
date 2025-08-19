<?php
/**
 * Plugin Name: URI Library Search
 * Plugin URI: http://www.uri.edu
 * Description: A Search Box for the URI Library homepage
 * Version: 0.1.0
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
 * Include css and js
 */
function uri_library_search_enqueues() {

	wp_register_style( 'uri-library-search-css', plugins_url( '/css/style.built.css', __FILE__ ) );
	wp_enqueue_style( 'uri-library-search-css' );

	wp_register_script( 'uri-library-search-js', plugins_url( '/js/script.built.js', __FILE__ ) );
	wp_enqueue_script( 'uri-library-search-js' );

}
add_action( 'wp_enqueue_scripts', 'uri_library_search_enqueues' );


// Include shortcode
include( URI_LIBRARY_SEARCH_DIR_PATH . 'inc/uri-library-search-shortcode.php' );

// Include search box 
include( URI_LIBRARY_SEARCH_DIR_PATH . 'inc/uri-library-search-box.php' );