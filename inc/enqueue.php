<?php


function faham_css_js_file_calling()
{
    wp_enqueue_style('faham_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.0.0', 'all');
    wp_register_style('bxslider.min', get_template_directory_uri() . '/css/bxslider.min.css', array(), '4.2.17', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bxslider.min');
    wp_enqueue_style('custom');


    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-3.1.1.min', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '3.1.1', 'true');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.0.0', 'true');
    wp_enqueue_script('bxslider.min', get_template_directory_uri() . '/js/bxslider.min.css', array(), '4.2.17', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true');
}

add_action('wp_enqueue_scripts', 'faham_css_js_file_calling');


// Google Fonts 
function faham_add_google_fonts()
{
    wp_enqueue_style('faham_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:wght@100;400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'faham_add_google_fonts');
