    <!-- Hero -->
    <section class="hero" style="background-image:url(<?= get_field( 'background_hero_section', 'option' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="hero__sentence"><?= get_field('slogan_part_1', 'option') ?> / <span class="hero__sub-sentence"><?= get_field('slogan_part_2', 'option') ?></span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="search" method="get" action="<?= home_url('/'); ?>" class="hero__search-form">
                        <div class="hero__search-field">
                            <input name="s" type="search" class="hero__search-input" placeholder="Consolas, videojuegos" value="<?= get_search_query() ?>" title="Consolas, videojuegos" autocomplete="off">
                            <button type="submit" class="hero__search-btn">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero -->