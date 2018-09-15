<?php
// Add extra functionalities
require get_template_directory().'/inc/thumbnail-sizes.php';
require get_template_directory().'/inc/comments-walker.php';
require get_template_directory().'/inc/filter-main-menu.php';
require get_template_directory().'/inc/filter-footer-menu.php';
require get_template_directory().'/inc/filter-content.php';
require get_template_directory().'/inc/shortcodes.php';
require get_template_directory().'/inc/widgets/main-widgets.php';
require get_template_directory().'/inc/filter-must-see-menu.php';

//Add title tag
add_theme_support('title-tag');

//Remove JQuery migrate
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];

        if ( $script->deps ) { // Check whether the script has any dependencies
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

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

// Script to move all Head scripts to the Footer
function remove_head_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
 } 
 add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

// Add styles and scripts
if (!function_exists('theme_scripts')) :
	function theme_scripts() {
        wp_enqueue_style('theme-styles', get_template_directory_uri().'/style.css');

        //wp_enqueue_script('jquery');
		wp_enqueue_script('theme-scripts', get_template_directory_uri().'/dist/js/main.min.js', false, '2018823', true);
	}
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');

// Add extra class to reply comment link
function replace_reply_link_class($class){
    $class = str_replace("class='comment-reply-link", "class='comments__list-item-reply comment-reply-link", $class);
    return $class;
}
add_filter('comment_reply_link', 'replace_reply_link_class');

// ADD extra class to edit comment link
function class_edit_post_link($output) {
    $output = str_replace('class="comment-edit-link"', 'class="comments__list-item-edit comment-edit-link"', $output);
    return $output;
}
add_filter('edit_comment_link', 'class_edit_post_link');

// ACF Options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}