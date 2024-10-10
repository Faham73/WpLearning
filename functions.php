<?php

/**
 * My Theme Function
 */

//  All Default Functions Here
include_once('inc/default.php');

// Adding Custom post
include_once('inc/custom_post.php');

// Theme CSS and JS file calling
include_once('inc/enqueue.php');

// Theme Function
include_once('inc/theme_function.php');

// Menu Register
include_once('inc/menu_register.php');

// Widgets Register
include_once('inc/widgets_register.php');

// comments
function faham_get_icon_svg( $icon ) {
    if ( 'arrow_left' === $icon ) {
        return '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"><path d="M15 18l-6-6 6-6"/></svg>';
    } elseif ( 'arrow_right' === $icon ) {
        return '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>';
    }
    return '';
}