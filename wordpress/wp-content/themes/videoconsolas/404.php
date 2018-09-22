<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs-section'); ?>

<!-- Hero -->
<section class="hero404">
    <img src="<?= get_template_directory_uri(); ?>/dist/images/404-image@3x.png" class="hero404__space">
    <div class="hero404__search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form role="search" method="get" action="<?= home_url('/'); ?>" class="hero404__search-form">
                        <div class="hero404__search-field">
                            <input name="s" type="search" class="hero404__search-input" placeholder="Busca un tema" value="<?= get_search_query() ?>" title="Busca un tema" autocomplete="off">
                            <button type="submit" class="hero404__search-btn">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->

<section class="e404__content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="e404__title-content"><?= esc_html__('TIENES QUE VER', constant('DOMAIN_NAME')); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'must-see-404',
                    'container' => false,
                    'items_wrap' => '<ul class="e404__posts-list">%3$s</ul>', )
                );
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>