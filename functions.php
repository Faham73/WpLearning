<?php

/**
 * My Theme Function
 */

//Theme Title
add_theme_support('title-tag');

// Theme CSS and JS file calling
function faham_css_js_file_calling()
{
    wp_enqueue_style('faham_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.0.0', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');


    // jQuery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.0.0', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true');
}

add_action('wp_enqueue_scripts', 'faham_css_js_file_calling');


// Google Fonts 
function faham_add_google_fonts()
{
    wp_enqueue_style('faham_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'faham_add_google_fonts');


// Theme Function
function faham_customizar_register($wp_customize)
{
    $wp_customize->add_section('faham_header_area', array(
        'title' => __('Header Area', 'twentytwentytwo'),
        'description' => 'If you want to change anything of header area you can do it here'
    ));
    $wp_customize->add_setting('faham_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.PNG',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'faham_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you want to change logo you can do it here.',
        'setting'  => 'faham_logo',
        'section' => 'faham_header_area'
    )));

    // Menu Position Option
    $wp_customize->add_section('faham_menu_option', array(
        'title' => __('Menu Position Option', 'twentytwentytwo'),
        'description' => 'If you want to change menu position you can do it here'
    ));

    $wp_customize->add_setting('faham_menu_position', array(
        'default' => 'right_menu'
    ));

    $wp_customize->add_control('faham_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'If you want to change menu position you can do it here.',
        'setting' =>  'faham_menu_position',
        'section' => 'faham_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));
}

add_action('customize_register', 'faham_customizar_register');


// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'twentytwentytwo'));

// Walker menu Properties
function faham_nav_description($item_output,  $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', 'span class=""walker_nav>' . $item->description . '</span>' .  $args->link_after . '</a>', $item_output);
    }
}

add_filter('walker_nav_menu_start_el',  'faham_nav_description', 10, 4);
