<?php
/**
 * Template Name: Privacy page template
 */

get_header();
?>

<?php get_template_part('template-parts/breadcrumbs-section'); ?>

<section class="privacy__content">
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

<?php get_footer(); ?>