<!-- Banner content -->
<?php if ( is_active_sidebar('banner_content') ) : ?>
<div class="banner-content">
    <?php dynamic_sidebar('banner_content'); ?>
    <?php dynamic_sidebar('banner_content_mobile'); ?>
</div>
<?php endif; ?>
<!-- End banner content -->