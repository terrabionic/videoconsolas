<?php
/**
 * Register widget for sidebar
 *
 */
function banner_sidebar_widgets_init() {
	register_sidebar( array(
		'name'          => 'Banner for sidebar',
		'id'            => 'banner_sidebar',
		'before_widget' => '<div class="banner-sidebar__container">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'banner_sidebar_widgets_init' );

/**
 * Register widget for sidebar 2
 *
 */
function banner_sidebar2_widgets_init() {
	register_sidebar( array(
		'name'          => 'Banner for sidebar 2',
		'id'            => 'banner_sidebar2',
		'before_widget' => '<div class="banner-sidebar__container">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'banner_sidebar2_widgets_init' );
?>