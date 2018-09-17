<?php get_header(); ?>
<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="e404__breadcrumbs">
                <?php get_template_part('template-parts/breadcrumbs-section'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Hero -->
<section class="hero404">
    <div class="hero404__space"></div>
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
                <ul class="e404__posts-list">
                    <li class="e404__posts-item">
                        <a href="" class="e404__posts-link">
                            Top 5: Conoce las mejores consolas de videojuegos
                        </a>
                    </li>
                    <li class="e404__posts-item">
                        <a href="" class="e404__posts-link">
                            Top 5: Conoce las mejores consolas de videojuegos
                        </a>
                    </li>
                    <li class="e404__posts-item">
                        <a href="" class="e404__posts-link">
                            Top 5: Conoce las mejores consolas de videojuegos
                        </a>
                    </li>
                    <li class="e404__posts-item">
                        <a href="" class="e404__posts-link">
                            Top 5: Conoce las mejores consolas de videojuegos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>