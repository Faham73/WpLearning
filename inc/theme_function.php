<?php


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

    // Footer Position Option
    $wp_customize->add_section('faham_footer_option', array(
        'title' => __('Footer Position Option', 'twentytwentytwo'),
        'description' => 'If you want to change anything of footer area you can do it here'
    ));
    $wp_customize->add_setting('faham_copyright_section',array(
        'default' => '&copy; Copyright 2021 | towhidur@faham',
    ));
    $wp_customize->add_control('faham_copyright_section', array(
        'label' => 'Copyright Text',
        'description' => 'If you want to change footer position you can do it here.',
        'section' => 'faham_footer_option',
        'setting' => 'faham_footer_position'
    ));

}



add_action('customize_register', 'faham_customizar_register');
