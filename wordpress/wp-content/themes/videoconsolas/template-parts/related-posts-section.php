<!-- Related post -->
<?php
$cat = get_the_category();

$args = array (
    'cat' => $cat->slug,
    'post__not_in' => array(get_the_ID()),
    'posts_per_page' => '3',
    'meta_key' => '_thumbnail_id',
);

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
<div class="row">
    <div class="col-lg-12">

        <section class="related-posts">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-posts__title">
                        <?php esc_html_e('Entradas relacionadas', constant('DOMAIN_NAME')); ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <?php
                $colors = array(
                    'primary',
                    'secondary',
                    'extra'
                );

                while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-lg-4">
                    <article id="post-<?php the_ID(); ?>" class="related-posts__article related-posts__article--<?= $colors[array_rand($colors)]; ?>">
                        <a href="<?= esc_url(get_permalink()); ?>" class="related-posts__article-link" rel="bookmark">
                            <?php the_post_thumbnail('related-thumbs', array('class' => 'related-posts__article-thumb')); ?>
                            <h4 class="related-posts__caption"><?php the_title(); ?></h4>
                        </a>
                    </article>
                </div>
                <?php endwhile; ?>
            </div>
        </section>

    </div>
</div>

<?php endif; wp_reset_postdata(); ?>
<!-- End related post -->