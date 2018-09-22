<?php
/**
 * Template Name: Sitemap page template
 */

get_header();
?>

<?php get_template_part('template-parts/breadcrumbs-section'); ?>

<section class="sitemap__content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Content -->
                <?php while (have_posts()) : the_post(); ?>
                <main  <?php post_class('content'); ?>>
                    <div class="container">

                        <?php get_template_part('template-parts/content-section'); ?>

                        <?php comments_template(); ?>

                    </div>
                </main>
                <?php endwhile; ?>
                <!-- End content -->
            </div>
        </div>
    </div>
</section>

<section class="sitemap__menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sitemap__container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'sitemap',
                    'container' => false,
                    'items_wrap' => '<ul class="sitemap__menu-list">%3$s</ul>', )
                );
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>