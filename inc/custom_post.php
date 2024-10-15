<?php

function custom_slider(){
    register_post_type('slider', array(
        'labels' => array(
            'name' => __('Slider'),
            'singular_name' => ('Slider'),
            'add_new' => ('Add New Slider'),
            'add_new_item' =>  ('Add New Slider'),
            'edit_item' => ('Edit Slider'),
            'new_item' => ('New Slider'),
            'view_item' => ('View Slider'),
            'search_items' => ('Search Slider'),
            'not_found' => ('Sorry. No Slider found'),
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('title','thumbnail','editor','excerpt'),
    ));
}

add_action('init', 'custom_slider');

function custom_service(){
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' =>  ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => ('View Service'),
            'search_items' => ('Search Services'),
            'not_found' => ('Sorry. No Services found'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title','thumbnail','editor','excerpt'),
    ));
}

add_action('init', 'custom_service');