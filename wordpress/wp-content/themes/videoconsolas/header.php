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

    <!-- Mobile menu -->
    <nav class="mobile-menu d-xl-none d-lg-none d-md-block d-sm-block d-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile-menu',
                        'container' => false,
                        'items_wrap' => '<ul class="mobile-menu__list list-inline">%3$s</ul>', )
                    );
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- End mobile menu -->

    <!-- Header -->
    <header class="header">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-3 col-md-4 col-sm-8 col-8">

                    <div class="header__logo">
                        <?php if(has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                        <?php else : ?>
                        <span><?php bloginfo( 'name' ); ?></span>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-lg-9 col-md-8 col-sm-4 col-4">

                    <nav class="header__nav d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'items_wrap' => '<ul class="header__nav-menu list-inline">%3$s</ul>', )
                        );
                        ?>
                    </nav>

                    <button class="header__burger-btn d-xl-none d-lg-none d-md-block d-sm-block d-block">
                        <i class="header__burger-line header__burger-line--gray"></i>
                        <i class="header__burger-line header__burger-line--primary"></i>
                        <i class="header__burger-line header__burger-line--secondary"></i>
                    </button>

                </div>
            </div>
        </div>
    </header>
    <!-- End header -->