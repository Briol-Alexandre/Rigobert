<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background min-h-screen relative'); ?>>
    <header id="site-header"
        class="<?= is_front_page() ? 'fixed bg-transparent text-background' : 'sticky bg-white text-main' ?>  top-0 z-50 w-full grid-main transition-all duration-300">
        <nav class="col-start-2 col-end-12 main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </nav>
    </header>