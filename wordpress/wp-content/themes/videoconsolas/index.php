<?php get_header(); ?>

<?php get_template_part('template-parts/hero-template'); ?>

    <?php while (have_posts()) : the_post(); ?>
    <main  <?php post_class('content'); ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        
                    <div class="content__container">
                        <h1 class="content__entry-title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="content__entry-body">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <footer class="content__comments">
                        <?php if (comments_open() || get_comments_number()) : ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </footer>

                </div>
            </div>
        </div>
    </main>
    <?php endwhile; ?>

<?php get_footer(); ?>