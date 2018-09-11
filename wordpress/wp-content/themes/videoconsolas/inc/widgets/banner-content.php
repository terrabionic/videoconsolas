<?php
/**
 * Register widget for content
 *
 */
function banner_content_widgets_init() {
	register_sidebar( array(
		'name'          => 'Banner for content',
		'id'            => 'banner_content',
		'before_widget' => '<div class="banner-content__container">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'banner_content_widgets_init' );
?>