<?php
// Add extra functionalities
require get_template_directory().'/inc/comments-walker.php';

/**
 * Enable custom logo
 *
 * @return void
 */
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

// Add styles and scripts
if (!function_exists('theme_scripts')) :
	function theme_scripts() {
		wp_enqueue_style('theme-styles', get_template_directory_uri().'/style.css');
		wp_enqueue_script('theme-scripts', get_template_directory_uri().'/dist/js/main.min.js', array('jquery'), '2018823', true);
	}
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');