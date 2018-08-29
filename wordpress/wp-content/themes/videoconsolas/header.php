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
        <div class="container h-100">
            <div class="row align-items-center h-100">
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
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'items_wrap' => '<ul class="header__nav-menu list-inline">%3$s</ul>', )
                        );
                        ?>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- End header -->