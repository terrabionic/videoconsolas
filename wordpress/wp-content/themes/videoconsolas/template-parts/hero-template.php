    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                Tagline / slogan
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="search" method="get" action="<?= home_url('/'); ?>" class="hero__search-form">
                        <div class="hero__search-field">
                            <input name="s" type="search" class="hero__search-input" placeholder="Consolas, videojuegos" value="<?= get_search_query() ?>" title="Consolas, videojuegos">
                            <button type="submit" class="hero__search-btn">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero -->