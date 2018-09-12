<?php get_header(); ?>

<?php get_template_part('template-parts/hero-section'); ?>

    <!-- Posts list -->
    <section class="posts-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-last">
                    dsadasdas
                </div>
                <div class="col-lg-8 order-first">
                    <?php get_template_part('template-parts/banner-content-section'); ?>
                    <div class="posts-list__container">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="posts-list__entry posts-list__entry--large">
                            <a href="<?= esc_url( get_permalink() ); ?>" class="posts-list__entry-image">
                                <?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail('posts-list-thumbs', array('class' => 'posts-list__entry-thumb'));
                                }
                                ?>
                            </a>
                            <div class="posts-list__entry-caption">
                                <?php the_title( '<h3 class="posts-list__entry-title">', '</h3>' ); ?>
                                <div class="posts-list__entry-meta">
                                    <p class="posts-list__entry-author"><span><?= esc_html('Por: ', constant('DOMAIN_NAME')); ?></span><?php the_author(); ?></p>
                                    <p class="posts-list__entry-date"><?= ucwords(get_the_date('j-F-Y'), '-'); ?></p>
                                </div>
                                <?php get_template_part('template-parts/tags-section'); ?>
                                <div class="posts-list__entry-share">
                                    <span class="posts-list__entry-share-label"><?= esc_html('COMPARTIR', constant('DOMAIN_NAME')); ?></span>
                                    <a href="" class="posts-list__entry-share-btn posts-list__entry-share-btn--fb">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="" class="posts-list__entry-share-btn posts-list__entry-share-btn--tt">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts list -->

<?php get_footer(); ?>