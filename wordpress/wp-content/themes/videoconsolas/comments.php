<div class="comments">
	<div class="comments__container">
		<?php if (have_comments()) : ?>
			<!-- Commnets list -->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="comments__list-title"><?php printf( '<span>' . esc_html__('%1$s respuesta'.(get_comments_number() > 1 ? 's' : '').' a "'.get_the_title(get_the_ID()).'"', constant('DOMAIN_NAME')) . '</span>', get_comments_number() ); ?></h3>

					<div class="comments__list-container">
					<?php 
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size' => 0,
						'walker' => new comment_walker(),
						//'format' => 'xhtml',
						) 
					);
					?>
					</div>

					<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
					<nav class="comments__nav">
						<h5 class="comments__nav-title"><?php esc_html_e('Navegar comentarios', constant('DOMAIN_NAME')); ?></h5>
						<div class="comments__pag">
							<?php paginate_comments_links(); ?>
						</div>
					</nav>
					<?php endif; ?>
				</div>
			</div>
			<!-- End comments list -->
		<?php endif; ?>

		<?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
		<!-- Comments closed -->
		<div class="row">
			<div class="col-lg-12">
				<p class="comments__closed"><?php esc_html_e('Comments are closed.', constant('DOMAIN_NAME')); ?></p>
			</div>
		</div>
		<!-- End comments closed -->
		<?php endif; ?>

		<!-- Comments form -->
		<div class="row">
			<div class="col-lg-12">
				<div class="comments__container-form">
				<?php
				$fields =  array(
					'author' =>
					'<p class="comments__form-p"><label for="author" class="comments__form-label">'.esc_html__('Nombre', constant('DOMAIN_NAME')).
					($req ? '<span class="required">*</span>' : '').'</label>'.
					'<input id="author" class="comments__form-field comments__form-field--input" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30"'.$aria_req.' /></p>',
					'email' =>
					'<p class="comments__form-p"><label for="email" class="comments__form-label">'.esc_html__('Email', constant('DOMAIN_NAME')).
					($req ? '<span class="required">*</span>' : '').'</label>'.
					'<input id="email" class="comments__form-field comments__form-field--input" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.' /></p>',
				);

				$args = array(
					'title_reply_before' => '<h3 class="comments__form-title">',
					'title_reply_after' => '</h3>',
					'class_form' => 'comments__form',
					'class_submit' => 'comments__form-submit btn btn-primary',
					'label_submit' => esc_html__('Publicar comentario', constant('DOMAIN_NAME')),
					'comment_field' => '<p class="commnets__form-p"><label for="comment" class="comments__form-label">'.esc_html__('Comentario', constant('DOMAIN_NAME')).
										'</label><textarea id="comment" class="comments__form-field comments__form-field--textarea" name="comment" cols="45" rows="8" aria-required="true">'.
										'</textarea></p>',
					'fields' => apply_filters('comment_form_default_fields', $fields),
					'comment_notes_before' => '',
					'logged_in_as' => '<p class="comments__form-logged">'.sprintf(__('Conectado como <a class="comments__form-logged-link" href="%1$s">%2$s</a>. <a class="comments__form-logged-link" href="%3$s" title="Salir de esta cuenta">¿Salir?</a>', constant('DOMAIN_NAME')), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))).'</p>',
				);

				comment_form($args);
				?>
				</div>
			</div>
		</div>
		<!-- End comments form -->
	</div>
</div>