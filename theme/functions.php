<?php

function load_stylesheets() {

    wp_register_style("wmk", get_template_directory_uri() . "/css/wmk.css?v=" . time(), array(), false, "all");
    wp_enqueue_style("wmk");
    if (is_front_page()) {
        wp_register_style("wmk-menu-mobile", get_template_directory_uri() . "/css/wmk-menu-mobile.css?v=" . time(), array(), false, "(max-width: 600px)");
        wp_enqueue_style("wmk-menu-mobile");
        wp_register_style("wmk-menu-wide", get_template_directory_uri() . "/css/wmk-menu-wide.css?v=" . time(), array(), false, "(min-width: 601px)");
        wp_enqueue_style("wmk-menu-wide");
    } else {
        wp_register_style("wmk-menu-mobile", get_template_directory_uri() . "/css/wmk-menu-mobile.css?v=" . time(), array(), false, "all");
        wp_enqueue_style("wmk-menu-mobile");
    }
}

add_action("wp_enqueue_scripts", "load_stylesheets");

add_theme_support("menus");
add_theme_support("post-thumbnails");
function wmk2020_nobreak_short_words($content) {
    return preg_replace('/(\s+)(do|i|na|w|z|ze)(\s+)/i', '${1}${2}&nbsp;', $content);
}
add_filter('the_content', 'wmk2020_nobreak_short_words');
add_filter('get_the_excerpt', 'wmk2020_nobreak_short_words');

register_nav_menus(
    array(
        "nav-menu" => __("Nav Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme"),
    )
);
?>