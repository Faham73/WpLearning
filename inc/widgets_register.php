<?php
// Sidebar Register Function

function faham_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'twentytwentytwo'),
        'id' => 'sidebar-1',
        'description' =>  __('Add widgets here to appear in your sidebar.', 'twentytwentytwo'),
        'before_widget' => '<div class="child_sidebar" >',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1', 'twentytwentytwo'),
        'id' => 'footer-1',
        'description' =>  __('Add widgets here to appear in your sidebar.', 'twentytwentytwo'),
        'before_widget' => '<div class="child_sidebar" >',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'twentytwentytwo'),
        'id' => 'footer-2',
        'description' =>  __('Add widgets here to appear in your sidebar.', 'twentytwentytwo'),
        'before_widget' => '<div class="child_sidebar" >',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'twentytwentytwo'),
        'id' => 'footer-3',
        'description' =>  __('Add widgets here to appear in your sidebar.', 'twentytwentytwo'),
        'before_widget' => '<div class="child_sidebar" >',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init','faham_widgets_register');