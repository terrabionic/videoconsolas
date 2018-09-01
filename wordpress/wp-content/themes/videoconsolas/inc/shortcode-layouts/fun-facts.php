<?php
function fun_facts($atts) {
    $a = shortcode_atts(array(
        'title' => '',
        'content' => '',
    ), $atts);

    return '<div class="fun-fact">
                <div class="fun-fact__header">
                    <div class="fun-fact__head">
                        <img src="'.get_template_directory_uri().'/dist/images/funfact-icon.svg" alt="" class="fun-fact__icon" />
                        <h3 class="fun-fact__title">'.$a['title'].'</h3>
                    </div>
                </div>
                <div class="fun-fact__body">
                    <p class="fun-fact__content">
                        "'.$a['content'].'"
                    </p>
                </div>
            </div>';
}