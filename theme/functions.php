<?php

function load_stylesheets() {
    wp_register_style("wmk", get_template_directory_uri() . "/css/wmk.css?v=" . time(), array(), false, "all");
    wp_enqueue_style("wmk");
    wp_register_style("brands-fontawesome", get_template_directory_uri() . "/css/brands.css?v=" . time(), array(), false, "all");
    wp_enqueue_style("brands-fontawesome");
}

add_action("wp_enqueue_scripts", "load_stylesheets");

add_theme_support("menus");
add_theme_support("post-thumbnails");

register_nav_menus(
    array(
        "nav-menu" => __("Nav Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme"),
    )
);
?>