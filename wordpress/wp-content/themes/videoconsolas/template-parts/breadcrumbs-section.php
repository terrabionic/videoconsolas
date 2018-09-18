<ul class="breadcrumbs">
    <li class="breadcrumbs__item">
        <span class="breadcrumbs__main-item">Usted está en: </span>
        <?php if (is_home() || is_front_page()) : ?>
        <span class="breadcrumbs__item-link breadcrumbs__item-link--disable"><?= esc_html('Inicio', constant('DOMAIN_NAME')); ?></span>
        <?php else : ?>
        <a class="breadcrumbs__item-link" href="<?= get_option('home'); ?>" title="<?= esc_html('Inicio', constant('DOMAIN_NAME')); ?>">
            <?= esc_html('Inicio', constant('DOMAIN_NAME')); ?>
        </a>
        <?php endif; ?>
    </li>

    <?php if (is_category() || is_single()) : ?>
    <li class="breadcrumbs__item">
    <?php the_category('</li><li class=" class="breadcrumbs__item">'); ?>
    <?php endif; ?>

    <?php if (is_single()) : ?>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        <span class="breadcrumbs__item-text">
            <?php the_title(); ?>
        </span>
    </li>
    <?php elseif (is_page()) : ?>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        <span class="breadcrumbs__item-text">
            <?php the_title(); ?>
        </span>
    </li>
    <?php elseif (is_404()) : ?>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        <span class="breadcrumbs__item-text">
            404
        </span>
    </li>
    <?php elseif (is_search()) : ?>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        <span class="breadcrumbs__item-text">
            <?php the_search_query(); ?>
        </span>
    </li>
    <?php endif; ?>
</ul>