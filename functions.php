<?php

function oneportfolio_script_enqueue(){
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(),'v5.2.0', 'all');
    wp_enqueue_style('bootstrap-icons',get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(),'v5.2.0', 'all');
    wp_enqueue_style('glightbox-min',get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', array(),'v5.2.0', 'all');
    wp_enqueue_style('swiper-bundle-min',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(),'v5.2.0', 'all');
    wp_enqueue_style('theme',get_template_directory_uri().'/assets/css/style.css', array(),'v5.2.0', 'all');
    wp_enqueue_script('purecounter_vanilla-JS', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js', array(), 'v1.0.0', true);
    wp_enqueue_script('bootstrap-bundle-min-JS', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 'v1.0.0', true);
    wp_enqueue_script('glightbox-JS', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array(), 'v1.0.0', true);
    wp_enqueue_script('swiper-bundle-min-js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array(), 'v1.0.0', true);
    wp_enqueue_script('typed-min-js', get_template_directory_uri().'/assets/vendor/typed.js/typed.min.js', array(), 'v1.0.0', true);
    wp_enqueue_script('validate-js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array(), 'v1.0.0', true);
    wp_enqueue_script('validate-js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array(), 'v1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array(), 'v1.0.0', true);
};
add_action('wp_enqueue_scripts', 'oneportfolio_script_enqueue');


function oneportfolio_theme_support(){
    
    add_theme_support('menus');
    register_nav_menu( 'primary','Header Menu');
    register_nav_menu( 'secondary','Footer Menu');
};

add_action('init', 'oneportfolio_theme_support');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



?>