<div class="content-share share-buttons">
    <ul class="share-buttons__list">
        <li class="share-buttons__item share-buttons__item--fb">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url(get_the_permalink($post->ID)); ?>" target="_blank" class="share-buttons__item-link">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="share-buttons__item share-buttons__item--tt">
            <a href="https://twitter.com/home?status=<?= urlencode(get_the_title($post->ID))." - ".esc_url(get_the_permalink($post->ID)); ?>" target="_blank" class="share-buttons__item-link">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="share-buttons__item share-buttons__item--gplus">
            <a href="https://plus.google.com/share?url=<?= esc_url(get_the_permalink($post->ID)); ?>" target="_blank" class="share-buttons__item-link">
                <i class="fab fa-google-plus-g"></i>
            </a>
        </li>
    </ul>
</div>