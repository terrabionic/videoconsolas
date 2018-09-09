    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="hero__sentence">Tagline / <span class="hero__sub-sentence">slogan</span></p>
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