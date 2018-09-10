<!-- Nav posts -->
<section class="nav-posts">
    <?php
    global $query_string;

    $posts = query_posts($query_string);

    if (have_posts()) : while (have_posts()) : the_post();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="nav-posts__social">
                    <ul class="nav-posts__list">
                        <li class="nav-posts__btn">
                            <a href="#" class="nav-posts__btn-link nav-posts__btn-link--fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-posts__btn">
                            <a href="#" class="nav-posts__btn-link nav-posts__btn-link--tt">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-posts__btn">
                            <a href="#" class="nav-posts__btn-link nav-posts__btn-link--gplus">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="nav-posts__buttons">
                    <ul class="nav-posts__list nav-posts__list--right">
                        <li class="nav-posts__btn">
                            <?php
                            $prevPost = get_previous_post();

                            if (!empty($prevPost)):
                            ?>
                            <a href="<?= esc_url(get_permalink($prevPost->ID)); ?>" class="nav-posts__btn-link" title="<?= esc_attr($prevPost->post_title); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-previous.svg" alt="" class="nav-posts__btn-icon">
                            </a>
                            <?php endif; ?>
                        </li>
                        <li class="nav-posts__btn">
                            <?php
                            $cat = get_the_category(get_the_ID());

                            $random = new WP_Query(array(
                                //'category_name' => $cat[0]->slug,
                                'posts_per_page' => 1,
                                'orderby' => 'rand',
                                'fields' => 'ids'
                            ));
                            ?>
                            <a href="<?= esc_url(get_permalink($random->posts[0])); ?>" class="nav-posts__btn-link" title="<?= esc_attr(get_the_title($random->posts[0])); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-random.svg" alt="" class="nav-posts__btn-icon">
                            </a>
                        </li>
                        <li class="nav-posts__btn">
                            <?php
                            $nextPost = get_next_post();

                            if (!empty($nextPost)):
                            ?>
                            <a href="<?= esc_url(get_permalink($nextPost->ID)); ?>" class="nav-posts__btn-link" title="<?= esc_attr($nextPost->post_title); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-next.svg" alt="" class="nav-posts__btn-icon">
                            </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
</section>
<!-- Nav posts -->