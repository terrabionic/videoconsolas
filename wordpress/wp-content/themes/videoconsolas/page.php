<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="header__logo">
                        <a href="#" class="header__logo-link" title="<?php bloginfo( 'name' ); ?>">
                            <?php if(has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                            <?php else : ?>
                            <span><?php bloginfo( 'name' ); ?></span>
                            <?php endif; ?>
                        </a>
                    </div>

                </div>
                <div class="col-lg-9">

                    <nav class="header__nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'items_wrap' => '<ul class="header__nav-menu">%3$s</ul>', )
                        );
                        ?>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                Tagline / slogan
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="search" method="get" action="<?= home_url('/'); ?>" class="hero__search-form">
                        <div class="hero__search-field">
                            <input name="s" type="search" class="hero__search-input" placeholder="Consolas, videojuegos" value="<?= get_search_query() ?>" title="Consolas, videojuegos">
                            <button type="submit" class="hero__search-btn">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero -->

    <!-- Content -->
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

            <!-- Related post -->
            <?php
            $cat = 'custom';

            $args = array (
                'cat' => $cat,
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => '6',
                'ignore_sticky_posts' => 1,
                'meta_key' => '_thumbnail_id',
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
            <div class="row">
                <div class="col-lg-12">

                    <section class="related-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="related-posts__title">
                                    <?php esc_html_e('Entradas relacionadas', constant('DOMAIN_NAME')); ?>
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" class="related-post__article">
                                    <a href="<?= esc_url(get_permalink()); ?>" class="related-post__article-link" rel="bookmark">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <h4 class="related-post__caption"><?php the_title(); ?></h4>
                                    </a>
                                </article>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <?php endif; wp_reset_postdata(); ?>
            <!-- End related post -->


            <?php if (comments_open() || get_comments_number()) : ?>
            <!-- Comments -->
            <div class="row">
                <div class="col-lg-12">
                    <footer class="content__comments">
                        <?php comments_template(); ?>
                    </footer>
                </div>
            </div>
            <!-- End comments -->
            <?php endif; ?>

        </div>
    </main>
    <?php endwhile; ?>
    <!-- End content -->
    
    <?php wp_footer(); ?>
</body>
</html>