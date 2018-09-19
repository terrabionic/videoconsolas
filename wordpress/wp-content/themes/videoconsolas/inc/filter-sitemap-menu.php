<?php
/**
 * Register sitemap menu
 *
 * @return void
 */
function register_sitemap_menu() {
    register_nav_menus(array(
        'sitemap' => __('Mapa del Sitio', constant('DOMAIN_NAME')),
    ));
}
add_action('init', 'register_sitemap_menu');

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_sitemap_item_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && 'sitemap' === $args->theme_location && $item->menu_item_parent === '0') {
        $classes[] = 'sitemap__menu-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_sitemap_item_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_sitemap_link_atts($atts, $item, $args) {
    if ('sitemap' === $args->theme_location && $item->menu_item_parent === '0') {
        $atts['class'] = "sitemap__menu-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_sitemap_link_atts', 10, 3);