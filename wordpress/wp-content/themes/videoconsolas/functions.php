<?php
// Add extra functionalities
require get_template_directory().'/inc/comments-walker.php';
require get_template_directory().'/inc/filter-main-menu.php';
require get_template_directory().'/inc/filter-content.php';
require get_template_directory().'/inc/shortcodes.php';


/**
 * Enable custom logo
 *
 * @return void
 */
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 37,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

/**
 * Remove web field from comment_form
 *
 * @param [array] $fields
 * @return array
 */
function disable_comment_url_field($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url_field');

// Add styles and scripts
if (!function_exists('theme_scripts')) :
	function theme_scripts() {
		wp_enqueue_style('theme-styles', get_template_directory_uri().'/style.css');
		wp_enqueue_script('theme-scripts', get_template_directory_uri().'/dist/js/main.min.js', array('jquery'), '2018823', true);
	}
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');