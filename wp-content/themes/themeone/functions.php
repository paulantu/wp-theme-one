<?php


// Solution for the Cashing Issue
if(site_url() == "http://themedevone.test"){
    define("VERSION" , time());
}else{
    define("VERSION", wp_get_theme()->get("Version"));
}




// Basic theme configuration
function themeone_bootstraping(){
    load_theme_textdomain("themeone");
    add_theme_support("post_thumbnails");
    add_theme_support("title_tag");
    $themeone_custom_header_details = array(
        "header_text" => true,
        "default-text-color" => "#000000",
        "width" => 1200,
        "height" => 600,
        "flex-width" => true,
        "flex-height" => true,
    );
    add_theme_support("custom-header", $themeone_custom_header_details);
    $themeone_custom_logo_defaults = array(
        "width" => 100,
        "height" => 100, 
    );
    add_theme_support("custom-logo", $themeone_custom_logo_defaults);
    add_theme_support("post-formats",  array('aside', 'quote', 'status', 'image', 'gallery', 'chat', 'link', 'audio', 'video'));
}

add_action("after_setup_theme", "themeone_bootstraping");





// Basic theme assets connection
function themeone_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri(), null, VERSION );
    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("fetherlight-css", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");

    wp_enqueue_style("dashicons");
    

    wp_enqueue_script("fetherlight-js", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js", array("jquery"), VERSION, true);

}

add_action("wp_enqueue_scripts", "themeone_assets");





// Theme Sidebar Configuration
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





// Theme menu register
function themeone_register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
       )
     );
   }
   add_action( 'init', 'themeone_register_my_menus' );






// Theme menu css class add
   function filter_handler( $classes, $item, $args, $depth ) {
    $classes[] = 'list-inline-item';
    return $classes;
   }

add_filter( 'nav_menu_css_class', 'filter_handler', 10, 4 );






function themeone_custom_header_setup(){
    if(is_front_page()){
        if(current_theme_supports("custom-header")){
           ?>

            <style>
                .top-header{
                    background-image: url(<?php echo header_image(); ?>);
                    background-size: cover;
                    background-position: center;
                }

                .top-header p, .top-header h1{
                    color: #<?php echo get_header_textcolor();?>;

                    <?php
                    if(!display_header_text()){
                        echo "display: none;";
                    }
                    ?>
                }
            </style>


            <?php
        }
    }
}


add_action("wp_head", "themeone_custom_header_setup",11);