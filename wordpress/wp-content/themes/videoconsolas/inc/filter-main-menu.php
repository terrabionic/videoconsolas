<?php
/**
 * Register menus
 *
 * @return void
 */
function register_my_menu() {
    register_nav_menu('main-menu', __('Menú principal', constant('DOMAIN_NAME')));
}
add_action('init', 'register_my_menu');

function nav_menu_submenu_class($classes, $args, $depth) {
    if (in_array('sub-menu', $classes) && 'main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-submenu';
    }

    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'nav_menu_submenu_class', 10, 3);

function nav_menu_item_filter($args, $item, $depth) {
    if ($args->theme_location == 'main-menu' && in_array('menu-item-has-children', $item->classes)) {
        $args->link_before = '';
        $args->link_after  = '<span class="header__nav-link-arrow"></span>';
    }
    return $args;
}
add_filter('nav_menu_item_args', 'nav_menu_item_filter', 10, 3);

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_nav_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-item list-inline-item';
    }

    if (in_array('menu-item-has-children', $classes) && 'main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-item--has-children';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_link_atts($atts, $item, $args) {
    if ('main-menu' === $args->theme_location) {
        $atts['class'] = "header__nav-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);