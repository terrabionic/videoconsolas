
            <!-- The content -->
            <div class="row">
                <div class="col-lg-12">
                        
                    <div class="content__container">
                        <h1 class="content__entry-title">
                            <?php the_title(); ?>
                        </h1>

                        <?php
                        if (!is_page_template('page-privacy.php') && !is_page_template('page-sitemap.php')) {
                            get_template_part('template-parts/tags-section');
                            get_template_part('template-parts/share-buttons-section');
                        }
                        ?>

                        <div class="content__entry-body">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End the content -->

            <?php if (!is_page_template('page-privacy.php') && !is_page_template('page-sitemap.php')) : ?>
            <!-- Share this -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="share-post">
                        <img src="<?= get_field('share_inner_image_content', 'option') ? get_field('share_inner_image_content', 'option') : get_template_directory_uri().'/dist/images/you-liked.svg'; ?>" class="share-post__image" />
                        <div class="share-post__buttons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url(get_the_permalink($post->ID)); ?>" target="_blank" class="share-post__btn share-post__btn--fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <img src="<?= get_field('icon_middle_share_inner_content', 'option') ? get_field('icon_middle_share_inner_content', 'option') : get_template_directory_uri().'/dist/images/heart.svg' ?>" class="share-post__btn share-post__btn--false">
                            <a href="https://twitter.com/home?status=<?= urlencode(get_the_title($post->ID))." - ".esc_url(get_the_permalink($post->ID)); ?>" target="_blank" class="share-post__btn share-post__btn--tt">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End share this -->
            <?php endif; ?>