<!-- Posts list -->
<section class="posts-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="posts-list__switch-buttons">
                    <button class="posts-list__switch-layout posts-list__switch-layout--active posts-list__switch-layout--grid">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25">
                            <g fill-rule="evenodd">
                                <path d="M0 10.1h10.1V0H0v10.1zm1.599-1.6h6.9V1.6h-6.9v6.9zM13.5 10.1h10.1V0H13.5v10.1zm1.599-1.6h6.9V1.6h-6.9v6.9zM0 24.1h10.1V14H0v10.1zm1.599-1.6h6.9v-6.9h-6.9v6.9zM13.5 24.1h10.1V14H13.5v10.1zm1.599-1.6h6.9v-6.9h-6.9v6.9z"/>
                            </g>
                        </svg>
                    </button>
                    <button class="posts-list__switch-layout posts-list__switch-layout--list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22">
                            <g fill-rule="evenodd">
                                <path d="M9.457 3.445H24.87v-1.6H9.457zM0 5.289h5.289v-5.29H0v5.29zm1.5-1.5h2.289V1.5H1.5v2.29zM9.457 11.278H24.87v-1.6H9.457zM0 13.123h5.289v-5.29H0v5.29zm1.5-1.5h2.289v-2.29H1.5v2.29zM9.457 19.278H24.87v-1.6H9.457zM0 21.123h5.289v-5.29H0v5.29zm1.5-1.5h2.289v-2.29H1.5v2.29z"/>
                            </g>
                        </svg>
                    </button>
                </div>
                <hr class="posts-list__switch-divider">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 order-last">
                <?php get_template_part('template-parts/sidebar-section'); ?>
            </div>
            <div class="col-lg-8 order-first">
                <?php get_template_part('template-parts/banner-content-section'); ?>
                <div class="posts-list__container">
                <?php while (have_posts()) : the_post(); ?>
                <article class="posts-list__entry">
                    <a href="<?= esc_url( get_permalink() ); ?>" class="posts-list__entry-image">
                        <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('posts-list-thumbs', array('class' => 'posts-list__entry-thumb'));
                        }
                        ?>
                    </a>
                    <div class="posts-list__entry-caption">
                        <div>
                            <h3 class="posts-list__entry-title">
                                <?php the_title('<a href="'.get_the_permalink().'" class="posts-list__entry-title-link" title="'.get_the_title().'">', '</a>'); ?>
                            </h3>
                            <div class="posts-list__entry-meta">
                                <p class="posts-list__entry-author"><span><?= esc_html('Por: ', constant('DOMAIN_NAME')); ?></span><?php the_author(); ?></p>
                                <p class="posts-list__entry-date"><?= ucwords(get_the_date('j-F-Y'), '-'); ?></p>
                            </div>
                            <?php get_template_part('template-parts/tags-section'); ?>
                        </div>
                        <div>
                            <hr class="posts-list__entry-separator">
                            <div class="posts-list__entry-share">
                                <span class="posts-list__entry-share-label"><?= esc_html('COMPARTIR', constant('DOMAIN_NAME')); ?></span>
                                <div class="posts-list__entry-share-separator">
                                    <a href="" class="posts-list__entry-share-btn posts-list__entry-share-btn--fb">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="" class="posts-list__entry-share-btn posts-list__entry-share-btn--tt">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
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