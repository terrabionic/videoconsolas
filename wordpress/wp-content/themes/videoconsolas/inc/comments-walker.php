<?php
/**
 * Custom Walkers to comment template
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Orbital
 * @since 1.0
 */

class comment_walker extends Walker_Comment {
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

	// constructor – wrapper for the comments list
	function __construct() {
	?>
		<div class="comments__list">
	<?php
	}

	// start_lvl – wrapper for child comments list
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>
		
		<div class="comments__list comments__list--child">
	<?php
	}

	// end_lvl – closing wrapper for child comments list
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		</div>

	<?php
	}

	// start_el – HTML for comment template
	function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 

		if ( 'article' == $args['style'] ) {
			$tag = 'article';
			$add_below = 'comment';
		} else {
			$tag = 'article';
			$add_below = 'comment';
		} ?>

		<div <?php comment_class(empty($args['has_children']) ? 'comments__list-item' : 'comments__list-item comments__list-item--parent'); ?> id="comment-<?php comment_ID(); ?>">
			<div class="comments__list-item-author" role="complementary">
				<figure class="comments__list-item-author-avatar gravatar"><?= get_avatar($comment, 65); ?></figure>
				<p class="comments__list-item-author-name">
					<a class="comments__list-item-author-link" href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a>
					<span> dice:</span>
				</p>
			</div>
			<div class="comments__list-item-content post-content">
				<div class="comments__list-item-meta post-meta" role="complementary">
					<time class="comments__list-item-date" datetime="<?php comment_date('Y-m-d'); ?>">
						<?= ucfirst(get_comment_date('F j, Y')); ?> a las <a class="comments__list-item-time" href="#comment-<?php comment_ID(); ?>" ><?php comment_time(); ?></a>
					</time>
					<?php edit_comment_link('<p>'.esc_html_e('Editar este comentario', constant('DOMAIN_NAME')).'</p>','',''); ?>

					<?php if ($comment->comment_approved == '0') : ?>
						<p class="comments__list-item-moderation">Your comment is awaiting moderation.</p>
					<?php endif; ?>
				</div>
				<div class="comments__list-item-text">
					<?php comment_text() ?>
				</div>
				<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
			</div>
	<?php
	}

	// end_el – closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

		</div>

	<?php }

	// destructor – closing wrapper for the comments list
	function __destruct() { ?>

		</div>
	
	<?php }

}