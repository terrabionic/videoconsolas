<?php get_header(); ?>

<?php get_template_part('template-parts/hero-section'); ?>

    <!-- Content -->
    <?php while (have_posts()) : the_post(); ?>
    <main  <?php post_class('content'); ?>>
        <div class="container">

            <?php get_template_part('template-parts/content-section'); ?>

            <?php get_template_part('template-parts/related-posts-section'); ?>

            <?php comments_template(); ?>

        </div>
    </main>
    <?php endwhile; ?>
    <!-- End content -->

    <section class="nav-posts">
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
                                <a href="#" class="nav-posts__btn-link">
                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-previous.svg" alt="" class="nav-posts__btn-icon">
                                </a>
                            </li>
                            <li class="nav-posts__btn">
                                <a href="#" class="nav-posts__btn-link">
                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-random.svg" alt="" class="nav-posts__btn-icon">
                                </a>
                            </li>
                            <li class="nav-posts__btn">
                                <a href="#" class="nav-posts__btn-link">
                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-next.svg" alt="" class="nav-posts__btn-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>