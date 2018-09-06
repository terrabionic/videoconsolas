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


/**
 * Add custom class for submenu
 *
 * @param [array] $classes
 * @param [object] $args
 * @param [object] $depth
 * @return void
 */
function nav_menu_submenu_class($classes, $args, $depth) {
    if (in_array('sub-menu', $classes) && 'main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-submenu';
    }

    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'nav_menu_submenu_class', 10, 3);

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_nav_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'main-menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'header__nav-item list-inline-item';
    } elseif ('main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-item list-unstyled';
    }

    if (in_array('menu-item-has-children', $classes) && 'main-menu' === $args->theme_location) {
        $classes[] = 'header__nav-item--has-children';
    }

    if (in_array('menu-item', $classes) && 'main-menu' === $args->theme_location && $item->menu_item_parent !== '0') {
        $classes[] = 'header__nav-item--child';
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
    if ('main-menu' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "header__nav-link";
    } elseif ('main-menu' === $args->theme_location) {
        $atts['class'] = "header__nav-link header__nav-link--child";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);

/**
 * Filtering menu link
 *
 * @param [object] $args
 * @param [object] $item
 * @param [object] $depth
 * @return void
 */
function nav_menu_item_filter($args, $item, $depth) {
    if ($args->theme_location == 'main-menu' && $item->menu_item_parent === '0') {
        $args->link_before = '';
        $args->link_after  = '';
    }

    if ($args->theme_location == 'main-menu' && in_array('menu-item-has-children', $item->classes) && $item->menu_item_parent === '0') {
        $args->link_before = '';
        $args->link_after  = '<span class="header__nav-link-arrow"></span>';
    }

    if ($args->theme_location == 'main-menu' && !in_array('menu-item-has-children', $item->classes) && $item->menu_item_parent !== '0') {
        $args->link_before = '<span class="header__nav-link-dash">- </span>';
        $args->link_after  = '';
    }

    return $args;
}
add_filter('nav_menu_item_args', 'nav_menu_item_filter', 10, 3);