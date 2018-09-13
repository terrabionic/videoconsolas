<?php get_header(); ?>

<?php get_template_part('template-parts/hero-section'); ?>

    <!-- Posts list -->
    <section class="posts-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="posts-list__switch-buttons">
                        <button class="posts-list__switch-layout posts-list__switch-layout--active posts-list__switch-layout--grid">
                            <svg version="1.1" id="grid-layout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 28.9" style="enable-background:new 0 0 29.1 28.9;" xml:space="preserve"><path class="st0" d="M10.8,0H1c-0.6,0-1,0.5-1,1v9.8c0,0.6,0.5,1,1,1h9.8c0.6,0,1-0.5,1-1V1.1C11.8,0.5,11.4,0,10.8,0z M9.8,9.8 H2.1V2.1h7.7V9.8z"></path><path class="st0" d="M28,0h-9.8c-0.6,0-1,0.5-1,1v9.8c0,0.6,0.5,1,1,1H28c0.6,0,1-0.5,1-1V1.1C29,0.5,28.6,0,28,0z M27,9.8h-7.7 V2.1H27V9.8z"></path><path class="st0" d="M10.8,17H1c-0.6,0-1,0.5-1,1v9.8c0,0.6,0.5,1,1,1h9.8c0.6,0,1-0.5,1-1V18C11.8,17.4,11.4,17,10.8,17z M9.8,26.7H2.1V19h7.7V26.7z"></path><path class="st0" d="M28,17h-9.8c-0.6,0-1,0.5-1,1v9.8c0,0.6,0.5,1,1,1H28c0.6,0,1-0.5,1-1V18C29,17.4,28.6,17,28,17z M27,26.7 h-7.7V19H27V26.7z"></path></svg>
                        </button>
                        <button class="posts-list__switch-layout posts-list__switch-layout--list">
                            <svg version="1.1" id="list-layout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27.2 23.8" style="enable-background:new 0 0 27.2 23.8;" xml:space="preserve"><g> <circle class="st0" cx="1.7" cy="1.6" r="1.6"></circle><path class="st0" d="M7.6,2.9h18.2c0.7,0,1.3-0.6,1.3-1.3s-0.6-1.3-1.3-1.3H7.6c-0.7,0-1.3,0.6-1.3,1.3S6.9,2.9,7.6,2.9z"></path><circle class="st0" cx="1.7" cy="11.9" r="1.6"></circle><path class="st0" d="M25.8,10.6H7.6c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3h18.2c0.7,0,1.3-0.6,1.3-1.3S26.5,10.6,25.8,10.6z"></path><circle class="st0" cx="1.7" cy="22.2" r="1.6"></circle><path class="st0" d="M25.8,20.9H7.6c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3h18.2c0.7,0,1.3-0.6,1.3-1.3 C27.1,21.5,26.5,20.9,25.8,20.9z"></path></g></svg>
                        </button>
                    </div>
                    <hr class="posts-list__switch-divider">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 order-last">
                    dsadasdas
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