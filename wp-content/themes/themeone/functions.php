<?php

function themeone_bootstraping(){
    load_theme_textdomain("themeone");
    add_theme_support("post_thumbnails");
    add_theme_support("title_tag");
}

add_action("after_setup_theme", "themeone_bootstraping");



function themeone_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
}

add_action("wp_enqueue_scripts", "themeone_assets");


function themeone_sidebar(){
    register_sidebar(array(
        'name' => __('single post right sidebar', 'themeone'),
        'id' => 'single_post_right_sidebar',
        'description' => __('single post right sidebar', 'themeone'),
        'before_widgets' => '<section id="%1$s" class="widget %2$s">',
        'after_widgets' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action("widgets_init", "themeone_sidebar");