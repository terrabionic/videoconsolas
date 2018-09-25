<div class="sidebar">
    <button class="sidebar__mobile-trigger">
        <?= esc_html__('Filtrar artículos') ?>
    </button>

    <div class="sidebar__mobile-mask">
        <div class="sidebar__mobile-container">
            <!-- Banner sidebar -->
            <?php if ( is_active_sidebar('banner_sidebar') ) : ?>
            <div class="banner-sidebar">
                <?php dynamic_sidebar('banner_sidebar'); ?>
                <?php dynamic_sidebar('banner_sidebar_mobile'); ?>
            </div>
            <?php endif; ?>
            <!-- End banner sidebar -->

            <!-- Topics -->
            <?php
            $categories = get_categories();
            if ($categories) :
            ?>
            <div class="sidebar__topics">
                <h3 class="sidebar__topics-title">
                    <?= esc_html('TEMAS', constant('DOMAIN_NAME')); ?>
                </h3>
                <ul class="sidebar__topics-list list-unstyled">
                    <?php foreach($categories as $category): ?>
                    <li class="sidebar__topics-item">
                        <a href="<?= get_category_link($category->term_id); ?>" class="sidebar__topics-link"><?= $category->name; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <!-- End topics -->

            <!-- Banner sidebar -->
            <?php if ( is_active_sidebar('banner_sidebar2') ) : ?>
            <div class="banner-sidebar">
                <?php dynamic_sidebar('banner_sidebar2'); ?>
                <?php dynamic_sidebar('banner_sidebar2_mobile'); ?>
            </div>
            <?php endif; ?>
            <!-- End banner sidebar -->

            <!-- Must see -->
            <div class="sidebar__must-see">
                <h3 class="sidebar__must-see-title">
                    TIENES <span>QUE VER</span>
                </h3>
                <div class="sidebar__must-see-separator">
                    <svg xmlns="http://www.w3.org/2000/svg" width="179" height="26" viewBox="0 0 179 26">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="#BDD63B" d="M88.443 3.799h-1.927V1.87h1.927v1.927h1.895V1.871h1.926V0h7.707v1.871h-7.706v1.927h-1.897v1.927h-1.926V3.798zm-9.636 9.772h-1.924v-1.927h1.926v1.926h1.927v1.927h-1.929v-1.926zm3.856 3.852h1.927v1.928h1.926v1.928h-1.927V19.35h-1.926v-1.927h-1.927v-1.927h1.927v1.926zm5.78 5.782h1.896v-1.927h1.925v-1.927h1.927v1.928h-1.927v1.926H90.37v1.926h-1.927v-1.925h-1.927v-1.927h1.927v1.926zM99.97 13.57v-1.926h1.928v1.927H99.97v1.926h-1.925v1.927h-1.927v1.927H94.19v-1.928h1.928v-1.926h1.925V13.57h1.927zm1.936-1.926V3.797h1.872v7.847h-1.872zM99.971 3.8V1.87h1.928V3.8H99.97zM75 11.644V3.797h1.87v7.847H75zm3.809-9.773V0h7.707v1.871h-7.707zm.027 3.862h1.872v-.036h-.035V3.826h3.977v1.871h-2.07v1.908h-1.872v2.104h-1.872V5.733zM76.883 3.8V1.87h1.926V3.8h-1.926z"/>
                            <path stroke="#F1F1F3" stroke-linecap="square" stroke-width="2" d="M124.5 12.5h53M1.5 11.25h53"/>
                        </g>
                    </svg>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'must-see',
                    'container' => false,
                    'items_wrap' => '<ul class="sidebar__must-see-list list-unstyled">%3$s</ul>', )
                );
                ?>
            </div>
            <!-- End must see -->
        </div>
    </div>
</div>