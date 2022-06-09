<?php
function projektas_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','projektas_theme_support');

function projektas_menus(){  
    $locations = array(
        'primary' => "Desktop primary nav bar",
        'footer' => "Footer menu items",
        'logo' => "Logo return"
    );
    register_nav_menus($locations);
}
add_action('init', 'projektas_menus');

function projektas_register_styles(){
    wp_enqueue_style('projektas-template-styles', get_template_directory_uri().'/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('projektas-owl-style', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), null, 'all');
    wp_enqueue_style('projektas-owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), null, 'all');
    wp_enqueue_style('projektas-owl-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), null, 'all');
    wp_enqueue_style('projektas-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');

function projektas_register_scripts(){
    wp_enqueue_script('projektas-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-owl-script', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'projektas_register_scripts');    


?>