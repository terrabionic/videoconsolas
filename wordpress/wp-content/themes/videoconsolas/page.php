<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs-section'); ?>

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

<?php get_footer(); ?>