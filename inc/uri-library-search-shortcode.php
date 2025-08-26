<?php

/**
 * URI LIBRARY SEARCH SHORTCODE
 * 
 * @package uri-library-search
 */

/**
 * Create a shortcode for the library search box
 */

function uri_library_search_shortcode ($attributes, $shortcode) {
    //default attributes 
    $attributes = shortcode_atts (
        array(
            'before' => null,
            'after' => null
        ),
        $attributes, $shortcode
    );

    $output = uri_library_search_box(); 

    return $output;
}

add_shortcode( 'uri-library-search', 'uri_library_search_shortcode');