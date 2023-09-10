<?php

// Solution for the Cashing Issue
if(site_url() == "http://themedevone.test"){
    define("VERSION" , time());
}else{
    define("VERSION", wp_get_theme()->get("Version"));
}

function rocket_theme_setup(){
    load_theme_textdomain("rocket");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme","rocket_theme_setup");


function rocket_theme_assets_load(){
    wp_enqueue_style("rocket",get_theme_file_uri());
    wp_enqueue_style("rocket-css",get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_style("bootstrap-css","//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome-css","//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");



    wp_enqueue_script("rocket-js",get_theme_file_uri("/assets/js/main.js"));
    wp_enqueue_script("font-awesome-js","//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js",array(),null,true);
    wp_enqueue_script("bootstrap-js","//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js",array(),null,true);
}
add_action("wp_enqueue_scripts","rocket_theme_assets_load");






function rocket_widgets_setup() {
	register_sidebar( array(
		'name'          => __( 'Footer right sidebar', 'rocket' ),
		'id'            => 'footer-right-sidebar-widgets',
		'description'   => __( 'Widgets in this area will be shown under footer right side.', 'rocket' ),
		'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
    ) );

    register_sidebar( array(
		'name'          => __( 'Footer left sidebar', 'rocket' ),
		'id'            => 'footer-left-sidebar-widgets',
		'description'   => __( 'Widgets in this area will be shown under footer left side.', 'rocket' ),
		'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
    ) );
}
add_action( 'widgets_init', 'rocket_widgets_setup' );





?>