<?php
/**
 * Register must see menu
 *
 * @return void
 */
function register_must_see_404() {
    register_nav_menus(array(
        'must-see-404' => __('Tienes que ver 404', constant('DOMAIN_NAME')),
    ));
}
add_action('init', 'register_must_see_404');

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_must_see_item_404_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'must-see-404' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'e404__posts-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_must_see_item_404_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_must_see_link_404_atts($atts, $item, $args) {
    if ('must-see-404' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "e404__posts-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_must_see_link_404_atts', 10, 3);