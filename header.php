<?php

/**
 * This template is for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Wordpress Learning</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod('faham_menu_position'); ?>">
    <div id="notice">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url() ?>"><img src="<?php echo get_theme_mod('faham_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>
