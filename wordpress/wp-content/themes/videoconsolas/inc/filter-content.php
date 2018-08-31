<?php
/**
 * Add classes to headings
 *
 * @param [string] $content
 * @return void
 */
function add_class_content_tags($content) {
    $content = preg_replace_callback('/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function($matches) {
        if (!stripos($matches[0], 'class=')) :
            $matches[0] = $matches[1].$matches[2].' class="content__head content__head--'.substr($matches[1], -1).'">'.$matches[3].$matches[4];
        endif;

        return $matches[0];
    }, $content );

    $content = preg_replace_callback('/(\<p(.*?))\>(.*)(<\/p>)/i', function($matches) {
        if (stripos($matches[0], '<img')) :
            $matches[0] = $matches[1].$matches[2].' class="content__paragraph content__paragraph--image">'.$matches[3].$matches[4];
        endif;

        return $matches[0];
    }, $content );

    $content = preg_replace_callback('/(\<p(.*?))\>(.*)(<\/p>)/i', function($matches) {
        if (stripos($matches[0], '<iframe')) :
            $matches[0] = $matches[1].$matches[2].' class="content__paragraph content__paragraph--iframe">'.$matches[3].$matches[4];
        endif;

        return $matches[0];
    }, $content );

    $content = preg_replace_callback('/(\<p(.*?))\>(.*)(<\/p>)/i', function($matches) {
        if (!stripos($matches[0], 'class=')) :
            $matches[0] = $matches[1].$matches[2].' class="content__paragraph">'.$matches[3].$matches[4];
        endif;

        return $matches[0];
    }, $content );

    return $content;
}
add_filter('the_content', 'add_class_content_tags');