<?php

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