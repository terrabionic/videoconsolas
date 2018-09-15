<?php
/**
 * Register must see menu
 *
 * @return void
 */
function register_must_see_menu() {
    register_nav_menus(array(
        'must-see' => __('Tienes que ver', constant('DOMAIN_NAME')),
    ));
}
add_action('init', 'register_must_see_menu');

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_must_see_item_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'must-see' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'sidebar__must-see-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_must_see_item_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_must_see_link_atts($atts, $item, $args) {
    if ('must-see' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "sidebar__must-see-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_must_see_link_atts', 10, 3);