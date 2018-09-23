    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="#" class="footer__logo-link" title="<?php bloginfo('name'); ?>">
                            <img src="<?= get_template_directory_uri(); ?>/dist/images/footer-logotype.svg" class="footer__logo" />
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer__links-section">
                                    <h4 class="footer__links-section-title">
                                        <?= esc_html__('QUICKLINKS', constant('DOMAIN_NAME')); ?>
                                    </h4>
                                    <hr class="footer__links-separator">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <h5 class="footer__links-menu-title">
                                    <?= esc_html__('TEMAS', constant('DOMAIN_NAME')); ?>
                                </h5>
                                <div class="footer__links-menu-mask">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-1',
                                        'container' => false,
                                        'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                    );
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <h5 class="footer__links-menu-title">
                                    <?= esc_html__('NOSOTROS', constant('DOMAIN_NAME')); ?>
                                </h5>
                                <div class="footer__links-menu-mask">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-2',
                                        'container' => false,
                                        'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                    );
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <h5 class="footer__links-menu-title footer__links-title">
                                    <?= esc_html__('AYUDA', constant('DOMAIN_NAME')); ?>
                                </h5>
                                <div class="footer__links-menu-mask">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-3',
                                        'container' => false,
                                        'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr class="footer__links-separator">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <h4 class="footer__links-section-title">
                                    <?= esc_html__('SÍGUENOS', constant('DOMAIN_NAME')); ?>
                                </h4>
                                <ul class="footer__links-social list-inline">
                                    <li class="footer__links-social-item list-inline-item">
                                        <a href="#" class="footer__links-social-link">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="footer__links-social-item list-inline-item">
                                        <a href="#" class="footer__links-social-link">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="footer__links-social-item list-inline-item">
                                        <a href="#" class="footer__links-social-link">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="footer__links-social-item list-inline-item">
                                        <a href="#" class="footer__links-social-link">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="footer__links-social-item list-inline-item">
                                        <a href="#" class="footer__links-social-link">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <h4 class="footer__links-section-title">
                                    <?= esc_html__('Unete a la comunidad', constant('DOMAIN_NAME')); ?>
                                </h4>
                                <div class="footer__links-subscribe">
                                    <p class="footer__links-subscribe-desc">
                                        <?= esc_html__('Entérate de lo último en todo lo relacionado el mundo gamer.', constant('DOMAIN_NAME')); ?>
                                    </p>
                                    <form role="search" method="get" action="<?= home_url('/'); ?>" class="footer__links-subscribe-form">
                                        <div class="footer__links-subscribe-field">
                                            <input name="s" type="search" class="footer__links-subscribe-input" placeholder="Escríbe tu email" value="<?= get_search_query() ?>" title="Consolas, videojuegos" autocomplete="off">
                                            <button type="submit" class="footer__links-subscribe-btn">Envíar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="footer__bottom-text">
                            <?= bloginfo('name'); ?> <?= date('Y'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>