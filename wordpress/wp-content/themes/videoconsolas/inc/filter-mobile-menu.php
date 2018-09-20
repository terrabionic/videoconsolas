<?php
/**
 * Register mobile menu
 *
 * @return void
 */
function register_mobile_menu() {
    register_nav_menus(array(
        'mobile-menu' => __('Menú móvil', constant('DOMAIN_NAME')),
    ));
}
add_action('init', 'register_mobile_menu');

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_mobile_menu_item_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'mobile-menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'mobile-menu__item';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_mobile_menu_item_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_mobile_menu_link_atts($atts, $item, $args) {
    if ('mobile-menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "mobile-menu__link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_mobile_menu_link_atts', 10, 3);