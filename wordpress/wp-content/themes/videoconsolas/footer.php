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
                                        QUICKLINKS
                                    </h4>
                                    <hr class="footer__links-separator">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="footer__links-menu-title">
                                    TEMAS
                                </h5>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-1',
                                    'container' => false,
                                    'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                );
                                ?>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="footer__links-menu-title">
                                    TEMAS
                                </h5>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-2',
                                    'container' => false,
                                    'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                );
                                ?>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="footer__links-menu-title footer__links-title">
                                    TEMAS
                                </h5>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-3',
                                    'container' => false,
                                    'items_wrap' => '<ul class="footer__links-menu list-unstyled">%3$s</ul>', )
                                );
                                ?>
                            </div>
                        </div>
                        <hr class="footer__links-separator">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="footer__links-section-title">
                                    SÍGUENOS
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
                            <div class="col-lg-8">
                                <h4 class="footer__links-section-title">
                                    Unete a la comunidad
                                </h4>
                                <div class="footer__links-subscribe">
                                    <p class="footer__links-subscribe-desc">
                                        Entérate de lo último en todo lo relacionado el mundo gamer.
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
                            <small>
                                Consolas Videojuegos copyright 2018
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>