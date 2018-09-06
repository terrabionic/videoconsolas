<?php
/**
 * Register footer menus
 *
 * @return void
 */
function register_footer_menu() {
    register_nav_menus(array(
        'footer-menu-1' => __('Menú pie de página 1', constant('DOMAIN_NAME')),
        'footer-menu-2' => __('Menú pie de página 2', constant('DOMAIN_NAME')),
        'footer-menu-3' => __('Menú pie de página 3', constant('DOMAIN_NAME'))
    ));
}
add_action('init', 'register_footer_menu');

/**
 * Add custom class to menu item
 *
 * @param [array] $classes
 * @param [object] $item
 * @param [object] $args
 * @return void
 */
function special_footer_item_class($classes, $item, $args) {
    if (in_array('menu-item', $classes) && ('footer-menu-1' === $args->theme_location || 'footer-menu-2' === $args->theme_location || 'footer-menu-3' === $args->theme_location) && $item->menu_item_parent === '0') {
        $classes[] = 'footer__links-menu-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class' , 'special_footer_item_class' , 10 , 3);

/**
 * Add custom class to menu link
 *
 * @param [array] $atts
 * @param [object] $item
 * @param [onject] $args
 * @return void
 */
function add_footer_link_atts($atts, $item, $args) {
    if (('footer-menu-1' === $args->theme_location || 'footer-menu-2' === $args->theme_location || 'footer-menu-3' === $args->theme_location) && $item->menu_item_parent === '0') {
        $atts['class'] = "footer__links-menu-link";
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_footer_link_atts', 10, 3);