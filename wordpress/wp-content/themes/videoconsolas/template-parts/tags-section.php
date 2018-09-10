<!-- Tags -->
<?php
$posttags = get_the_tags();

if ($posttags) :
?>
<div class="content__tags tags">
    <ul class="tags__list">
    <?php
    $colors = array(
        'primary',
        'secondary',
        'extra'
    );

    
        foreach($posttags as $tag):
    ?>
        <li class="tags__item tags__item--<?= $colors[array_rand($colors)]; ?>">
            <a href="<?= get_tag_link($tag->term_id); ?>" class="tags__item-link"><?= $tag->name; ?></a>
        </li>
    <?php endforeach; ?>  
    </ul>
</div>
<?php endif ?>
<!-- End tags -->